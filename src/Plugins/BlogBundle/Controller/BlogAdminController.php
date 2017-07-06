<?php

namespace Plugins\BlogBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogAdminController extends CRUDController
{
    /**
     * Get topic options by category
     * 
     * @param integer $categoryId
     */
    public function getTopicOptionsByCategoryAction(Request $request, $categoryId)
    {
        $html = ""; // HTML as response
        $category = $this->getDoctrine()
            ->getRepository('PluginsBlogBundle:BlogCategory')
            ->find($categoryId);
    
        $topics = $category->getBlogTopics();
    
        // add empty value
        $html .= '<option value="">none</option>';
        foreach($topics as $topic) {
            $html .= '<option value="'.$topic->getId().'">'.$topic->getName().'</option>';
        }
    
        return new Response($html, 200);
    }
}