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
        '/formation' => [[['_route' => 'app_formation', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/create/formation' => [[['_route' => 'create_formation', '_controller' => 'App\\Controller\\FormationController::createFormation'], null, null, null, false, false, null]],
        '/create/formation/list' => [[['_route' => 'list_formation', '_controller' => 'App\\Controller\\FormationController::formationList'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FormationController::home'], null, null, null, false, false, null]],
        '/inscription_utilisateur' => [[['_route' => 'security_registration_user', '_controller' => 'App\\Controller\\SecurityController::registrationUser'], null, null, null, false, false, null]],
        '/inscription_formateur' => [[['_route' => 'security_registration_formateur', '_controller' => 'App\\Controller\\SecurityController::registrationFormateur'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_acc', '_controller' => 'App\\Controller\\SecurityController::userShow'], null, null, null, false, false, null]],
        '/ecoit/admin/create' => [[['_route' => 'user_admin_create', '_controller' => 'App\\Controller\\SecurityController::userAdminCreate'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'user_admin', '_controller' => 'App\\Controller\\SecurityController::userAdmin'], null, null, null, false, false, null]],
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
                .'|/create/formation/(?'
                    .'|edit/([^/]++)(*:203)'
                    .'|([^/]++)/section(*:227)'
                    .'|section/edit/([^/]++)(*:256)'
                    .'|([^/]++)/(?'
                        .'|lesson(?'
                            .'|(*:285)'
                            .'|/edit\\}(*:300)'
                        .')'
                        .'|annexe(*:315)'
                    .')'
                .')'
                .'|/formation/([^/]++)(*:344)'
                .'|/lesson/(?'
                    .'|([^/]++)(*:371)'
                    .'|validate/([^/]++)(*:396)'
                .')'
                .'|/admin/validate/([^/]++)(*:429)'
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
        203 => [[['_route' => 'edit_formation', '_controller' => 'App\\Controller\\FormationController::editFormation'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'create_section', '_controller' => 'App\\Controller\\FormationController::newSection'], ['id'], null, null, false, false, null]],
        256 => [[['_route' => 'edit_section', '_controller' => 'App\\Controller\\FormationController::editSection'], ['id'], null, null, false, true, null]],
        285 => [[['_route' => 'create_lesson', '_controller' => 'App\\Controller\\FormationController::newLesson'], ['id'], null, null, false, false, null]],
        300 => [[['_route' => 'edit_lesson', '_controller' => 'App\\Controller\\FormationController::editLesson'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [[['_route' => 'create_annexe', '_controller' => 'App\\Controller\\FormationController::newFile'], ['id'], null, null, false, false, null]],
        344 => [[['_route' => 'formation_show', '_controller' => 'App\\Controller\\FormationController::show'], ['id'], null, null, false, true, null]],
        371 => [[['_route' => 'lesson_complete', '_controller' => 'App\\Controller\\FormationController::completeLesson'], ['id'], null, null, false, true, null]],
        396 => [[['_route' => 'formation_complete', '_controller' => 'App\\Controller\\FormationController::completeFormation'], ['id'], null, null, false, true, null]],
        429 => [
            [['_route' => 'user_admin_validate', '_controller' => 'App\\Controller\\SecurityController::userValidate'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
