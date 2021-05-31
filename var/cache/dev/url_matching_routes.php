<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/random' => [[['_route' => 'random_page', '_controller' => 'App\\Controller\\HomeController::random'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::homepage'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog_list', '_controller' => 'App\\Controller\\HomeController::list'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, 1]],
        '/admin/products' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/category/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/demo_service/([^/]++)(*:242)'
                .'|/a(?'
                    .'|pi/posts/([^/]++)(?'
                        .'|(*:275)'
                    .')'
                    .'|dmin/product/([^/]++)(?'
                        .'|(*:308)'
                        .'|/edit(*:321)'
                        .'|(*:329)'
                    .')'
                .')'
                .'|/blog(?'
                    .'|(?:/(\\d+))?(*:358)'
                    .'|/([^/]++)(*:375)'
                    .'|(?:/([^/]++))?(*:397)'
                .')'
                .'|/share/(.+)(*:417)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        242 => [[['_route' => 'demo_service', '_controller' => 'App\\Controller\\DemoController::index'], ['name'], null, null, false, true, null]],
        275 => [
            [['_route' => 'app_home_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [['_route' => 'app_home_edit', '_controller' => 'App\\Controller\\HomeController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        308 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        358 => [[['_route' => 'blog_list2', 'page' => '1', '_controller' => 'App\\Controller\\HomeController::list2'], ['page'], null, null, false, true, null]],
        375 => [[['_route' => 'blog_show', '_controller' => 'App\\Controller\\HomeController::show2'], ['slug'], null, null, false, true, null]],
        397 => [[['_route' => 'blog_index', 'page' => 1, 'title' => 'Hello world!', '_controller' => 'App\\Controller\\HomeController::index'], ['page'], null, null, false, true, null]],
        417 => [
            [['_route' => 'share', '_controller' => 'App\\Controller\\HomeController::share'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function ($condition, $context, $request) { // $checkCondition
        switch ($condition) {
            case 1: return (in_array($context->getMethod(), [0 => "GET", 1 => "HEAD"]) && preg_match("/firefox/i", $request->headers->get("User-Agent")));
        }
    },
];
