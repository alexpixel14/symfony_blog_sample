<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\UserController::LoginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array('_route' => 'login_check');
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/tags')) {
            // blog_add_tag
            if ('/tags/add' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\TagController::addAction',  '_route' => 'blog_add_tag',);
            }

            // blog_index_tag
            if ('/tags' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\TagController::indexAction',  '_route' => 'blog_index_tag',);
            }

            // blog_delete_tag
            if (0 === strpos($pathinfo, '/tags/delete') && preg_match('#^/tags/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete_tag')), array (  '_controller' => 'BlogBundle\\Controller\\TagController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/categories')) {
            // blog_add_category
            if ('/categories/add' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\CategoryController::addAction',  '_route' => 'blog_add_category',);
            }

            // blog_index_category
            if ('/categories' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\CategoryController::indexAction',  '_route' => 'blog_index_category',);
            }

            // blog_delete_category
            if (0 === strpos($pathinfo, '/categories/delete') && preg_match('#^/categories/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete_category')), array (  '_controller' => 'BlogBundle\\Controller\\CategoryController::deleteAction',));
            }

            // blog_edit_category
            if (0 === strpos($pathinfo, '/categories/edit') && preg_match('#^/categories/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_edit_category')), array (  '_controller' => 'BlogBundle\\Controller\\CategoryController::editAction',));
            }

        }

        // blog_read_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_read_category')), array (  '_controller' => 'BlogBundle\\Controller\\CategoryController::categoryAction',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/entries')) {
            // blog_add_entry
            if ('/entries/add' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'blog_add_entry');
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\EntryController::addAction',  '_route' => 'blog_add_entry',);
            }

            // blog_index_entry
            if ('/entries' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'blog_index_entry');
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\EntryController::indexAction',  '_route' => 'blog_index_entry',);
            }

            // blog_delete_entry
            if (0 === strpos($pathinfo, '/entries/delete') && preg_match('#^/entries/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete_entry')), array (  '_controller' => 'BlogBundle\\Controller\\EntryController::deleteAction',));
            }

            // blog_edit_entry
            if (0 === strpos($pathinfo, '/entries/edit') && preg_match('#^/entries/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_edit_entry')), array (  '_controller' => 'BlogBundle\\Controller\\EntryController::editAction',));
            }

        }

        // blog_homepage
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_homepage')), array (  '_controller' => 'BlogBundle\\Controller\\EntryController::indexAction',  'page' => 1,));
        }

        // helloWorld
        if ('/hello-world' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::helloWorldAction',  '_route' => 'helloWorld',);
        }

        // mi_homepage
        if ('/mi-bundle' === $pathinfo) {
            return array (  '_controller' => 'MiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mi_homepage',);
        }

        if (0 === strpos($pathinfo, '/pruebas')) {
            // pruebas_index
            if (preg_match('#^/pruebas(?:/(?P<lang>es|en|fr)(?:/(?P<name>[a-zA-Z]*)(?:/(?P<page>\\d+))?)?)?$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_pruebas_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pruebas_index')), array (  '_controller' => 'AppBundle\\Controller\\PruebasController::indexAction',  'lang' => 'es',  'name' => 'nombre_por_defecto',  'page' => 1,));
            }
            not_pruebas_index:

            // pruebas_create
            if ('/pruebas/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::createAction',  '_route' => 'pruebas_create',);
            }

            // pruebas_read
            if ('/pruebas/read' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::readAction',  '_route' => 'pruebas_read',);
            }

            // pruebas_update
            if (0 === strpos($pathinfo, '/pruebas/update') && preg_match('#^/pruebas/update/(?P<id>[^/]++)/(?P<titulo>[^/]++)/(?P<descripcion>[^/]++)/(?P<precio>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pruebas_update')), array (  '_controller' => 'AppBundle\\Controller\\PruebasController::updateAction',));
            }

            // pruebas_delete
            if (0 === strpos($pathinfo, '/pruebas/delete') && preg_match('#^/pruebas/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pruebas_delete')), array (  '_controller' => 'AppBundle\\Controller\\PruebasController::deleteAction',));
            }

            // pruebas_native
            if ('/pruebas/native' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::nativeSqlAction',  '_route' => 'pruebas_native',);
            }

            // pruebas_form
            if ('/pruebas/form' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::formAction',  '_route' => 'pruebas_form',);
            }

            // pruebas_validate_email
            if (0 === strpos($pathinfo, '/pruebas/validar-email') && preg_match('#^/pruebas/validar\\-email/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pruebas_validate_email')), array (  '_controller' => 'AppBundle\\Controller\\PruebasController::validarEmailAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
