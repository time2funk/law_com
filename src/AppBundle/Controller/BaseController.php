<?php

namespace AppBundle\Controller;

use Symfony\Component\Form\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{


    /**
     * Set parameters for ajax response
     *
     * @param boolean $success
     * @param $data
     * @return Response
     *
     */
    protected function getAjaxResponse($success, $data)
    {
        $return['code'] = $success ? 200 : 500;
        $return['data'] = $data;

        return new Response(json_encode($return), $return['code'], array('Content-Type' => 'application/json'));
    }

    /**
     * Get interest repository
     *
     * @return \AppBundle\Repository\InterestRepository
     */
    protected function getInterestRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('AppBundle:Interest');
    }

    /**
     * Get quote repository
     *
     * @return \AppBundle\Repository\QuoteRepository
     */
    protected function getQuoteRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('AppBundle:Quote');
    }

    /**
     * Get content repository
     *
     * @return \Plugins\ContentBundle\Repository\ContentRepository
     */
    protected function getContentRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('PluginsContentBundle:Content');
    }

    /**
     * Get practic area repository
     *
     * @return \Plugins\PracticAreaBundle\Repository\PracticAreaRepository
     */
    protected function getPracticAreaRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('PluginsPracticAreaBundle:PracticArea');
    }

    /**
     * Get practic area subsection repository
     *
     * @return \Plugins\PracticAreaBundle\Repository\PracticAreaSubSectionRepository
     */
    protected function getPracticAreaSubSectionRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('PluginsPracticAreaBundle:PracticAreaSubSection');
    }

    /**
     * Get attorney repository
     *
     * @return \AppBundle\Repository\AttorneyRepository
     */
    protected function getAttorneyRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('AppBundle:Attorney');
    }
    
    /**
     * Get news repository
     *
     * @return \Plugins\NewsBundle\Repository\NewsRepository
     */
    protected function getNewsRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('PluginsNewsBundle:News');
    }

    /**
     * Get blog category repository
     *
     * @return \Plugins\BlogBundle\Repository\BlogCategoryRepository
     */
    protected function getBlogCategoryRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('PluginsBlogBundle:BlogCategory');
    }

    /**
     * Get blog topic repository
     *
     * @return \Plugins\BlogBundle\Repository\BlogTopicRepository
     */
    protected function getBlogTopicRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('PluginsBlogBundle:BlogTopic');
    }

    /**
     * Get blog post repository
     *
     * @return \Plugins\BlogBundle\Repository\BlogPostRepository
     */
    protected function getBlogPostRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('PluginsBlogBundle:BlogPost');
    }

    /**
     * Get form validation error
     * @param Form $form
     * @return array
     */
    protected function getFormatedErrorMessages(Form $form)
    {
        $errors = array();
        foreach ($form->getErrors() as $key => $error) {
            $template = $error->getMessageTemplate();
            $parameters = $error->getMessageParameters();

            foreach ($parameters as $var => $value) {
                $template = str_replace($var, $value, $template);
            }

            $errors[$key] = $template;
        }
        if (!$form->isValid()) {
            foreach ($form as $fieldName => $formField) {
                if (!$formField->isValid()) {
                    foreach ($formField->getErrors() as $key => $error) {
                        $errors[$fieldName][$key] = $error->getMessage();
                    }
                }
            }
        }

        return $errors;
    }

    /**
     * Check is dev enveironment
     */
    protected function isDev()
    {
        return $this->container->get('kernel')->getEnvironment() === 'dev';
    }

    /**
     * Check is prod enveironment
     */
    protected function isProd()
    {
        return $this->container->get('kernel')->getEnvironment() === 'prod';
    }

    /**
     * CHeck is amp version
     */
    protected function isAmp() {
        $routeName = $this->get('request')->get('_route');
        return strpos($routeName, 'amp__') === 0;
    }
}
