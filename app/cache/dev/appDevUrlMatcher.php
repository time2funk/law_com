<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/220acd7')) {
                // _assetic_220acd7
                if ($pathinfo === '/css/220acd7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '220acd7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_220acd7',);
                }

                if (0 === strpos($pathinfo, '/css/220acd7_')) {
                    // _assetic_220acd7_0
                    if ($pathinfo === '/css/220acd7_admin_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '220acd7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_220acd7_0',);
                    }

                    // _assetic_220acd7_1
                    if ($pathinfo === '/css/220acd7_content_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '220acd7',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_220acd7_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/119673b')) {
                // _assetic_119673b
                if ($pathinfo === '/css/119673b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '119673b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_119673b',);
                }

                if (0 === strpos($pathinfo, '/css/119673b_')) {
                    // _assetic_119673b_0
                    if ($pathinfo === '/css/119673b_font-awesome.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '119673b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_119673b_0',);
                    }

                    // _assetic_119673b_1
                    if ($pathinfo === '/css/119673b_jquery.popup_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '119673b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_119673b_1',);
                    }

                    // _assetic_119673b_2
                    if ($pathinfo === '/css/119673b_style_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '119673b',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_119673b_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/a4fec1c')) {
                // _assetic_a4fec1c
                if ($pathinfo === '/js/a4fec1c.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4fec1c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a4fec1c',);
                }

                // _assetic_a4fec1c_0
                if ($pathinfo === '/js/a4fec1c_jquery-1.11.3.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4fec1c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a4fec1c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/7cd82f0')) {
                // _assetic_7cd82f0
                if ($pathinfo === '/js/7cd82f0.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7cd82f0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7cd82f0',);
                }

                if (0 === strpos($pathinfo, '/js/7cd82f0_jquery')) {
                    // _assetic_7cd82f0_0
                    if ($pathinfo === '/js/7cd82f0_jquery_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7cd82f0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7cd82f0_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/7cd82f0_jquery.')) {
                        // _assetic_7cd82f0_1
                        if ($pathinfo === '/js/7cd82f0_jquery.validate_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7cd82f0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7cd82f0_1',);
                        }

                        // _assetic_7cd82f0_2
                        if ($pathinfo === '/js/7cd82f0_jquery.popup_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7cd82f0',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7cd82f0_2',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/03f8bff')) {
                // _assetic_03f8bff
                if ($pathinfo === '/js/03f8bff.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '03f8bff',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_03f8bff',);
                }

                if (0 === strpos($pathinfo, '/js/03f8bff_')) {
                    // _assetic_03f8bff_0
                    if ($pathinfo === '/js/03f8bff_Popup_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '03f8bff',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_03f8bff_0',);
                    }

                    // _assetic_03f8bff_1
                    if ($pathinfo === '/js/03f8bff_Validate_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '03f8bff',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_03f8bff_1',);
                    }

                    // _assetic_03f8bff_2
                    if ($pathinfo === '/js/03f8bff_Form_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '03f8bff',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_03f8bff_2',);
                    }

                    // _assetic_03f8bff_3
                    if ($pathinfo === '/js/03f8bff_bootstrap_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '03f8bff',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_03f8bff_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/4b3ecb9')) {
                // _assetic_4b3ecb9
                if ($pathinfo === '/js/4b3ecb9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4b3ecb9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4b3ecb9',);
                }

                if (0 === strpos($pathinfo, '/js/4b3ecb9_')) {
                    // _assetic_4b3ecb9_0
                    if ($pathinfo === '/js/4b3ecb9_jquery_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4b3ecb9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4b3ecb9_0',);
                    }

                    // _assetic_4b3ecb9_1
                    if ($pathinfo === '/js/4b3ecb9_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4b3ecb9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4b3ecb9_1',);
                    }

                    // _assetic_4b3ecb9_2
                    if ($pathinfo === '/js/4b3ecb9_script_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4b3ecb9',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_4b3ecb9_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/practic_areas')) {
            // plugins_practic_area_homepage_old
            if (rtrim($pathinfo, '/') === '/practic_areas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'plugins_practic_area_homepage_old');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_practic_area_homepage',  'permanent' => true,  '_route' => 'plugins_practic_area_homepage_old',);
            }

            // plugins_practic_area_view_old
            if (preg_match('#^/practic_areas/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_practic_area_view_old')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_practic_area_view',  'permanent' => true,));
            }

            // plugins_practic_area_subsection_view_old
            if (preg_match('#^/practic_areas/(?P<urlSection>[^/]++)/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_practic_area_subsection_view_old')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_practic_area_subsection_view',  'permanent' => true,));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                if (0 === strpos($pathinfo, '/admin/app/attorney')) {
                    // admin_app_attorney_list
                    if ($pathinfo === '/admin/app/attorney/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.attorney',  '_sonata_name' => 'admin_app_attorney_list',  '_route' => 'admin_app_attorney_list',);
                    }

                    // admin_app_attorney_create
                    if ($pathinfo === '/admin/app/attorney/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.attorney',  '_sonata_name' => 'admin_app_attorney_create',  '_route' => 'admin_app_attorney_create',);
                    }

                    // admin_app_attorney_batch
                    if ($pathinfo === '/admin/app/attorney/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.attorney',  '_sonata_name' => 'admin_app_attorney_batch',  '_route' => 'admin_app_attorney_batch',);
                    }

                    // admin_app_attorney_edit
                    if (preg_match('#^/admin/app/attorney/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_attorney_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.attorney',  '_sonata_name' => 'admin_app_attorney_edit',));
                    }

                    // admin_app_attorney_delete
                    if (preg_match('#^/admin/app/attorney/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_attorney_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.attorney',  '_sonata_name' => 'admin_app_attorney_delete',));
                    }

                    // admin_app_attorney_show
                    if (preg_match('#^/admin/app/attorney/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_attorney_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.attorney',  '_sonata_name' => 'admin_app_attorney_show',));
                    }

                    // admin_app_attorney_export
                    if ($pathinfo === '/admin/app/attorney/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.attorney',  '_sonata_name' => 'admin_app_attorney_export',  '_route' => 'admin_app_attorney_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/quote')) {
                    // admin_app_quote_list
                    if ($pathinfo === '/admin/app/quote/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.quotes',  '_sonata_name' => 'admin_app_quote_list',  '_route' => 'admin_app_quote_list',);
                    }

                    // admin_app_quote_create
                    if ($pathinfo === '/admin/app/quote/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.quotes',  '_sonata_name' => 'admin_app_quote_create',  '_route' => 'admin_app_quote_create',);
                    }

                    // admin_app_quote_batch
                    if ($pathinfo === '/admin/app/quote/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.quotes',  '_sonata_name' => 'admin_app_quote_batch',  '_route' => 'admin_app_quote_batch',);
                    }

                    // admin_app_quote_edit
                    if (preg_match('#^/admin/app/quote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_quote_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.quotes',  '_sonata_name' => 'admin_app_quote_edit',));
                    }

                    // admin_app_quote_delete
                    if (preg_match('#^/admin/app/quote/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_quote_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.quotes',  '_sonata_name' => 'admin_app_quote_delete',));
                    }

                    // admin_app_quote_show
                    if (preg_match('#^/admin/app/quote/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_quote_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.quotes',  '_sonata_name' => 'admin_app_quote_show',));
                    }

                    // admin_app_quote_export
                    if ($pathinfo === '/admin/app/quote/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.quotes',  '_sonata_name' => 'admin_app_quote_export',  '_route' => 'admin_app_quote_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/interest')) {
                    // admin_app_interest_list
                    if ($pathinfo === '/admin/app/interest/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.interest',  '_sonata_name' => 'admin_app_interest_list',  '_route' => 'admin_app_interest_list',);
                    }

                    // admin_app_interest_show
                    if (preg_match('#^/admin/app/interest/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_interest_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.interest',  '_sonata_name' => 'admin_app_interest_show',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/plugins')) {
                if (0 === strpos($pathinfo, '/admin/plugins/content/content')) {
                    // admin_plugins_content_content_list
                    if ($pathinfo === '/admin/plugins/content/content/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.content',  '_sonata_name' => 'admin_plugins_content_content_list',  '_route' => 'admin_plugins_content_content_list',);
                    }

                    // admin_plugins_content_content_create
                    if ($pathinfo === '/admin/plugins/content/content/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.content',  '_sonata_name' => 'admin_plugins_content_content_create',  '_route' => 'admin_plugins_content_content_create',);
                    }

                    // admin_plugins_content_content_batch
                    if ($pathinfo === '/admin/plugins/content/content/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.content',  '_sonata_name' => 'admin_plugins_content_content_batch',  '_route' => 'admin_plugins_content_content_batch',);
                    }

                    // admin_plugins_content_content_edit
                    if (preg_match('#^/admin/plugins/content/content/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_content_content_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.content',  '_sonata_name' => 'admin_plugins_content_content_edit',));
                    }

                    // admin_plugins_content_content_show
                    if (preg_match('#^/admin/plugins/content/content/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_content_content_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.content',  '_sonata_name' => 'admin_plugins_content_content_show',));
                    }

                    // admin_plugins_content_content_export
                    if ($pathinfo === '/admin/plugins/content/content/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.content',  '_sonata_name' => 'admin_plugins_content_content_export',  '_route' => 'admin_plugins_content_content_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/plugins/practicarea/practicarea')) {
                    // admin_plugins_practicarea_practicarea_list
                    if ($pathinfo === '/admin/plugins/practicarea/practicarea/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.practic_area',  '_sonata_name' => 'admin_plugins_practicarea_practicarea_list',  '_route' => 'admin_plugins_practicarea_practicarea_list',);
                    }

                    // admin_plugins_practicarea_practicarea_create
                    if ($pathinfo === '/admin/plugins/practicarea/practicarea/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.practic_area',  '_sonata_name' => 'admin_plugins_practicarea_practicarea_create',  '_route' => 'admin_plugins_practicarea_practicarea_create',);
                    }

                    // admin_plugins_practicarea_practicarea_batch
                    if ($pathinfo === '/admin/plugins/practicarea/practicarea/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.practic_area',  '_sonata_name' => 'admin_plugins_practicarea_practicarea_batch',  '_route' => 'admin_plugins_practicarea_practicarea_batch',);
                    }

                    // admin_plugins_practicarea_practicarea_edit
                    if (preg_match('#^/admin/plugins/practicarea/practicarea/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_practicarea_practicarea_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.practic_area',  '_sonata_name' => 'admin_plugins_practicarea_practicarea_edit',));
                    }

                    // admin_plugins_practicarea_practicarea_delete
                    if (preg_match('#^/admin/plugins/practicarea/practicarea/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_practicarea_practicarea_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.practic_area',  '_sonata_name' => 'admin_plugins_practicarea_practicarea_delete',));
                    }

                    // admin_plugins_practicarea_practicarea_show
                    if (preg_match('#^/admin/plugins/practicarea/practicarea/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_practicarea_practicarea_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.practic_area',  '_sonata_name' => 'admin_plugins_practicarea_practicarea_show',));
                    }

                    // admin_plugins_practicarea_practicarea_export
                    if ($pathinfo === '/admin/plugins/practicarea/practicarea/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.practic_area',  '_sonata_name' => 'admin_plugins_practicarea_practicarea_export',  '_route' => 'admin_plugins_practicarea_practicarea_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/plugins/practicarea/practicareasubsection')) {
                        // admin_plugins_practicarea_practicareasubsection_list
                        if ($pathinfo === '/admin/plugins/practicarea/practicareasubsection/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.practic_area_sub_section',  '_sonata_name' => 'admin_plugins_practicarea_practicareasubsection_list',  '_route' => 'admin_plugins_practicarea_practicareasubsection_list',);
                        }

                        // admin_plugins_practicarea_practicareasubsection_create
                        if ($pathinfo === '/admin/plugins/practicarea/practicareasubsection/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.practic_area_sub_section',  '_sonata_name' => 'admin_plugins_practicarea_practicareasubsection_create',  '_route' => 'admin_plugins_practicarea_practicareasubsection_create',);
                        }

                        // admin_plugins_practicarea_practicareasubsection_batch
                        if ($pathinfo === '/admin/plugins/practicarea/practicareasubsection/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.practic_area_sub_section',  '_sonata_name' => 'admin_plugins_practicarea_practicareasubsection_batch',  '_route' => 'admin_plugins_practicarea_practicareasubsection_batch',);
                        }

                        // admin_plugins_practicarea_practicareasubsection_edit
                        if (preg_match('#^/admin/plugins/practicarea/practicareasubsection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_practicarea_practicareasubsection_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.practic_area_sub_section',  '_sonata_name' => 'admin_plugins_practicarea_practicareasubsection_edit',));
                        }

                        // admin_plugins_practicarea_practicareasubsection_delete
                        if (preg_match('#^/admin/plugins/practicarea/practicareasubsection/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_practicarea_practicareasubsection_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.practic_area_sub_section',  '_sonata_name' => 'admin_plugins_practicarea_practicareasubsection_delete',));
                        }

                        // admin_plugins_practicarea_practicareasubsection_show
                        if (preg_match('#^/admin/plugins/practicarea/practicareasubsection/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_practicarea_practicareasubsection_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.practic_area_sub_section',  '_sonata_name' => 'admin_plugins_practicarea_practicareasubsection_show',));
                        }

                        // admin_plugins_practicarea_practicareasubsection_export
                        if ($pathinfo === '/admin/plugins/practicarea/practicareasubsection/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.practic_area_sub_section',  '_sonata_name' => 'admin_plugins_practicarea_practicareasubsection_export',  '_route' => 'admin_plugins_practicarea_practicareasubsection_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/plugins/news/news')) {
                    // admin_plugins_news_news_list
                    if ($pathinfo === '/admin/plugins/news/news/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.news',  '_sonata_name' => 'admin_plugins_news_news_list',  '_route' => 'admin_plugins_news_news_list',);
                    }

                    // admin_plugins_news_news_create
                    if ($pathinfo === '/admin/plugins/news/news/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.news',  '_sonata_name' => 'admin_plugins_news_news_create',  '_route' => 'admin_plugins_news_news_create',);
                    }

                    // admin_plugins_news_news_batch
                    if ($pathinfo === '/admin/plugins/news/news/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.news',  '_sonata_name' => 'admin_plugins_news_news_batch',  '_route' => 'admin_plugins_news_news_batch',);
                    }

                    // admin_plugins_news_news_edit
                    if (preg_match('#^/admin/plugins/news/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_news_news_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.news',  '_sonata_name' => 'admin_plugins_news_news_edit',));
                    }

                    // admin_plugins_news_news_delete
                    if (preg_match('#^/admin/plugins/news/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_news_news_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.news',  '_sonata_name' => 'admin_plugins_news_news_delete',));
                    }

                    // admin_plugins_news_news_show
                    if (preg_match('#^/admin/plugins/news/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_news_news_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.news',  '_sonata_name' => 'admin_plugins_news_news_show',));
                    }

                    // admin_plugins_news_news_export
                    if ($pathinfo === '/admin/plugins/news/news/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.news',  '_sonata_name' => 'admin_plugins_news_news_export',  '_route' => 'admin_plugins_news_news_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/plugins/blog/blog')) {
                    if (0 === strpos($pathinfo, '/admin/plugins/blog/blogcategory')) {
                        // admin_plugins_blog_blogcategory_list
                        if ($pathinfo === '/admin/plugins/blog/blogcategory/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.blog_category',  '_sonata_name' => 'admin_plugins_blog_blogcategory_list',  '_route' => 'admin_plugins_blog_blogcategory_list',);
                        }

                        // admin_plugins_blog_blogcategory_create
                        if ($pathinfo === '/admin/plugins/blog/blogcategory/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.blog_category',  '_sonata_name' => 'admin_plugins_blog_blogcategory_create',  '_route' => 'admin_plugins_blog_blogcategory_create',);
                        }

                        // admin_plugins_blog_blogcategory_batch
                        if ($pathinfo === '/admin/plugins/blog/blogcategory/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.blog_category',  '_sonata_name' => 'admin_plugins_blog_blogcategory_batch',  '_route' => 'admin_plugins_blog_blogcategory_batch',);
                        }

                        // admin_plugins_blog_blogcategory_edit
                        if (preg_match('#^/admin/plugins/blog/blogcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.blog_category',  '_sonata_name' => 'admin_plugins_blog_blogcategory_edit',));
                        }

                        // admin_plugins_blog_blogcategory_delete
                        if (preg_match('#^/admin/plugins/blog/blogcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.blog_category',  '_sonata_name' => 'admin_plugins_blog_blogcategory_delete',));
                        }

                        // admin_plugins_blog_blogcategory_show
                        if (preg_match('#^/admin/plugins/blog/blogcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.blog_category',  '_sonata_name' => 'admin_plugins_blog_blogcategory_show',));
                        }

                        // admin_plugins_blog_blogcategory_export
                        if ($pathinfo === '/admin/plugins/blog/blogcategory/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.blog_category',  '_sonata_name' => 'admin_plugins_blog_blogcategory_export',  '_route' => 'admin_plugins_blog_blogcategory_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/plugins/blog/blogtopic')) {
                        // admin_plugins_blog_blogtopic_list
                        if ($pathinfo === '/admin/plugins/blog/blogtopic/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.blog_topic',  '_sonata_name' => 'admin_plugins_blog_blogtopic_list',  '_route' => 'admin_plugins_blog_blogtopic_list',);
                        }

                        // admin_plugins_blog_blogtopic_create
                        if ($pathinfo === '/admin/plugins/blog/blogtopic/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.blog_topic',  '_sonata_name' => 'admin_plugins_blog_blogtopic_create',  '_route' => 'admin_plugins_blog_blogtopic_create',);
                        }

                        // admin_plugins_blog_blogtopic_batch
                        if ($pathinfo === '/admin/plugins/blog/blogtopic/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.blog_topic',  '_sonata_name' => 'admin_plugins_blog_blogtopic_batch',  '_route' => 'admin_plugins_blog_blogtopic_batch',);
                        }

                        // admin_plugins_blog_blogtopic_edit
                        if (preg_match('#^/admin/plugins/blog/blogtopic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogtopic_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.blog_topic',  '_sonata_name' => 'admin_plugins_blog_blogtopic_edit',));
                        }

                        // admin_plugins_blog_blogtopic_delete
                        if (preg_match('#^/admin/plugins/blog/blogtopic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogtopic_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.blog_topic',  '_sonata_name' => 'admin_plugins_blog_blogtopic_delete',));
                        }

                        // admin_plugins_blog_blogtopic_show
                        if (preg_match('#^/admin/plugins/blog/blogtopic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogtopic_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.blog_topic',  '_sonata_name' => 'admin_plugins_blog_blogtopic_show',));
                        }

                        // admin_plugins_blog_blogtopic_export
                        if ($pathinfo === '/admin/plugins/blog/blogtopic/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.blog_topic',  '_sonata_name' => 'admin_plugins_blog_blogtopic_export',  '_route' => 'admin_plugins_blog_blogtopic_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/plugins/blog/blogpost')) {
                        // admin_plugins_blog_blogpost_list
                        if ($pathinfo === '/admin/plugins/blog/blogpost/list') {
                            return array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::listAction',  '_sonata_admin' => 'sonata.admin.blog_post',  '_sonata_name' => 'admin_plugins_blog_blogpost_list',  '_route' => 'admin_plugins_blog_blogpost_list',);
                        }

                        // admin_plugins_blog_blogpost_create
                        if ($pathinfo === '/admin/plugins/blog/blogpost/create') {
                            return array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::createAction',  '_sonata_admin' => 'sonata.admin.blog_post',  '_sonata_name' => 'admin_plugins_blog_blogpost_create',  '_route' => 'admin_plugins_blog_blogpost_create',);
                        }

                        // admin_plugins_blog_blogpost_batch
                        if ($pathinfo === '/admin/plugins/blog/blogpost/batch') {
                            return array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.blog_post',  '_sonata_name' => 'admin_plugins_blog_blogpost_batch',  '_route' => 'admin_plugins_blog_blogpost_batch',);
                        }

                        // admin_plugins_blog_blogpost_edit
                        if (preg_match('#^/admin/plugins/blog/blogpost/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogpost_edit')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::editAction',  '_sonata_admin' => 'sonata.admin.blog_post',  '_sonata_name' => 'admin_plugins_blog_blogpost_edit',));
                        }

                        // admin_plugins_blog_blogpost_delete
                        if (preg_match('#^/admin/plugins/blog/blogpost/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogpost_delete')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.blog_post',  '_sonata_name' => 'admin_plugins_blog_blogpost_delete',));
                        }

                        // admin_plugins_blog_blogpost_show
                        if (preg_match('#^/admin/plugins/blog/blogpost/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_plugins_blog_blogpost_show')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::showAction',  '_sonata_admin' => 'sonata.admin.blog_post',  '_sonata_name' => 'admin_plugins_blog_blogpost_show',));
                        }

                        // admin_plugins_blog_blogpost_export
                        if ($pathinfo === '/admin/plugins/blog/blogpost/export') {
                            return array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.blog_post',  '_sonata_name' => 'admin_plugins_blog_blogpost_export',  '_route' => 'admin_plugins_blog_blogpost_export',);
                        }

                    }

                }

            }

        }

        // remove_trailing_slash
        if (preg_match('#^/(?P<url>.*/)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_remove_trailing_slash;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_trailing_slash')), array (  '_controller' => 'AppBundle\\Controller\\RedirectingController::removeTrailingSlashAction',));
        }
        not_remove_trailing_slash:

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_ajax_search
            if ($pathinfo === '/blog/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_blog_ajax_search;
                }

                return array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::blogPostAction',  '_route' => 'blog_ajax_search',);
            }
            not_blog_ajax_search:

            if (0 === strpos($pathinfo, '/blog/amp')) {
                // amp__plugins_blog_view_post
                if (preg_match('#^/blog/amp/(?P<categoryUrl>[^/]++)/(?P<topicUrl>[^/]++)/(?P<id>\\d+)\\-(?P<postUrl>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'amp__plugins_blog_view_post')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::viewPostAction',));
                }

                // amp__plugins_blog_view_post_without_topic
                if (preg_match('#^/blog/amp/(?P<categoryUrl>[^/]++)/(?P<id>\\d+)\\-(?P<postUrl>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'amp__plugins_blog_view_post_without_topic')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::viewPostAction',));
                }

            }

            // plugins_blog_view_post_without_topic_old
            if (preg_match('#^/blog/(?P<categoryUrl>[^/]++)/(?P<id>\\d+),(?P<postUrl>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_view_post_without_topic_old')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_view_post_without_topic',  'permanent' => true,));
            }

            // plugins_blog_view_post_old
            if (preg_match('#^/blog/(?P<categoryUrl>[^/]++)/(?P<topicUrl>[^/]++)/(?P<id>\\d+),(?P<postUrl>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_view_post_old')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_view_post',  'permanent' => true,));
            }

            // plugins_blog_homepage
            if (preg_match('#^/blog(?:/(?P<trailingSlash>[/]{0,1}))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_homepage')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::indexAction',  'trailingSlash' => '/',));
            }

            // plugins_blog_view_post_without_topic
            if (preg_match('#^/blog/(?P<categoryUrl>[^/]++)/(?P<id>\\d+)\\-(?P<postUrl>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_view_post_without_topic')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::viewPostAction',));
            }

            // plugins_blog_view_category
            if (preg_match('#^/blog/(?P<categoryUrl>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_view_category')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::indexAction',));
            }

            // plugins_blog_view_topic
            if (preg_match('#^/blog/(?P<categoryUrl>[^/]++)/(?P<topicUrl>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_view_topic')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::indexAction',));
            }

            // plugins_blog_view_post
            if (preg_match('#^/blog/(?P<categoryUrl>[^/]++)/(?P<topicUrl>[^/]++)/(?P<id>\\d+)\\-(?P<postUrl>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_view_post')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogController::viewPostAction',));
            }

        }

        if (0 === strpos($pathinfo, '/news')) {
            // plugins_news_homepage
            if (preg_match('#^/news(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_news_homepage')), array (  '_controller' => 'Plugins\\NewsBundle\\Controller\\NewsController::newsAction',  'page' => 1,));
            }

            // plugins_news_view
            if (preg_match('#^/news/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_news_view')), array (  '_controller' => 'Plugins\\NewsBundle\\Controller\\NewsController::viewAction',));
            }

            // news_ajax_search
            if (rtrim($pathinfo, '/') === '/news') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'news_ajax_search');
                }

                return array (  '_controller' => 'Plugins\\NewsBundle\\Controller\\NewsController::newsPostAction',  '_route' => 'news_ajax_search',);
            }

        }

        if (0 === strpos($pathinfo, '/practic-areas')) {
            // pa_ajax_search
            if ($pathinfo === '/practic-areas/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pa_ajax_search;
                }

                return array (  '_controller' => 'Plugins\\PracticAreaBundle\\Controller\\PracticAreaController::paPostAction',  '_route' => 'pa_ajax_search',);
            }
            not_pa_ajax_search:

            if (0 === strpos($pathinfo, '/practic-areas/amp')) {
                // amp__plugins_practic_area_homepage
                if (preg_match('#^/practic\\-areas/amp(?:/(?P<trailingSlash>[/]{0,1}))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'amp__plugins_practic_area_homepage')), array (  '_controller' => 'Plugins\\PracticAreaBundle\\Controller\\PracticAreaController::indexAction',  'trailingSlash' => '/',));
                }

                // amp__plugins_practic_area_view
                if (preg_match('#^/practic\\-areas/amp/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'amp__plugins_practic_area_view')), array (  '_controller' => 'Plugins\\PracticAreaBundle\\Controller\\PracticAreaController::viewAction',));
                }

                // amp__plugins_practic_area_subsection_view
                if (preg_match('#^/practic\\-areas/amp/(?P<urlSection>[^/]++)/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'amp__plugins_practic_area_subsection_view')), array (  '_controller' => 'Plugins\\PracticAreaBundle\\Controller\\PracticAreaController::viewSubSectionAction',));
                }

            }

            // plugins_practic_area_homepage
            if (preg_match('#^/practic\\-areas(?:/(?P<trailingSlash>[/]{0,1}))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_practic_area_homepage')), array (  '_controller' => 'Plugins\\PracticAreaBundle\\Controller\\PracticAreaController::indexAction',  'trailingSlash' => '/',));
            }

            // plugins_practic_area_view
            if (preg_match('#^/practic\\-areas/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_practic_area_view')), array (  '_controller' => 'Plugins\\PracticAreaBundle\\Controller\\PracticAreaController::viewAction',));
            }

            // plugins_practic_area_subsection_view
            if (preg_match('#^/practic\\-areas/(?P<urlSection>[^/]++)/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_practic_area_subsection_view')), array (  '_controller' => 'Plugins\\PracticAreaBundle\\Controller\\PracticAreaController::viewSubSectionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                // _login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
                }

                // _logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_logout',);
                }

            }

            // _security_check
            if ($pathinfo === '/admin/security_check') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
            }

        }

        // app_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AppController::indexAction',  '_route' => 'app_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AppController::indexAction',  '_route' => 'homepage',);
        }

        // dev
        if ($pathinfo === '/dev') {
            return array (  '_controller' => 'AppBundle\\Controller\\AppController::devAction',  '_route' => 'dev',);
        }

        if (0 === strpos($pathinfo, '/about')) {
            // app_about_us
            if ($pathinfo === '/about') {
                return array (  '_controller' => 'AppBundle\\Controller\\AppController::aboutUsAction',  '_route' => 'app_about_us',);
            }

            // app_about_attorney
            if (preg_match('#^/about/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_about_attorney')), array (  '_controller' => 'AppBundle\\Controller\\AppController::attorneyViewAction',));
            }

        }

        // app_contact
        if ($pathinfo === '/contacts') {
            return array (  '_controller' => 'AppBundle\\Controller\\ContactController::contactAction',  '_route' => 'app_contact',);
        }

        // app_contact_send
        if ($pathinfo === '/ajax/contact_send') {
            return array (  '_controller' => 'AppBundle\\Controller\\ContactController::sendAction',  '_route' => 'app_contact_send',);
        }

        // plugins_site_map
        if ($pathinfo === '/site-map') {
            return array (  '_controller' => 'Plugins\\SiteMapBundle\\Controller\\SiteMapController::listAction',  '_route' => 'plugins_site_map',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // plugins_blog_get_topic_options
        if (0 === strpos($pathinfo, '/admin/plugins/blog/blogpost/get-topics-by-category') && preg_match('#^/admin/plugins/blog/blogpost/get\\-topics\\-by\\-category/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'plugins_blog_get_topic_options')), array (  '_controller' => 'Plugins\\BlogBundle\\Controller\\BlogAdminController::getTopicOptionsByCategoryAction',));
        }

        // path_404_tax
        if ($pathinfo === '/practic-areas/tax') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_practic_area_homepage',  'permanent' => true,  '_route' => 'path_404_tax',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blog/criminal-defense')) {
                // path_404_blog_cd6
                if ($pathinfo === '/blog/criminal-defense/6') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_homepage',  'permanent' => true,  '_route' => 'path_404_blog_cd6',);
                }

                // path_404_blog_cd9
                if ($pathinfo === '/blog/criminal-defense/9') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_homepage',  'permanent' => true,  '_route' => 'path_404_blog_cd9',);
                }

                // path_404_blog_cd12
                if ($pathinfo === '/blog/criminal-defense/12') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_homepage',  'permanent' => true,  '_route' => 'path_404_blog_cd12',);
                }

            }

            if (0 === strpos($pathinfo, '/blog/family-law')) {
                // path_404_blog_fl1
                if ($pathinfo === '/blog/family-law/1') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_homepage',  'permanent' => true,  '_route' => 'path_404_blog_fl1',);
                }

                // path_404_blog_fl2
                if ($pathinfo === '/blog/family-law/2') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_homepage',  'permanent' => true,  '_route' => 'path_404_blog_fl2',);
                }

                // path_404_blog_fl3
                if ($pathinfo === '/blog/family-law/3') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_homepage',  'permanent' => true,  '_route' => 'path_404_blog_fl3',);
                }

            }

            // path_404_blog_aa
            if ($pathinfo === '/blog/attorneys-advices') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'plugins_blog_homepage',  'permanent' => true,  '_route' => 'path_404_blog_aa',);
            }

        }

        // path_404_news
        if ($pathinfo === '/news/marriage-is-a-beautiful-thing') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/news/the-new-divorce-law-how-long-you-were-married-matters',  'permanent' => true,  '_route' => 'path_404_news',);
        }

        // path_404_wrong_url_1
        if (0 === strpos($pathinfo, '/blog/family-law/15-Could-Your') && preg_match('#^/blog/family\\-law/15\\-Could\\-Your(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'path_404_wrong_url_1')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/blog/family-law/16-could-your-child-s-opinion-be-used-in-determining-your-custody-battle',  'permanent' => true,));
        }

        if (0 === strpos($pathinfo, '/practic-areas')) {
            // path_404_cyber
            if ($pathinfo === '/practic-areas/cyber-crimes/cyber-crimes') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/practic-areas/cyber-crimes/cyber-crime-lawyers',  'permanent' => true,  '_route' => 'path_404_cyber',);
            }

            // path_404_dui
            if ($pathinfo === '/practic-areas/dui-dwi-charges/dui-dwi') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/practic-areas/dui-dwi-charges/dui-dwi-charges-lawyers',  'permanent' => true,  '_route' => 'path_404_dui',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
