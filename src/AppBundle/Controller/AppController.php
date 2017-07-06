<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Plugins\ContentBundle\Entity\Content;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class AppController extends BaseController
{

    /**
     * Index action
     */
    public function indexAction() {
        $whyUsBlock = $this->getContentRepository()->findOneByKey(Content::CONTENT_WHY_US);
        $page = $this->getContentRepository()->findOneByKey(Content::CONTENT_META_HOME_PAGE);
        $quotes = $this->getQuoteRepository()->findAll();

        $barAssociationBlock = $this->getContentRepository()->findOneByKey(Content::BAR_ASSOCIATION_BLOCK);

        // TODO check is blog not empty
        $blogDisable = false;

        return $this->render('AppBundle:App:index.html.twig', array(
                'whyUsBlock'          => $whyUsBlock,
                'page'                => $page,
                'quotes'              => $quotes,
                'blogDisable'         => $blogDisable
            ));
    }

    /**
     * Dev action
     */
    public function devAction() {

        return $this->render('AppBundle:App:dev.html.twig');
    }


    /**
     * Render google analytics
     */
    public function analyticsAction() {
        return $this->render('AppBundle:App:analytics.html.twig', array('show' => $this->isProd()));
    }

    /**
     * Attorney view action
     *
     * @param string $url
     */
    public function attorneyViewAction($url) {
        $attorneys = $this->getAttorneyRepository()->findAll();
        $attorney = $this->getAttorneyRepository()->findOneByUrl($url);
        if (empty($attorney)) {
            throw new NotFoundHttpException();
        }

        return $this->render('AppBundle:App:attorney_view.html.twig', array(
                'attorney'   => $attorney,
                'page'       => $attorney,
                'attorneys'  => $attorneys
        ));
    }

    /**
     * Render vertical menu block of practic areas
     */
    public function attorneyMenuAction($activeId = 0)
    {
        $attorneys = $this->getAttorneyRepository()->findAll();

        return $this->render('AppBundle:App:attorney_menu.html.twig', array(
            'attorneys'            => $attorneys,
            'activeId'             => $activeId,
        ));
    }

    /**
     * About us action
     */
    public function aboutUsAction() {
        $defaultAttorney = $this->getAttorneyRepository()->findOneByIsDefault(true);
        // if (!empty($defaultAttorney)) {
        //     return $this->redirect($this->generateUrl('app_about_attorney', array('url' => $defaultAttorney->getUrl())), 301);
        // } else {
        //     throw new NotFoundHttpException();
        // }

        $page = $this->getContentRepository()->findOneByKey(Content::CONTENT_META_ABOUT_US_PAGE);
        $clientServiceBlock = $this->getContentRepository()->findOneByKey(Content::CONTENT_CLIENT_SERVICE);
        $attorneys = $this->getAttorneyRepository()->findAll();

        return $this->render('AppBundle:App:about_us.html.twig', array(
                'clientServiceBlock'   => $clientServiceBlock,
                'page'                 => $page,
                'attorneys'            => $attorneys
            ));
    }

    /**
     * Render bar association block
     */
    public function barAssociationBlockAction() {
        $barAssociationBlock = $this->getContentRepository()->findOneByKey(Content::BAR_ASSOCIATION_BLOCK);

        return $this->render('AppBundle:App:bar_association_block.html.twig', array(
                'barAssociationBlock' => $barAssociationBlock
            ));
    }
}
