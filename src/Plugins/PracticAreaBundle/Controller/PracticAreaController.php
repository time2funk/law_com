<?php

namespace Plugins\PracticAreaBundle\Controller;

use Plugins\PracticAreaBundle\Entity\PracticArea;
use Plugins\PracticAreaBundle\Entity\PracticAreaSubSection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use AppBundle\Controller\BaseController;
use Plugins\ContentBundle\Entity\Content;

// use Plugins\PracticAreaBundle\Entity\PracticAreaSubSection;
use Plugins\PracticAreaBundle\Repository\PracticAreaSection;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\NoResultException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class PracticAreaController extends BaseController
{
    /**
     * Render block of practic areas list
     */
    public function practicAreasShortListAction()
    {
        $areas = $this->getPracticAreaRepository()->findShortList();

        return $this->render('PluginsPracticAreaBundle:PracticArea:practic_areas_short_list.html.twig', array(
            'areas' => $areas
        ));
    }

    /**
     * Render block of practic for about
     */
    public function practicAreasShortAboutAction()
    {
        $areas = $this->getPracticAreaRepository()->findShortList();

        return $this->render('PluginsPracticAreaBundle:PracticArea:practic_areas_short_about.html.twig', array(
            'areas' => $areas
        ));
    }

    /**
     * View action
     *
     * @param string $url
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($url)
    {
        $page = $active = $this->getPracticAreaRepository()->findOneByUrl($url);
				// $phrases = $request->get('q', null);
        if (empty($page)) {
            throw new NotFoundHttpException();
        }

        if ($this->isAmp()) {
            if (empty($active->getAmpContent())) {
                throw new NotFoundHttpException();
            }
            $template = 'amp_view.html.twig';
        } else {
            $template = 'view.html.twig';
        }
        return $this->render('PluginsPracticAreaBundle:PracticArea:' . $template, array(
            'page'   => $page,
            // 'queries' => $phrases,
            'active' => $active
        ));
    }

    /**
     * View subsection action
     *
     * @param $urlSection
     * @param string $url
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewSubSectionAction($urlSection, $url)
    {
        /** @var PracticArea $practiceArea */
        $practiceArea = $this->getPracticAreaRepository()->findOneByUrl($urlSection);
        if (empty($practiceArea)) {
            throw new NotFoundHttpException();
        }
        /** @var PracticAreaSubSection $active */
        $active = $this->getPracticAreaSubSectionRepository()->findOneByUrl($url);
        if (empty($active)) {
            throw new NotFoundHttpException();
        }

        /** Redirect bad section */
        if ($active->getPracticArea()->getUrl() != $practiceArea->getUrl()) {
            return $this->redirect($this->generateUrl('plugins_practic_area_subsection_view', [
                'urlSection' => $active->getPracticArea()->getUrl(),
                'url' => $active->getUrl()
            ]), 301);
        }

        if ($this->isAmp()) {
            if (empty($active->getAmpContent())) {
                throw new NotFoundHttpException();
            }
            $template = 'amp_view_sub_section.html.twig';
        } else {
            $template = 'view_sub_section.html.twig';
        }

        return $this->render('PluginsPracticAreaBundle:PracticArea:' . $template, array(
            'practicArea' => $practiceArea,
            'page' => $active,
            'active' => $active
        ));
    }

    /**
     * Render vertical menu block of practic areas
     */
    public function practicVerticalMenuAction($activeId = 0, $home = false, $activeSubSectionId = 0)
    {
        $areas = $this->getPracticAreaRepository()->findShortList();
				$practiceArea = $this->getPracticAreaRepository()->findOneById($activeSubSectionId);

        return $this->render('PluginsPracticAreaBundle:PracticArea:vertical_menu.html.twig', array(
            'areas'                => $areas,
            'activeId'             => $activeId,
            'activeSubSectionId'   => $activeSubSectionId,
						'home'								 => $home
        ));
    }

    /**
     * Render vertical menu block of practic areas
     */
    public function practicVerticalMenuShortAction($activeId = 0, $home = false, $activeSubSectionId = 0)
    {
        $areas = $this->getPracticAreaRepository()->findShortList();

        return $this->render('PluginsPracticAreaBundle:PracticArea:vertical_menu_short.html.twig', array(
            'areas'                => $areas,
            'activeId'             => $activeId,
            'activeSubSectionId'   => $activeSubSectionId,
						'home'								 => $home
        ));
    }

    /**
     * Render vertical menu block of practic areas
     */
    public function practicMozaicItemsHardAction($area)
    {
      $areasShort = array();
      foreach($area as $a)
      {

        $letter = mb_substr($a,0,1);

        if( $letter == "_"){
          $new_a = substr($a, 1);
          $tmp = $this->getPracticAreaSubSectionRepository()->findOneByUrl($new_a);
          $areasShort[] = $tmp;
        }else{
          $tmp = $this->getPracticAreaRepository()->findOneByUrl($a);
          $areasShort[] = $tmp;
        }
      }
			$template = 'pa_blocks.html.twig';

      return $this->render('PluginsPracticAreaBundle:PracticArea:' . $template, array(
          'areasShort' => $areasShort
      ));
    }
    /**
     * Render vertical menu block of practic areas
     */
    public function practicMozaicItemsAction($area1 = null, $area2 = null, $area3 = null, $area4 = null, $area5 = null)
    {

        $areasShort = array(
          $this->getPracticAreaRepository()->findOneByUrl($area1),
          $this->getPracticAreaRepository()->findOneByUrl($area2),
          $this->getPracticAreaRepository()->findOneByUrl($area3),
          $this->getPracticAreaRepository()->findOneByUrl($area4),
          $this->getPracticAreaRepository()->findOneByUrl($area5)
        );

        if ($area5) {
            $template = 'pa_blocks.html.twig';
        } else {
            $template = 'main-mozaic-practice-item.html.twig';
        }

        return $this->render('PluginsPracticAreaBundle:PracticArea:' . $template, array(
            'areasShort'               => $areasShort,
            'area3'										 => $area3
        ));
    }

    /**
     * Render random practic areas
     */
    public function randomAreaAction()
    {

				$rand = $this->getPracticAreaRepository()->findShortList();

        return $this->render('PluginsPracticAreaBundle:PracticArea:random.html.twig', array(
            'rand'               => $rand
        ));
    }

    /**
     * Homepage for practice areas
     */
    public function indexAction() {
				// $phrases = $request->get('q', null);
				if ($this->isAmp()) {
					$page = $this->getContentRepository()->findOneByKey(Content::CONTENT_PRACTIC_AREAS_HOMEPAGE_AMP);

	        return $this->render('PluginsPracticAreaBundle:PracticArea:amp_index.html.twig', array(
	                'page' => $page
	            ));
				} else {
					$page = $this->getContentRepository()->findOneByKey(Content::CONTENT_PRACTIC_AREAS_HOMEPAGE);

        $categories = [
            [
                'url' => 'criminal-defence',
                'image' => '/images/i1.png',
                'name' => 'criminal<br>defense',
                'description' => 'Lorem ipsum dolor <br>sit amet, consectetur <br>adipiscing eli<br>'
            ],
            [
                'url' => 'family-law',
                'image' => '/images/i2.png',
                'name' => 'family<br>law',
                'description' => 'Lorem ipsum dolor <br>sit amet, consectetur <br>adipiscing eli<br>'
            ],
            [
                'url' => 'criminal-appeals',
                'image' => '/images/i3.png',
                'name' => 'criminal<br>appeals',
                'description' => 'Lorem ipsum dolor <br>sit amet, consectetur <br>adipiscing eli<br>'
            ],
            [
                'url' => 'civil-litigation',
                'image' => '/images/i4.png',
                'name' => 'civil<br>litigation',
                'description' => 'Lorem ipsum dolor <br>sit amet, consectetur <br>adipiscing eli<br>'
            ],
        ];

        return $this->render('PluginsPracticAreaBundle:PracticArea:index.html.twig', array(
            'page' => $page,
            // 'queries' => $phrases,
            'categories' => $categories
        ));
				}
    }
    public function paPostAction() {
      $request = $this->getRequest();
      $requestString = $request->get('searchText');

      $entities = $this->getPracticAreaSubSectionRepository()->findByString($requestString);
      $en_filtr =  \Doctrine\Common\Util\Debug::export($entities,5);

      foreach($en_filtr as $e){
        $id = $e->practicArea->id;
        $parent = $this->getPracticAreaRepository()->findById( $id );
        $par_filtr =  \Doctrine\Common\Util\Debug::export($parent[0],3);
        $e->subfolder = $par_filtr->url;
      }

      return new Response(json_encode($en_filtr));
      // return new Response(($en_filtr));
    }
}
