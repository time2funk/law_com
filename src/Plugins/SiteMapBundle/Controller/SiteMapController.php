<?php

namespace Plugins\SiteMapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\BaseController;

class SiteMapController extends BaseController
{
    /**
     * List action
     */
    public function listAction($home = true)
    {
        $areas = $this->getPracticAreaRepository()->findShortList();
        $categories = $this->getBlogCategoryRepository()->findCategory();
        $attorneys = $this->getAttorneyRepository()->findAll();

        return $this->render('PluginsSiteMapBundle:SiteMap:list.html.twig', array(
                'areas'       => $areas,
                'categories'  => $categories,
                'attorneys'   => $attorneys,
								'home'				=> $home
            ));
    }
}
