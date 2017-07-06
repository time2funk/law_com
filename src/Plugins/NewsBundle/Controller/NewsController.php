<?php

namespace Plugins\NewsBundle\Controller;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;

use AppBundle\Controller\BaseController;
use Plugins\ContentBundle\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Plugins\NewsBundle\Entity\News;
use Plugins\NewsBundle\Repository\NewsRepository;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class NewsController extends BaseController
{
    const NUMBER_LAST_NEWS_ON_HOMEPAGE = 3;
    const LIMIT_SHOW_NEWS = 10;
    const LIMIT_SHOW_MOZAIC_NEWS = 10;
    const LIMIT_MOZAIC_ITEMS = 1;

    /**
     * News action
     *
     * @param integer $page
     */
    public function newsAction($page = 1, $home = false) {
        $offset = 0;
        if ($page > 1) {
            $offset = self::LIMIT_SHOW_NEWS * ($page - 1);
        }

        $elements = $this->getNewsRepository()->findNews(self::LIMIT_SHOW_NEWS, 'public_at', $offset);
        $pages = ceil(($this->getNewsRepository()->countNews()/self::LIMIT_SHOW_NEWS));
        $news = $this->getNewsRepository()->findLast(self::LIMIT_SHOW_NEWS);

        return $this->render('PluginsNewsBundle:News:news.html.twig', array(
                'content'    => $this->getContentRepository()->findOneByKey(Content::CONTENT_META_NEWS_PAGE),
                'news'       => $news,
                'elements'   => $elements,
                'page'       => $page,
                'pages'      => $pages,
                'queries'    => null,
								'home'			 => $home
            ));
    }

    /**
     * View action
     * @param string $url
     */
    public function viewAction($url) {
				$elements = $this->getNewsRepository()->findNews(self::LIMIT_SHOW_NEWS, 'public_at', 0);
        $page = $active = $this->getNewsRepository()->findOneByUrl($url);
        $news = $this->getNewsRepository()->findLast(self::LIMIT_SHOW_NEWS);

        if (empty($page)) {
            throw new NotFoundHttpException();
        }

        return $this->render('PluginsNewsBundle:News:view.html.twig', array(
                'page'   => $page,
                'elements'   => $elements,
                'news'   => $news,
                'active' => $active
        ));
    }

    /**
     * Render short news list for mozaic block
     */
    public function lastShortListAction() {
        $news = $this->getNewsRepository()->findLast(self::NUMBER_LAST_NEWS_ON_HOMEPAGE);

        return $this->render('PluginsNewsBundle:News:last_short_list.html.twig', array(
                'news'   => $news
            ));
    }

    /**
     * Render short news list
     */
    public function lastMozaicListAction() {
      $news = $this->getNewsRepository()->findLast(self::LIMIT_SHOW_MOZAIC_NEWS);

      return $this->render('PluginsNewsBundle:News:news_mozaic.html.twig', array(
              'news'   => $news
          ));
    }

    /**
     * Render mozaic items
     */
    public function newsMozaicItemsAction() {
      $news = $this->getNewsRepository()->findLast(self::LIMIT_MOZAIC_ITEMS);

      return $this->render('PluginsNewsBundle:News:main-mozaic-news-item.html.twig', array(
              'news'   => $news
          ));
    }


  // O U T _ P U T _ Y O U R _ D A T A
  // echo "<pre>";
  // print_r( \Doctrine\Common\Util\Debug::export($data,1) ); die("oopsy");


    public function newsPostAction() {
      $request = $this->getRequest();
      $requestString = $request->get('searchText');

      $entities = $this->getNewsRepository()->findByString($requestString);
      $en_filtr =  \Doctrine\Common\Util\Debug::export($entities,2);

      return new Response(json_encode($en_filtr));
      // return new Response($em);
    }

}
