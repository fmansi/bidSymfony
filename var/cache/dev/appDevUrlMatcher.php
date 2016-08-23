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
            if (0 === strpos($pathinfo, '/css/20b8070')) {
                // _assetic_20b8070
                if ($pathinfo === '/css/20b8070.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '20b8070',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_20b8070',);
                }

                // _assetic_20b8070_0
                if ($pathinfo === '/css/20b8070_materialize_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '20b8070',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_20b8070_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/070a079')) {
                // _assetic_070a079
                if ($pathinfo === '/css/070a079.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '070a079',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_070a079',);
                }

                // _assetic_070a079_0
                if ($pathinfo === '/css/070a079_font-awesome.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '070a079',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_070a079_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/de0221f')) {
                // _assetic_de0221f
                if ($pathinfo === '/css/de0221f.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'de0221f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_de0221f',);
                }

                // _assetic_de0221f_0
                if ($pathinfo === '/css/de0221f_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'de0221f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_de0221f_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/5bdb071')) {
                // _assetic_5bdb071
                if ($pathinfo === '/css/5bdb071.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5bdb071',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5bdb071',);
                }

                // _assetic_5bdb071_0
                if ($pathinfo === '/css/5bdb071_project_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5bdb071',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5bdb071_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/674e75b')) {
                // _assetic_674e75b
                if ($pathinfo === '/css/674e75b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '674e75b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_674e75b',);
                }

                // _assetic_674e75b_0
                if ($pathinfo === '/css/674e75b_swiper.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '674e75b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_674e75b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/b1281ba')) {
                // _assetic_b1281ba
                if ($pathinfo === '/css/b1281ba.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b1281ba',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b1281ba',);
                }

                // _assetic_b1281ba_0
                if ($pathinfo === '/css/b1281ba_favicon_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b1281ba',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b1281ba_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/logo-bid-travel')) {
            // _assetic_017cd22
            if ($pathinfo === '/images/logo-bid-travel.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '017cd22',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_017cd22',);
            }

            // _assetic_017cd22_0
            if ($pathinfo === '/images/logo-bid-travel_logo-bid-travel_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '017cd22',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_017cd22_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/a8ff843')) {
                // _assetic_a8ff843
                if ($pathinfo === '/js/a8ff843.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8ff843',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a8ff843',);
                }

                if (0 === strpos($pathinfo, '/js/a8ff843_')) {
                    // _assetic_a8ff843_0
                    if ($pathinfo === '/js/a8ff843_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8ff843',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a8ff843_0',);
                    }

                    // _assetic_a8ff843_1
                    if ($pathinfo === '/js/a8ff843_materialize_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8ff843',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a8ff843_1',);
                    }

                    // _assetic_a8ff843_2
                    if ($pathinfo === '/js/a8ff843_init_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8ff843',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a8ff843_2',);
                    }

                    // _assetic_a8ff843_3
                    if ($pathinfo === '/js/a8ff843_swiper.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8ff843',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a8ff843_3',);
                    }

                    // _assetic_a8ff843_4
                    if ($pathinfo === '/js/a8ff843_home_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a8ff843',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a8ff843_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/c9ecc77')) {
                // _assetic_c9ecc77
                if ($pathinfo === '/js/c9ecc77.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9ecc77',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c9ecc77',);
                }

                if (0 === strpos($pathinfo, '/js/c9ecc77_')) {
                    // _assetic_c9ecc77_0
                    if ($pathinfo === '/js/c9ecc77_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9ecc77',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c9ecc77_0',);
                    }

                    // _assetic_c9ecc77_1
                    if ($pathinfo === '/js/c9ecc77_materialize_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9ecc77',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c9ecc77_1',);
                    }

                    // _assetic_c9ecc77_2
                    if ($pathinfo === '/js/c9ecc77_init_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9ecc77',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_c9ecc77_2',);
                    }

                    // _assetic_c9ecc77_3
                    if ($pathinfo === '/js/c9ecc77_swiper.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9ecc77',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_c9ecc77_3',);
                    }

                    // _assetic_c9ecc77_4
                    if ($pathinfo === '/js/c9ecc77_como-funciona_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9ecc77',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_c9ecc77_4',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // admin_default_index
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        // LeilaoBundle
        if (0 === strpos($pathinfo, '/leilao') && preg_match('#^/leilao(?:/(?P<situation>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'LeilaoBundle')), array (  '_controller' => 'LeilaoBundle\\Controller\\LeilaoController::indexAction',  'situation' => 'open',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/agencia')) {
                // admin_agencia_index
                if (rtrim($pathinfo, '/') === '/admin/agencia') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_agencia_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_agencia_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::indexAction',  '_route' => 'admin_agencia_index',);
                }
                not_admin_agencia_index:

                // admin_agencia_new
                if ($pathinfo === '/admin/agencia/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_agencia_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::newAction',  '_route' => 'admin_agencia_new',);
                }
                not_admin_agencia_new:

                // admin_agencia_show
                if (preg_match('#^/admin/agencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_agencia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agencia_show')), array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::showAction',));
                }
                not_admin_agencia_show:

                // admin_agencia_edit
                if (preg_match('#^/admin/agencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_agencia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::editAction',));
                }
                not_admin_agencia_edit:

                // admin_agencia_delete
                if (preg_match('#^/admin/agencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_agencia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\AgenciaController::deleteAction',));
                }
                not_admin_agencia_delete:

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/cidade')) {
                    // admin_cidade_index
                    if (rtrim($pathinfo, '/') === '/admin/cidade') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cidade_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_cidade_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CidadeController::indexAction',  '_route' => 'admin_cidade_index',);
                    }
                    not_admin_cidade_index:

                    // admin_cidade_new
                    if ($pathinfo === '/admin/cidade/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_cidade_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CidadeController::newAction',  '_route' => 'admin_cidade_new',);
                    }
                    not_admin_cidade_new:

                    // admin_cidade_show
                    if (preg_match('#^/admin/cidade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cidade_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cidade_show')), array (  '_controller' => 'AppBundle\\Controller\\CidadeController::showAction',));
                    }
                    not_admin_cidade_show:

                    // admin_cidade_edit
                    if (preg_match('#^/admin/cidade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_cidade_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cidade_edit')), array (  '_controller' => 'AppBundle\\Controller\\CidadeController::editAction',));
                    }
                    not_admin_cidade_edit:

                    // admin_cidade_delete
                    if (preg_match('#^/admin/cidade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_cidade_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cidade_delete')), array (  '_controller' => 'AppBundle\\Controller\\CidadeController::deleteAction',));
                    }
                    not_admin_cidade_delete:

                }

                if (0 === strpos($pathinfo, '/admin/controle_')) {
                    if (0 === strpos($pathinfo, '/admin/controle_estoque')) {
                        // admin_controle_estoque_index
                        if (rtrim($pathinfo, '/') === '/admin/controle_estoque') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_controle_estoque_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_controle_estoque_index');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ControleEstoqueController::indexAction',  '_route' => 'admin_controle_estoque_index',);
                        }
                        not_admin_controle_estoque_index:

                        // admin_controle_estoque_new
                        if ($pathinfo === '/admin/controle_estoque/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_controle_estoque_new;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ControleEstoqueController::newAction',  '_route' => 'admin_controle_estoque_new',);
                        }
                        not_admin_controle_estoque_new:

                        // admin_controle_estoque_show
                        if (preg_match('#^/admin/controle_estoque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_controle_estoque_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_controle_estoque_show')), array (  '_controller' => 'AppBundle\\Controller\\ControleEstoqueController::showAction',));
                        }
                        not_admin_controle_estoque_show:

                        // admin_controle_estoque_edit
                        if (preg_match('#^/admin/controle_estoque/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_controle_estoque_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_controle_estoque_edit')), array (  '_controller' => 'AppBundle\\Controller\\ControleEstoqueController::editAction',));
                        }
                        not_admin_controle_estoque_edit:

                        // admin_controle_estoque_delete
                        if (preg_match('#^/admin/controle_estoque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_admin_controle_estoque_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_controle_estoque_delete')), array (  '_controller' => 'AppBundle\\Controller\\ControleEstoqueController::deleteAction',));
                        }
                        not_admin_controle_estoque_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/controle_vendas')) {
                        // admin_controle_vendas_index
                        if (rtrim($pathinfo, '/') === '/admin/controle_vendas') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_controle_vendas_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_controle_vendas_index');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ControleVendasController::indexAction',  '_route' => 'admin_controle_vendas_index',);
                        }
                        not_admin_controle_vendas_index:

                        // admin_controle_vendas_new
                        if ($pathinfo === '/admin/controle_vendas/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_controle_vendas_new;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ControleVendasController::newAction',  '_route' => 'admin_controle_vendas_new',);
                        }
                        not_admin_controle_vendas_new:

                        // admin_controle_vendas_show
                        if (preg_match('#^/admin/controle_vendas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_controle_vendas_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_controle_vendas_show')), array (  '_controller' => 'AppBundle\\Controller\\ControleVendasController::showAction',));
                        }
                        not_admin_controle_vendas_show:

                        // admin_controle_vendas_edit
                        if (preg_match('#^/admin/controle_vendas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_controle_vendas_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_controle_vendas_edit')), array (  '_controller' => 'AppBundle\\Controller\\ControleVendasController::editAction',));
                        }
                        not_admin_controle_vendas_edit:

                        // admin_controle_vendas_delete
                        if (preg_match('#^/admin/controle_vendas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_admin_controle_vendas_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_controle_vendas_delete')), array (  '_controller' => 'AppBundle\\Controller\\ControleVendasController::deleteAction',));
                        }
                        not_admin_controle_vendas_delete:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/estado')) {
                // admin_estado_index
                if (rtrim($pathinfo, '/') === '/admin/estado') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_estado_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_estado_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EstadoController::indexAction',  '_route' => 'admin_estado_index',);
                }
                not_admin_estado_index:

                // admin_estado_new
                if ($pathinfo === '/admin/estado/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_estado_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\EstadoController::newAction',  '_route' => 'admin_estado_new',);
                }
                not_admin_estado_new:

                // admin_estado_show
                if (preg_match('#^/admin/estado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_estado_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estado_show')), array (  '_controller' => 'AppBundle\\Controller\\EstadoController::showAction',));
                }
                not_admin_estado_show:

                // admin_estado_edit
                if (preg_match('#^/admin/estado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_estado_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estado_edit')), array (  '_controller' => 'AppBundle\\Controller\\EstadoController::editAction',));
                }
                not_admin_estado_edit:

                // admin_estado_delete
                if (preg_match('#^/admin/estado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_estado_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estado_delete')), array (  '_controller' => 'AppBundle\\Controller\\EstadoController::deleteAction',));
                }
                not_admin_estado_delete:

            }

            if (0 === strpos($pathinfo, '/admin/historico_credito')) {
                // admin_historico_credito_index
                if (rtrim($pathinfo, '/') === '/admin/historico_credito') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_historico_credito_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_historico_credito_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HistoricoCreditoController::indexAction',  '_route' => 'admin_historico_credito_index',);
                }
                not_admin_historico_credito_index:

                // admin_historico_credito_new
                if ($pathinfo === '/admin/historico_credito/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_historico_credito_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HistoricoCreditoController::newAction',  '_route' => 'admin_historico_credito_new',);
                }
                not_admin_historico_credito_new:

                // admin_historico_credito_show
                if (preg_match('#^/admin/historico_credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_historico_credito_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_historico_credito_show')), array (  '_controller' => 'AppBundle\\Controller\\HistoricoCreditoController::showAction',));
                }
                not_admin_historico_credito_show:

                // admin_historico_credito_edit
                if (preg_match('#^/admin/historico_credito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_historico_credito_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_historico_credito_edit')), array (  '_controller' => 'AppBundle\\Controller\\HistoricoCreditoController::editAction',));
                }
                not_admin_historico_credito_edit:

                // admin_historico_credito_delete
                if (preg_match('#^/admin/historico_credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_historico_credito_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_historico_credito_delete')), array (  '_controller' => 'AppBundle\\Controller\\HistoricoCreditoController::deleteAction',));
                }
                not_admin_historico_credito_delete:

            }

            if (0 === strpos($pathinfo, '/admin/leilao')) {
                // admin_leilao_index
                if (rtrim($pathinfo, '/') === '/admin/leilao') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_leilao_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_leilao_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LeilaoController::indexAction',  '_route' => 'admin_leilao_index',);
                }
                not_admin_leilao_index:

                // admin_leilao_new
                if ($pathinfo === '/admin/leilao/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_leilao_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LeilaoController::newAction',  '_route' => 'admin_leilao_new',);
                }
                not_admin_leilao_new:

                // admin_leilao_show
                if (preg_match('#^/admin/leilao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_leilao_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_leilao_show')), array (  '_controller' => 'AppBundle\\Controller\\LeilaoController::showAction',));
                }
                not_admin_leilao_show:

                // admin_leilao_edit
                if (preg_match('#^/admin/leilao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_leilao_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_leilao_edit')), array (  '_controller' => 'AppBundle\\Controller\\LeilaoController::editAction',));
                }
                not_admin_leilao_edit:

                // admin_leilao_delete
                if (preg_match('#^/admin/leilao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_leilao_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_leilao_delete')), array (  '_controller' => 'AppBundle\\Controller\\LeilaoController::deleteAction',));
                }
                not_admin_leilao_delete:

            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/passagem')) {
                    // admin_passagem_index
                    if (rtrim($pathinfo, '/') === '/admin/passagem') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_passagem_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_passagem_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PassagemController::indexAction',  '_route' => 'admin_passagem_index',);
                    }
                    not_admin_passagem_index:

                    // admin_passagem_new
                    if ($pathinfo === '/admin/passagem/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_passagem_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PassagemController::newAction',  '_route' => 'admin_passagem_new',);
                    }
                    not_admin_passagem_new:

                    // admin_passagem_show
                    if (preg_match('#^/admin/passagem/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_passagem_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passagem_show')), array (  '_controller' => 'AppBundle\\Controller\\PassagemController::showAction',));
                    }
                    not_admin_passagem_show:

                    // admin_passagem_edit
                    if (preg_match('#^/admin/passagem/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_passagem_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passagem_edit')), array (  '_controller' => 'AppBundle\\Controller\\PassagemController::editAction',));
                    }
                    not_admin_passagem_edit:

                    // admin_passagem_delete
                    if (preg_match('#^/admin/passagem/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_passagem_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passagem_delete')), array (  '_controller' => 'AppBundle\\Controller\\PassagemController::deleteAction',));
                    }
                    not_admin_passagem_delete:

                }

                if (0 === strpos($pathinfo, '/admin/promocoes')) {
                    // admin_promocoes_index
                    if (rtrim($pathinfo, '/') === '/admin/promocoes') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_promocoes_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_promocoes_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PromocoesController::indexAction',  '_route' => 'admin_promocoes_index',);
                    }
                    not_admin_promocoes_index:

                    // admin_promocoes_new
                    if ($pathinfo === '/admin/promocoes/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_promocoes_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PromocoesController::newAction',  '_route' => 'admin_promocoes_new',);
                    }
                    not_admin_promocoes_new:

                    // admin_promocoes_show
                    if (preg_match('#^/admin/promocoes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_promocoes_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_promocoes_show')), array (  '_controller' => 'AppBundle\\Controller\\PromocoesController::showAction',));
                    }
                    not_admin_promocoes_show:

                    // admin_promocoes_edit
                    if (preg_match('#^/admin/promocoes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_promocoes_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_promocoes_edit')), array (  '_controller' => 'AppBundle\\Controller\\PromocoesController::editAction',));
                    }
                    not_admin_promocoes_edit:

                    // admin_promocoes_delete
                    if (preg_match('#^/admin/promocoes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_promocoes_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_promocoes_delete')), array (  '_controller' => 'AppBundle\\Controller\\PromocoesController::deleteAction',));
                    }
                    not_admin_promocoes_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // AppBundleUsuarioHome
            if ($pathinfo === '/usuario') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'AppBundleUsuarioHome',);
            }

            // AppBundleUsuarioEditar
            if ($pathinfo === '/usuario/editar_cadastro') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editarAction',  '_route' => 'AppBundleUsuarioEditar',);
            }

            // AppBundleUsuarioComprarLances
            if ($pathinfo === '/usuario/comprar_lances') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::compraLancesAction',  '_route' => 'AppBundleUsuarioComprarLances',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // AppBundleHome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'AppBundleHome');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'AppBundleHome',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // AppBundleComoFunciona
            if ($pathinfo === '/como_funciona') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::comoFuncionaAction',  '_route' => 'AppBundleComoFunciona',);
            }

            // AppBundleCupons
            if ($pathinfo === '/cupons') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cuponsAction',  '_route' => 'AppBundleCupons',);
            }

        }

        // AppBundleSocial
        if ($pathinfo === '/social') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::socialAction',  '_route' => 'AppBundleSocial',);
        }

        // AppBundleConheca
        if ($pathinfo === '/conheca') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::conhecaAction',  '_route' => 'AppBundleConheca',);
        }

        // AppBundlePoliticaPrivacidade
        if ($pathinfo === '/politica_privacidade') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::politicaPrivacidadeAction',  '_route' => 'AppBundlePoliticaPrivacidade',);
        }

        // AppBundleDuvidas
        if ($pathinfo === '/duvidas') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::duvidasAction',  '_route' => 'AppBundleDuvidas',);
        }

        // AppBundleContato
        if ($pathinfo === '/contato') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contatoAction',  '_route' => 'AppBundleContato',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
