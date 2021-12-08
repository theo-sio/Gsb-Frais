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
        '/consulter/fiche/frais' => [[['_route' => 'consulter_fiche_frais', '_controller' => 'App\\Controller\\ConsulterFicheFraisController::index'], null, null, null, false, false, null]],
        '/fichefrais' => [[['_route' => 'fichefrais_index', '_controller' => 'App\\Controller\\FichefraisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fichefrais/new' => [[['_route' => 'fichefrais_new', '_controller' => 'App\\Controller\\FichefraisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/visiteur' => [[['_route' => 'visiteur_index', '_controller' => 'App\\Controller\\VisiteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/visiteur/new' => [[['_route' => 'visiteur_new', '_controller' => 'App\\Controller\\VisiteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'index', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null],
            [['_route' => 'seDeconnecter', '_controller' => 'App\\Controller/ConnexionController::seDeconnecter'], null, null, null, false, false, null],
        ],
        '/seConnecter' => [[['_route' => 'seConnecter', '_controller' => 'App\\Controller/ConnexionController::seConnecter'], null, null, null, false, false, null]],
        '/consulter' => [[['_route' => 'consulterFicheFrais', '_controller' => 'App\\Controller\\ConsulterFicheFraisController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/fichefrais/([^/]++)(?'
                    .'|(*:191)'
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/visiteur/([^/]++)(?'
                    .'|(*:242)'
                    .'|/edit(*:255)'
                    .'|(*:263)'
                .')'
                .'|/connexion(?:/([^/]++)(?:/([^/]++))?)?(*:310)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => 'fichefrais_show', '_controller' => 'App\\Controller\\FichefraisController::show'], ['mois'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'fichefrais_edit', '_controller' => 'App\\Controller\\FichefraisController::edit'], ['mois'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'fichefrais_delete', '_controller' => 'App\\Controller\\FichefraisController::delete'], ['mois'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'visiteur_show', '_controller' => 'App\\Controller\\VisiteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'visiteur_edit', '_controller' => 'App\\Controller\\VisiteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'visiteur_delete', '_controller' => 'App\\Controller\\VisiteurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [
            [['_route' => 'connexion', 'echec' => null, 'login' => null, '_controller' => 'App\\Controller\\ConnexionController::index'], ['echec', 'login'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
