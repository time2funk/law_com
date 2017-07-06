<?php

namespace Plugins\BlogBundle\Controller;

use Doctrine\ORM\NoResultException;
use Plugins\BlogBundle\Entity\BlogCategory;
use Plugins\BlogBundle\Entity\BlogTopic;
use Plugins\ContentBundle\Entity\Content;
use AppBundle\Controller\BaseController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class BlogController extends BaseController
{
    const NUMBER_LAST_POSTS_ON_HOMEPAGE = 5;
    const LIMIT_SHOW_POSTS = 10;
    const LIMIT_MOZAIC_ITEMS = 1;

    /**
     * Homepage action
     *
     * @param string $categoryUrl
     * @param string $topicUrl
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws NotFoundHttpException
     */
    public function indexAction(Request $request, $categoryUrl = null, $topicUrl = null)
    {
        $category = null;
        $topic = null;

        $page = (int)$request->get('page', 1);
        $phrases = $request->get('q', null);
        $offset = ($page > 1) ? self::LIMIT_SHOW_POSTS * ($page - 1) : 0;
        $route = 'plugins_blog_homepage';
        $parameters = array();

        if (!empty($categoryUrl)) {
            /** @var BlogCategory $category */
            $content = $category = $this->getBlogCategoryRepository()->findOneByUrl($categoryUrl);
            if (empty($category)) {
                throw new NotFoundHttpException();
            }
            $route = 'plugins_blog_view_category';
            $parameters['categoryUrl'] = $category->getUrl();
            if (!empty($topicUrl)) {
                /** @var BlogTopic $topic */
                $content = $topic = $this->getBlogTopicRepository()->findOneByUrl($topicUrl);
                if (empty($topic)) {
                    throw new NotFoundHttpException();
                }
                $route = 'plugins_blog_view_topic';
                $parameters['topicUrl'] = $category->getUrl();
            }
            $phrases = null;
        } else {
            $content = $this->getContentRepository()->findOneByKey(Content::CONTENT_BLOG_HOMEPAGE);
        }

        if (!empty($topic) && $topic->getBlogCategory()->getId() != $category->getId()) {
            throw new NotFoundHttpException();
        }

        $posts = $this->getBlogPostRepository()->findPosts(self::LIMIT_SHOW_POSTS, $offset, $category, $topic, $phrases);
        $allposts = $this->getBlogPostRepository()->findAllPosts($offset, $category, $topic, $phrases);
        $count = $this->getBlogPostRepository()->countPosts($category, $topic, $phrases);
        $pages = (int)ceil($count / self::LIMIT_SHOW_POSTS);
				$postname = 0;
				$hometrig = true;

        return $this->render('PluginsBlogBundle:Blog:index.html.twig', array(
            'category' => $category,
            'topic' => $topic,
            'content' => $content,
            'posts' => $posts,
            'allposts' => $allposts,
            'page' => $page,
            'pages' => $pages,
            'queries' => $phrases,
            'route' => $route,
            'parameters' => $parameters,
						'postname' => $postname,
						'hometrig' => $hometrig
        ));
    }

    /**
     * Render vertical menu block of blog
     *
     * @param integer $categoryId
     * @param integer $topicId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogVerticalMenuAction($categoryId = 0, $topicId = 0, $home = false, $name = 0)
    {

        $elements = $this->getBlogCategoryRepository()->findCategory();

        return $this->render('PluginsBlogBundle:Blog:vertical_menu.html.twig', array(
            'elements' => $elements,
            'categoryId' => $categoryId,
            'topicId' => $topicId,
						'home' => $home,
						'name' => $name
        ));
    }

    /**
     * Render popular posts
     */
    public function popularPostsAction()
    {
        $posts = $this->getBlogPostRepository()->findPopularPosts(self::NUMBER_LAST_POSTS_ON_HOMEPAGE);
        return $this->render('PluginsBlogBundle:Blog:popular_posts.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * View post action
     *
     * @param string $categoryUrl
     * @param string $topicUrl
     * @param string $postUrl
     * @param integer $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewPostAction($categoryUrl, $topicUrl = null, $postUrl, $id)
    {
        try {
            $post = $this->getBlogPostRepository()->findPost($id);
        } catch (NoResultException $e) {
            throw new NotFoundHttpException();
        }

				if ($this->isAmp()) {
					if (empty($post->getAmpContent())) {
						throw new NotFoundHttpException();
					}
					$template = 'amp_view_post.html.twig';
				} else {
					$template = 'view_post.html.twig';
				}
				return $this->render('PluginsBlogBundle:Blog:' . $template, array(
            'post' => $post
        ));
    }


    /**
     * Render blog block to homepage
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function shortAction()
    {
        $categories = $this->getBlogCategoryRepository()->findCategory();

        return $this->render('PluginsBlogBundle:Blog:short.html.twig', array(
            'categories' => $categories
        ));
    }


    /**
     * Render mozaic items
     */
    public function blogMozaicItemsAction($catreq = null) {
			$categories = $this->getBlogCategoryRepository()->findCategory();
			$category = $this->getBlogCategoryRepository()->findOneByUrl($catreq);
			$posts = $this->getBlogPostRepository()->findPosts(self::LIMIT_MOZAIC_ITEMS, 0, $category);

      return $this->render('PluginsBlogBundle:Blog:main-mozaic-blog-item.html.twig', array(
              'posts'   => $posts,
							'categories' => $categories,
	            'category' => $category
          ));
    }
    // pointer post search
    public function blogPostAction() {
      $request = $this->getRequest();
      $requestString = $request->get('searchText');

      $entities = $this->getBlogPostRepository()->findByString($requestString);
      $en_filtr =  \Doctrine\Common\Util\Debug::export($entities,4);

      foreach($en_filtr as $e){
        $id = $e->blogCategory->id;
        $parent = $this->getBlogCategoryRepository()->findById( $id );
        $par_filtr =  \Doctrine\Common\Util\Debug::export($parent[0],3);
        $e->short_home = $par_filtr->url;
      }

      return new Response(json_encode($en_filtr));
      // return new Response(($en_filtr));
    }
}
