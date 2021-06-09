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
        '/actors' => [[['_route' => 'actors_index', '_controller' => 'App\\Controller\\ActorsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actors/new' => [[['_route' => 'actors_new', '_controller' => 'App\\Controller\\ActorsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/directors' => [[['_route' => 'directors_index', '_controller' => 'App\\Controller\\DirectorsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/directors/new' => [[['_route' => 'directors_new', '_controller' => 'App\\Controller\\DirectorsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/directors/genres/new' => [[['_route' => 'directors_genres_new', '_controller' => 'App\\Controller\\DirectorsGenresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/movies' => [[['_route' => 'movies_index', '_controller' => 'App\\Controller\\MoviesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/movies/new' => [[['_route' => 'movies_new', '_controller' => 'App\\Controller\\MoviesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/movies/genres/new' => [[['_route' => 'movies_genres_new', '_controller' => 'App\\Controller\\MoviesGenresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/roles' => [[['_route' => 'roles_index', '_controller' => 'App\\Controller\\RolesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/roles/new' => [[['_route' => 'roles_new', '_controller' => 'App\\Controller\\RolesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/actors/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/directors/(?'
                    .'|([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                    .'|genres(?'
                        .'|(*:282)'
                        .'|/([^/]++)(?'
                            .'|(*:302)'
                            .'|/edit(*:315)'
                            .'|(*:323)'
                        .')'
                    .')'
                .')'
                .'|/movies/(?'
                    .'|([^/]++)(?'
                        .'|(*:356)'
                        .'|/edit(*:369)'
                        .'|(*:377)'
                    .')'
                    .'|genres(?'
                        .'|(*:395)'
                        .'|/([^/]++)(?'
                            .'|(*:415)'
                            .'|/edit(*:428)'
                            .'|(*:436)'
                        .')'
                    .')'
                .')'
                .'|/roles/([^/]++)(?'
                    .'|(*:465)'
                    .'|/edit(*:478)'
                    .'|(*:486)'
                .')'
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
        188 => [[['_route' => 'actors_show', '_controller' => 'App\\Controller\\ActorsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'actors_edit', '_controller' => 'App\\Controller\\ActorsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'actors_delete', '_controller' => 'App\\Controller\\ActorsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'directors_show', '_controller' => 'App\\Controller\\DirectorsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'directors_edit', '_controller' => 'App\\Controller\\DirectorsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'directors_delete', '_controller' => 'App\\Controller\\DirectorsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'directors_genres_index', '_controller' => 'App\\Controller\\DirectorsGenresController::index'], [], ['GET' => 0], null, true, false, null]],
        302 => [[['_route' => 'directors_genres_show', '_controller' => 'App\\Controller\\DirectorsGenresController::show'], ['genre'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'directors_genres_edit', '_controller' => 'App\\Controller\\DirectorsGenresController::edit'], ['genre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'directors_genres_delete', '_controller' => 'App\\Controller\\DirectorsGenresController::delete'], ['genre'], ['POST' => 0], null, false, true, null]],
        356 => [[['_route' => 'movies_show', '_controller' => 'App\\Controller\\MoviesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'movies_edit', '_controller' => 'App\\Controller\\MoviesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'movies_delete', '_controller' => 'App\\Controller\\MoviesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'movies_genres_index', '_controller' => 'App\\Controller\\MoviesGenresController::index'], [], ['GET' => 0], null, true, false, null]],
        415 => [[['_route' => 'movies_genres_show', '_controller' => 'App\\Controller\\MoviesGenresController::show'], ['genre'], ['GET' => 0], null, false, true, null]],
        428 => [[['_route' => 'movies_genres_edit', '_controller' => 'App\\Controller\\MoviesGenresController::edit'], ['genre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        436 => [[['_route' => 'movies_genres_delete', '_controller' => 'App\\Controller\\MoviesGenresController::delete'], ['genre'], ['POST' => 0], null, false, true, null]],
        465 => [[['_route' => 'roles_show', '_controller' => 'App\\Controller\\RolesController::show'], ['actorId'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'roles_edit', '_controller' => 'App\\Controller\\RolesController::edit'], ['actorId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [
            [['_route' => 'roles_delete', '_controller' => 'App\\Controller\\RolesController::delete'], ['actorId'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
