<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class AmpController extends BaseController
{
    /**
     * Get amp link if route exist for amp version
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ampLinkBlockAction(Request $request, $context = null)
    {
        $routeName = $request->get('_route');

        $name = null;
        $params = [];

        try {
            if ($context === null || !empty($context)) {
                $name = 'amp__' . $routeName;
                $params = $request->get('_route_params');
                $this->generateUrl($name, $params);
            }
        } catch (RouteNotFoundException $e) {
            $name = null;
            $params = [];
        }

        return $this->render('AppBundle:Amp:amp_link_block.html.twig', [
            'name' => $name,
            'params' => $params
        ]);
    }

    /**
     * Get canonical link from amp version
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function canonicalLinkBlockAction(Request $request)
    {
        $routeName = $request->get('_route');

        $name = str_replace('amp__', '', $routeName);
        $params = $request->get('_route_params');

        return $this->render('AppBundle:Amp:canonical_link_block.html.twig', [
            'name' => $name,
            'params' => $params
        ]);
    }
}
