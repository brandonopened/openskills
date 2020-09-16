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
        '/api/doc' => [[['_route' => 'case_swagger_doc', '_controller' => 'App\\Controller\\Api\\CaseDocController::caseSwaggerDocAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/lor/creators' => [[['_route' => 'api_get_creators', '_controller' => 'App\\Controller\\Api\\LorSupportController::getCreators'], null, ['GET' => 0], null, false, false, null]],
        '/cf/asn/import' => [[['_route' => 'import_from_asn', '_controller' => 'App\\Controller\\AsnImportController::importAsnAction'], null, null, null, false, false, null]],
        '/salt/case/import' => [[['_route' => 'import_case_file', '_controller' => 'App\\Controller\\CaseImportController::importAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'salt_index', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/salt/excel/import' => [[['_route' => 'import_excel_file', '_controller' => 'App\\Controller\\ExcelImportController::importExcelAction'], null, ['POST' => 0], null, false, false, null]],
        '/additionalfield' => [[['_route' => 'additional_field_index', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::index'], null, null, null, true, false, null]],
        '/additionalfield/new' => [[['_route' => 'additional_field_new', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::create'], null, null, null, false, false, null]],
        '/cftree/remote' => [[['_route' => 'doc_tree_remote_view', '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewRemoteAction'], null, ['GET' => 0], null, false, false, null]],
        '/cfassociation' => [[['_route' => 'lsassociation_index', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdef/association_grouping' => [[['_route' => 'lsdef_association_grouping_index', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdef/association_grouping/new' => [[['_route' => 'lsdef_association_grouping_new', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfdef/concept' => [[['_route' => 'lsdef_concept_index', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdef/concept/new' => [[['_route' => 'lsdef_concept_new', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfdef/grade' => [[['_route' => 'lsdef_grade_index', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdef/grade/new' => [[['_route' => 'lsdef_grade_new', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfdef/item_type' => [[['_route' => 'lsdef_item_type_index', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdef/item_type/new' => [[['_route' => 'lsdef_item_type_new', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfdef/licence' => [[['_route' => 'lsdef_licence_index', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdef/licence/new' => [[['_route' => 'lsdef_licence_new', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfdef/subject' => [[['_route' => 'lsdef_subject_index', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdef/subject/new' => [[['_route' => 'lsdef_subject_new', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfdoc' => [[['_route' => 'lsdoc_index', '_controller' => 'App\\Controller\\Framework\\LsDocController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cfdoc/remote' => [[['_route' => 'lsdoc_remote_index', '_controller' => 'App\\Controller\\Framework\\LsDocController::remoteIndexAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfdoc/new' => [[['_route' => 'lsdoc_new', '_controller' => 'App\\Controller\\Framework\\LsDocController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cfitem' => [[['_route' => 'lsitem_index', '_controller' => 'App\\Controller\\Framework\\LsItemController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/cf/github/import' => [[['_route' => 'import_from_github', '_controller' => 'App\\Controller\\GithubImportController::importAction'], null, null, null, false, false, null]],
        '/user/github/repos' => [[['_route' => 'app_githuboauth_getrepos', '_controller' => 'App\\Controller\\GithubOauthController::getReposAction'], null, null, null, false, false, null]],
        '/user/github/files' => [[['_route' => 'app_githuboauth_getfiles', '_controller' => 'App\\Controller\\GithubOauthController::getFilesAction'], null, null, null, false, false, null]],
        '/admin/mirror/framework/new' => [[['_route' => 'mirror_framework_new', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::new'], null, null, null, false, false, null]],
        '/admin/mirror/credentials' => [[['_route' => 'oauth_credentials_index', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/mirror/credentials/new' => [[['_route' => 'oauth_credentials_new', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/mirror/server' => [[['_route' => 'mirror_server_index', '_controller' => 'App\\Controller\\Mirror\\ServerController::index'], null, null, null, true, false, null]],
        '/admin/mirror/server/new' => [[['_route' => 'mirror_server_add', '_controller' => 'App\\Controller\\Mirror\\ServerController::new'], null, null, null, false, false, null]],
        '/session/check' => [[['_route' => 'app_session_currentsession', '_controller' => 'App\\Controller\\SessionController::currentSession'], null, null, null, false, false, null]],
        '/session/renew' => [[['_route' => 'app_session_renewsession', '_controller' => 'App\\Controller\\SessionController::renewSession'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'site_about', '_controller' => 'App\\Controller\\Site\\AboutController::aboutAction'], null, null, null, false, false, null]],
        '/dev/cookie' => [[['_route' => 'dev_cookie', '_controller' => 'App\\Controller\\Site\\DevController::devCookieAction'], null, null, null, false, false, null]],
        '/admin/system_log' => [[['_route' => 'system_logs_show', '_controller' => 'App\\Controller\\SystemLogController::showSystemLogs'], null, ['GET' => 0], null, true, false, null]],
        '/admin/system_log/revisions/count' => [[['_route' => 'system_logs_count', '_controller' => 'App\\Controller\\SystemLogController::changeLogCount'], null, ['GET' => 0], null, false, false, null]],
        '/admin/system_log/export' => [[['_route' => 'system_logs_csv', '_controller' => 'App\\Controller\\SystemLogController::exportSystemLogs'], null, ['GET' => 0], null, false, false, null]],
        '/uri' => [[['_route' => 'uri_lookup_empty', '_format' => 'html', '_controller' => 'App\\Controller\\UriController::findEmptyUriAction'], null, ['GET' => 0], null, true, false, null]],
        '/user/change-password' => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\User\\ChangePasswordController::changePasswordAction'], null, null, null, false, false, null]],
        '/login/check-github' => [[['_route' => 'github_login', '_controller' => 'App\\Controller\\User\\OAuthServiceController::githubAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/organization' => [[['_route' => 'admin_organization_index', '_controller' => 'App\\Controller\\User\\OrganizationController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/admin/organization/new' => [[['_route' => 'admin_organization_new', '_controller' => 'App\\Controller\\User\\OrganizationController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\User\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/public/user/signup' => [[['_route' => 'public_user_signup', '_controller' => 'App\\Controller\\User\\SignupController::signupAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\User\\UserController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\User\\UserController::newAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
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
                .')'
                .'|/ims/case/v1p0/CF(?'
                    .'|Documents(?'
                        .'|(?:\\.([^/]++))?(*:181)'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:215)'
                    .')'
                    .'|Packages/([^/\\.]++)(?:\\.([^/]++))?(*:258)'
                    .'|Item(?'
                        .'|Associations/([^/\\.]++)(?:\\.([^/]++))?(*:311)'
                        .'|s/(?'
                            .'|([^/]++)/associations(?:\\.([^/]++))?(*:360)'
                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:393)'
                        .')'
                        .'|Types/([^/\\.]++)(?:\\.([^/]++))?(*:433)'
                    .')'
                    .'|Association(?'
                        .'|Groupings/([^/\\.]++)(?:\\.([^/]++))?(*:491)'
                        .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:526)'
                    .')'
                    .'|Licenses/([^/\\.]++)(?:\\.([^/]++))?(*:569)'
                    .'|Rubric(?'
                        .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:613)'
                        .'|Criteri(?'
                            .'|a/([^/\\.]++)(?:\\.([^/]++))?(*:658)'
                            .'|onLevels/([^/\\.]++)(?:\\.([^/]++))?(*:700)'
                        .')'
                    .')'
                    .'|Concepts/([^/\\.]++)(?:\\.([^/]++))?(*:744)'
                    .'|Subjects/([^/\\.]++)(?:\\.([^/]++))?(*:786)'
                .')'
                .'|/a(?'
                    .'|pi/v1/lor/(?'
                        .'|frameworksByCreator/([^/]++)(*:841)'
                        .'|exactMatchIdentifiers/([^/]++)(*:879)'
                    .')'
                    .'|d(?'
                        .'|ditionalfield/(?'
                            .'|([^/]++)(*:917)'
                            .'|edit/([^/]++)(*:938)'
                            .'|delete/([^/]++)(*:961)'
                        .')'
                        .'|min/(?'
                            .'|mirror/(?'
                                .'|framework/([^/]++)/(?'
                                    .'|re(?'
                                        .'|solve\\-id\\-conflict(*:1033)'
                                        .'|fresh(*:1047)'
                                    .')'
                                    .'|enable(*:1063)'
                                    .'|disable(*:1079)'
                                    .'|logs(*:1092)'
                                .')'
                                .'|credentials/([^/]++)(?'
                                    .'|(*:1125)'
                                    .'|/edit(*:1139)'
                                    .'|(*:1148)'
                                .')'
                                .'|server/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1184)'
                                        .'|list(*:1197)'
                                        .'|refresh(*:1213)'
                                    .')'
                                    .'|(*:1223)'
                                .')'
                            .')'
                            .'|system_log/revisions(?:/(\\d+)(?:/(\\d+))?)?(*:1276)'
                            .'|organization/([^/]++)(?'
                                .'|(*:1309)'
                                .'|/edit(*:1323)'
                                .'|(*:1332)'
                            .')'
                            .'|user/([^/]++)(?'
                                .'|(*:1358)'
                                .'|/(?'
                                    .'|edit(*:1375)'
                                    .'|suspend(*:1391)'
                                    .'|activate(*:1408)'
                                    .'|reject(*:1423)'
                                .')'
                                .'|(*:1433)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ms/cfdoc/(\\d+)(?:\\.([^/]++))?(*:1480)'
                    .'|o(?'
                        .'|mments/(?'
                            .'|document/([^/]++)(*:1520)'
                            .'|item/([^/]++)(*:1542)'
                            .'|([^/]++)(?'
                                .'|/([^/]++)(*:1571)'
                                .'|(*:1580)'
                            .')'
                            .'|delete/([^/]++)(*:1605)'
                            .'|([^/]++)/upvote(?'
                                .'|(*:1632)'
                            .')'
                        .')'
                        .'|py/framework/([^/]++)(*:1664)'
                    .')'
                    .'|f(?'
                        .'|d(?'
                            .'|oc/(?'
                                .'|([^/]++)/(?'
                                    .'|revisions(?'
                                        .'|(?:/(\\d+)(?:/(\\d+))?)?(*:1734)'
                                        .'|/export(*:1750)'
                                    .')'
                                    .'|excel(*:1765)'
                                    .'|unlock(*:1780)'
                                    .'|lock(*:1793)'
                                .')'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:1828)'
                                .'|doc/([^/]++)/(?'
                                    .'|update(*:1859)'
                                    .'|derive(*:1874)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|/(?'
                                        .'|e(?'
                                            .'|dit(*:1906)'
                                            .'|xport(?:\\.((?:json|html|null)))?(*:1947)'
                                        .')'
                                        .'|import_logs/mark_as_read(*:1981)'
                                        .'|pdf(*:1993)'
                                        .'|acl(?'
                                            .'|(*:2008)'
                                            .'|/([^/]++)(*:2026)'
                                        .')'
                                    .')'
                                    .'|(*:2037)'
                                .')'
                            .')'
                            .'|ef/(?'
                                .'|association_grouping/([^/]++)(?'
                                    .'|(*:2086)'
                                    .'|/edit(*:2100)'
                                    .'|(*:2109)'
                                .')'
                                .'|concept/([^/]++)(?'
                                    .'|(*:2138)'
                                    .'|/edit(*:2152)'
                                    .'|(*:2161)'
                                .')'
                                .'|grade/([^/]++)(?'
                                    .'|(*:2188)'
                                    .'|/edit(*:2202)'
                                    .'|(*:2211)'
                                .')'
                                .'|item_type/(?'
                                    .'|list(?:\\.([^/]++))?(*:2253)'
                                    .'|([^/]++)(?'
                                        .'|(*:2273)'
                                        .'|/edit(*:2287)'
                                        .'|(*:2296)'
                                    .')'
                                .')'
                                .'|licence/(?'
                                    .'|list(?:\\.([^/]++))?(*:2337)'
                                    .'|([^/]++)(?'
                                        .'|(*:2357)'
                                        .'|/edit(*:2371)'
                                        .'|(*:2380)'
                                    .')'
                                .')'
                                .'|subject/(?'
                                    .'|list(?:\\.([^/]++))?(*:2421)'
                                    .'|([^/]++)(?'
                                        .'|(*:2441)'
                                        .'|/edit(*:2455)'
                                        .'|(*:2464)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|package/doc/(?'
                            .'|([^/\\.]++)(?:\\.((?:json|html|pdf|csv)))?(*:2532)'
                            .'|([^/]++)/export(?:\\.((?:json|html|pdf|csv)))?(*:2586)'
                        .')'
                        .'|tree/(?'
                            .'|doc(?'
                                .'|/(?'
                                    .'|([a-zA-Z0-9.-]+)(*:2630)'
                                    .'|([a-zA-Z0-9.-]+)/av(*:2658)'
                                    .'|([a-zA-Z0-9.-]+)/lv(*:2686)'
                                    .'|([a-zA-Z0-9.-]+)(?:/([^/]++))?(*:2725)'
                                    .'|([^/]++)/updateitems(?:\\.([^/]++))?(*:2769)'
                                .')'
                                .'|export/([^/\\.]++)\\.json(*:2802)'
                            .')'
                            .'|re(?'
                                .'|trievedocument/(?'
                                    .'|([^/]++)(*:2843)'
                                    .'|url(*:2855)'
                                .')'
                                .'|nder/([^/\\.]++)(?:\\.([^/]++))?(*:2895)'
                            .')'
                            .'|item/(?'
                                .'|([^/]++)/details(*:2929)'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:2963)'
                                .'|([^/]++)(?'
                                    .'|(?:/([^/\\.]++)(?:\\.([^/]++))?)?(*:3014)'
                                    .'|/delete(?:/([^/]++))?(*:3044)'
                                .')'
                            .')'
                            .'|assocgroup/([^/]++)/delete(*:3081)'
                        .')'
                        .'|/(?'
                            .'|doc/([^/\\.]++)(?:\\.([^/]++))?(*:3124)'
                            .'|item/([^/\\.]++)(?:\\.([^/]++))?(*:3163)'
                            .'|render/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:3207)'
                                .'|([^/]++)(?:/([^/\\.]++)(?:\\.([^/]++))?)?(*:3255)'
                            .')'
                        .')'
                        .'|item/(?'
                            .'|([^/]++)/(?'
                                .'|unlock(*:3292)'
                                .'|lock(*:3305)'
                            .')'
                            .'|new/([^/]++)(?'
                                .'|(?:/([^/]++))?(*:3344)'
                                .'|(?:/([^/]++)(?:/([^/]++))?)?(*:3381)'
                            .')'
                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:3416)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|e(?'
                                        .'|dit(*:3447)'
                                        .'|xport(*:3461)'
                                    .')'
                                    .'|removeChild/([^/]++)(*:3491)'
                                    .'|copy(*:3504)'
                                    .'|parent(*:3519)'
                                    .'|upload_attachment(*:3545)'
                                .')'
                                .'|(*:3555)'
                            .')'
                        .')'
                        .'|association/(?'
                            .'|new(?'
                                .'|(?:/([^/]++))?(*:3601)'
                                .'|(?:/([^/]++)(?:/([^/]++))?)?(*:3638)'
                            .')'
                            .'|treenew(?'
                                .'|/([^/]++)(*:3667)'
                                .'|exemplar/([^/]++)(*:3693)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:3714)'
                                .'|/(?'
                                    .'|e(?'
                                        .'|dit(*:3734)'
                                        .'|xport(*:3748)'
                                    .')'
                                    .'|remove(*:3764)'
                                .')'
                                .'|(*:3774)'
                            .')'
                        .')'
                    .')'
                    .'|lone/framework/([^/]++)(*:3809)'
                .')'
                .'|/salt/case/export_comment/([^/]++)/([^/]++)/comment\\.csv(*:3875)'
                .'|/treeuiinfo/(?'
                    .'|multi/([^/]++)(*:3913)'
                    .'|doc/([^/]++)(*:3934)'
                    .'|item/([^/]++)(*:3956)'
                    .'|association/([^/]++)(*:3985)'
                .')'
                .'|/uri/([^/\\.]++)(?:\\.([^/]++))?(*:4025)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        181 => [[['_route' => 'api_v1p0_cfdocuments', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getPublicCfDocumentsAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        215 => [[['_route' => 'api_v1p0_cfdocument', 'class' => 'App\\Entity\\Framework\\LsDoc', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'api_v1p0_cfpackage', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getCfPackageAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'api_v1p0_cfitemassociations', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getCfItemAssociationsAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'api_v1p0_cfitemassociations2', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getCfItemAssociationsAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        393 => [[['_route' => 'api_v1p0_cfitem', 'class' => 'App\\Entity\\Framework\\LsItem', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'api_v1p0_cfitemtype', 'class' => 'App\\Entity\\Framework\\LsDefItemType', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectCollectionAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        491 => [[['_route' => 'api_v1p0_cfassociationgrouping', 'class' => 'App\\Entity\\Framework\\LsDefAssociationGrouping', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'api_v1p0_cfassociation', 'class' => 'App\\Entity\\Framework\\LsAssociation', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        569 => [[['_route' => 'api_v1p0_cflicense', 'class' => 'App\\Entity\\Framework\\LsDefLicence', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        613 => [[['_route' => 'api_v1p0_cfrubric', 'class' => 'App\\Entity\\Framework\\CfRubric', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        658 => [[['_route' => 'api_v1p0_cfrubriccriterion', 'class' => 'App\\Entity\\Framework\\CfRubricCriterion', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        700 => [[['_route' => 'api_v1p0_cfrubriccriterionlevel', 'class' => 'App\\Entity\\Framework\\CfRubricCriterionLevel', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        744 => [[['_route' => 'api_v1p0_cfconcept', 'class' => 'App\\Entity\\Framework\\LsDefConcept', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectCollectionAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        786 => [[['_route' => 'api_v1p0_cfsubject', 'class' => 'App\\Entity\\Framework\\LsDefSubject', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectCollectionAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        841 => [[['_route' => 'api_get_frameworks_by_creator', '_controller' => 'App\\Controller\\Api\\LorSupportController::getFrameworksByCreator'], ['creator'], ['GET' => 0], null, false, true, null]],
        879 => [[['_route' => 'api_get_exact_matches', '_controller' => 'App\\Controller\\Api\\LorSupportController::getMatches'], ['identifier'], ['GET' => 0], null, false, true, null]],
        917 => [[['_route' => 'additional_field_show', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::show'], ['id'], null, null, false, true, null]],
        938 => [[['_route' => 'additional_field_update', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::update'], ['id'], null, null, false, true, null]],
        961 => [[['_route' => 'additional_field_delete', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::delete'], ['id'], null, null, false, true, null]],
        1033 => [[['_route' => 'mirror_framework_resolve_conflict', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::resolveConflict'], ['id'], null, null, false, false, null]],
        1047 => [[['_route' => 'mirror_framework_refresh', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::refresh'], ['id'], ['POST' => 0], null, false, false, null]],
        1063 => [[['_route' => 'mirror_framework_enable', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::enable'], ['id'], ['POST' => 0], null, false, false, null]],
        1079 => [[['_route' => 'mirror_framework_disable', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::disable'], ['id'], ['POST' => 0], null, false, false, null]],
        1092 => [[['_route' => 'mirror_framework_logs', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::viewLog'], ['id'], null, null, false, false, null]],
        1125 => [[['_route' => 'oauth_credentials_show', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1139 => [[['_route' => 'oauth_credentials_edit', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1148 => [[['_route' => 'oauth_credentials_delete', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1184 => [[['_route' => 'mirror_server_edit', '_controller' => 'App\\Controller\\Mirror\\ServerController::edit'], ['id'], null, null, false, false, null]],
        1197 => [[['_route' => 'mirror_server_list', '_controller' => 'App\\Controller\\Mirror\\ServerController::list'], ['id'], null, null, false, false, null]],
        1213 => [[['_route' => 'mirror_server_refresh', '_controller' => 'App\\Controller\\Mirror\\ServerController::refresh'], ['id'], ['POST' => 0], null, false, false, null]],
        1223 => [[['_route' => 'mirror_server_delete', '_controller' => 'App\\Controller\\Mirror\\ServerController::remove'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        1276 => [[['_route' => 'system_logs_json', 'offset' => 0, 'limit' => 0, '_controller' => 'App\\Controller\\SystemLogController::listDocRevisionsAction'], ['offset', 'limit'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'admin_organization_show', '_controller' => 'App\\Controller\\User\\OrganizationController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1323 => [[['_route' => 'admin_organization_edit', '_controller' => 'App\\Controller\\User\\OrganizationController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1332 => [[['_route' => 'admin_organization_delete', '_controller' => 'App\\Controller\\User\\OrganizationController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1358 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\User\\UserController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1375 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\User\\UserController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1391 => [[['_route' => 'admin_user_suspend', '_controller' => 'App\\Controller\\User\\UserController::suspendAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1408 => [[['_route' => 'admin_user_activate', '_controller' => 'App\\Controller\\User\\UserController::activateAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1423 => [[['_route' => 'admin_user_reject', '_controller' => 'App\\Controller\\User\\UserController::rejectAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1433 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\User\\UserController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1480 => [[['_route' => 'lsdoc_api_view', '_format' => 'json', '_controller' => 'App\\Controller\\Cms\\ExportController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1520 => [[['_route' => 'create_doc_comment', '_controller' => 'App\\Controller\\CommentsController::newDocCommentAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1542 => [[['_route' => 'create_item_comment', '_controller' => 'App\\Controller\\CommentsController::newItemCommentAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1571 => [[['_route' => 'get_comments', '_controller' => 'App\\Controller\\CommentsController::listAction'], ['itemType', 'itemId'], ['GET' => 0], null, false, true, null]],
        1580 => [[['_route' => 'app_comments_update', '_controller' => 'App\\Controller\\CommentsController::updateAction'], ['id'], ['PUT' => 0], null, false, true, null]],
        1605 => [[['_route' => 'app_comments_delete', '_controller' => 'App\\Controller\\CommentsController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1632 => [
            [['_route' => 'app_comments_upvote', '_controller' => 'App\\Controller\\CommentsController::upvoteAction'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_comments_downvote', '_controller' => 'App\\Controller\\CommentsController::downvoteAction'], ['id'], ['DELETE' => 0], null, false, false, null],
        ],
        1664 => [[['_route' => 'copy_framework_content', '_controller' => 'App\\Controller\\Framework\\CopyController::frameworkAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1734 => [[['_route' => 'doc_revisions_json', 'offset' => 0, 'limit' => 0, '_controller' => 'App\\Controller\\DocRevisionController::listDocRevisionsAction'], ['id', 'offset', 'limit'], ['GET' => 0], null, false, true, null]],
        1750 => [[['_route' => 'doc_revisions_csv', '_controller' => 'App\\Controller\\DocRevisionController::exportDocRevisions'], ['id'], ['GET' => 0], null, false, false, null]],
        1765 => [[['_route' => 'export_excel_file', '_controller' => 'App\\Controller\\ExcelExportController::exportExcelAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1780 => [[['_route' => 'lsdoc_unlock', '_controller' => 'App\\Controller\\Framework\\LockController::releaseDocLock'], ['id'], ['POST' => 0], null, false, false, null]],
        1793 => [[['_route' => 'lsdoc_lock', '_controller' => 'App\\Controller\\Framework\\LockController::extendDocLock'], ['id'], ['POST' => 0], null, false, false, null]],
        1828 => [[['_route' => 'lsdoc_show', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\LsDocController::showAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1859 => [[['_route' => 'lsdoc_update', '_controller' => 'App\\Controller\\Framework\\LsDocController::updateAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1874 => [[['_route' => 'lsdoc_update_derive', '_controller' => 'App\\Controller\\Framework\\LsDocController::deriveAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1906 => [[['_route' => 'lsdoc_edit', '_controller' => 'App\\Controller\\Framework\\LsDocController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1947 => [[['_route' => 'lsdoc_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDocController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1981 => [[['_route' => 'mark_import_logs_as_read', '_controller' => 'App\\Controller\\ImportLogsController::markAsReadAction'], ['doc'], ['POST' => 0], null, false, false, null]],
        1993 => [[['_route' => 'export_pdf_file', '_controller' => 'App\\Controller\\PdfExportController::exportPdfAction'], ['id'], ['GET' => 0], null, false, false, null]],
        2008 => [[['_route' => 'framework_acl_edit', '_controller' => 'App\\Controller\\User\\FrameworkAclController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2026 => [[['_route' => 'framework_acl_remove', '_controller' => 'App\\Controller\\User\\FrameworkAclController::removeAclAction'], ['id', 'targetUser'], ['DELETE' => 0], null, false, true, null]],
        2037 => [[['_route' => 'lsdoc_delete', '_controller' => 'App\\Controller\\Framework\\LsDocController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2086 => [[['_route' => 'lsdef_association_grouping_show', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2100 => [[['_route' => 'lsdef_association_grouping_edit', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2109 => [[['_route' => 'lsdef_association_grouping_delete', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2138 => [[['_route' => 'lsdef_concept_show', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2152 => [[['_route' => 'lsdef_concept_edit', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2161 => [[['_route' => 'lsdef_concept_delete', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2188 => [[['_route' => 'lsdef_grade_show', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2202 => [[['_route' => 'lsdef_grade_edit', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2211 => [[['_route' => 'lsdef_grade_delete', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2253 => [[['_route' => 'lsdef_item_type_index_json', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::jsonListAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        2273 => [[['_route' => 'lsdef_item_type_show', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2287 => [[['_route' => 'lsdef_item_type_edit', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2296 => [[['_route' => 'lsdef_item_type_delete', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2337 => [[['_route' => 'lsdef_licence_index_json', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::jsonListAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        2357 => [[['_route' => 'lsdef_licence_show', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2371 => [[['_route' => 'lsdef_licence_edit', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2380 => [[['_route' => 'lsdef_licence_delete', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2421 => [[['_route' => 'lsdef_subject_index_json', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::jsonListAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        2441 => [[['_route' => 'lsdef_subject_show', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2455 => [[['_route' => 'lsdef_subject_edit', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2464 => [[['_route' => 'lsdef_subject_delete', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2532 => [[['_route' => 'cfpackage_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\CfPackageController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2586 => [[['_route' => 'cfpackage_export2', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\CfPackageController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2630 => [[['_route' => 'doc_tree_view', 'lsItemId' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug'], ['GET' => 0], null, false, true, null]],
        2658 => [[['_route' => 'doc_tree_view_av', 'lsItemId' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug'], ['GET' => 0], null, false, false, null]],
        2686 => [[['_route' => 'doc_tree_view_log', 'lsItemId' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug'], ['GET' => 0], null, false, false, null]],
        2725 => [[['_route' => 'doc_tree_view_ag', 'lsItemId' => null, 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug', 'assocGroup'], ['GET' => 0], null, false, true, null]],
        2769 => [[['_route' => 'doctree_update_items', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\DocTreeController::updateItemsAction'], ['id', '_format'], ['POST' => 0], null, false, true, null]],
        2802 => [[['_route' => 'doctree_cfpackage_export', '_controller' => 'App\\Controller\\Framework\\DocTreeController::exportAction'], ['id'], ['GET' => 0], null, false, false, null]],
        2843 => [[['_route' => 'doctree_retrieve_document', '_controller' => 'App\\Controller\\Framework\\DocTreeController::retrieveDocumentAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2855 => [[['_route' => 'doctree_retrieve_document_by_url', 'id' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::retrieveDocumentAction'], [], ['GET' => 0], null, false, false, null]],
        2895 => [[['_route' => 'doctree_render_document', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\DocTreeController::renderDocumentAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2929 => [[['_route' => 'doc_tree_item_details', '_controller' => 'App\\Controller\\Framework\\DocTreeController::treeItemDetailsAction'], ['id'], ['GET' => 0], null, false, false, null]],
        2963 => [[['_route' => 'doc_tree_item_view', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewItemAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3014 => [[['_route' => 'doc_tree_item_view_ag', '_format' => 'html', 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewItemAction'], ['id', 'assocGroup', '_format'], ['GET' => 0], null, false, true, null]],
        3044 => [[['_route' => 'lsitem_tree_delete', 'includingChildren' => 0, '_controller' => 'App\\Controller\\Framework\\DocTreeController::deleteItemAction'], ['id', 'includingChildren'], ['POST' => 0], null, false, true, null]],
        3081 => [[['_route' => 'lsdef_association_grouping_tree_delete', '_controller' => 'App\\Controller\\Framework\\DocTreeController::deleteAssocGroupAction'], ['id'], ['POST' => 0], null, false, false, null]],
        3124 => [[['_route' => 'editor_lsdoc', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::viewDocAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3163 => [[['_route' => 'editor_lsitem', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::viewItemAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3207 => [[['_route' => 'editor_render_document_only', 'highlight' => null, '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::renderDocumentAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3255 => [[['_route' => 'editor_render', 'highlight' => null, '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::renderDocumentAction'], ['id', 'highlight', '_format'], ['GET' => 0], null, false, true, null]],
        3292 => [[['_route' => 'lsitem_unlock', '_controller' => 'App\\Controller\\Framework\\LockController::releaseItemLock'], ['id'], ['POST' => 0], null, false, false, null]],
        3305 => [[['_route' => 'lsitem_lock', '_controller' => 'App\\Controller\\Framework\\LockController::extendItemLock'], ['id'], ['POST' => 0], null, false, false, null]],
        3344 => [[['_route' => 'lsitem_new', 'parent' => null, '_controller' => 'App\\Controller\\Framework\\LsItemController::newAction'], ['doc', 'parent'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3381 => [[['_route' => 'lsitem_new_ag', 'parent' => null, 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\LsItemController::newAction'], ['doc', 'parent', 'assocGroup'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3416 => [[['_route' => 'lsitem_show', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\LsItemController::showAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3447 => [[['_route' => 'lsitem_edit', '_controller' => 'App\\Controller\\Framework\\LsItemController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3461 => [[['_route' => 'lsitem_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsItemController::exportAction'], ['id'], ['GET' => 0], null, false, false, null]],
        3491 => [[['_route' => 'lsitem_remove_child', '_controller' => 'App\\Controller\\Framework\\LsItemController::removeChildAction'], ['id', 'child'], ['POST' => 0], null, false, true, null]],
        3504 => [[['_route' => 'lsitem_copy_item', '_controller' => 'App\\Controller\\Framework\\LsItemController::copyAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3519 => [[['_route' => 'lsitem_change_parent', '_controller' => 'App\\Controller\\Framework\\LsItemController::changeParentAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3545 => [[['_route' => 'lsitem_upload_attachment', '_controller' => 'App\\Controller\\Framework\\LsItemController::uploadAttachmentAction'], ['id'], ['POST' => 0], null, false, false, null]],
        3555 => [[['_route' => 'lsitem_delete', '_controller' => 'App\\Controller\\Framework\\LsItemController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3601 => [[['_route' => 'lsassociation_new', 'sourceLsItem' => null, '_controller' => 'App\\Controller\\Framework\\LsAssociationController::newAction'], ['sourceLsItem'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3638 => [[['_route' => 'lsassociation_new_ag', 'sourceLsItem' => null, 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\LsAssociationController::newAction'], ['sourceLsItem', 'assocGroup'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3667 => [[['_route' => 'lsassociation_tree_new', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::treeNewAction'], ['lsDoc'], ['POST' => 0], null, false, true, null]],
        3693 => [[['_route' => 'lsassociation_tree_new_exemplar', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::treeNewExemplarAction'], ['originLsItem'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3714 => [[['_route' => 'lsassociation_show', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3734 => [[['_route' => 'lsassociation_edit', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3748 => [[['_route' => 'lsassociation_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::exportAction'], ['id'], ['GET' => 0], null, false, false, null]],
        3764 => [[['_route' => 'lsassociation_remove', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::removeChildAction'], ['id'], ['POST' => 0], null, false, false, null]],
        3774 => [[['_route' => 'lsassociation_delete', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3809 => [[['_route' => 'clone_framework', '_controller' => 'App\\Controller\\Framework\\CloneController::frameworkAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3875 => [[['_route' => 'export_comment_file', '_controller' => 'App\\Controller\\CommentsController::exportCommentAction'], ['itemType', 'itemId'], null, null, false, false, null]],
        3913 => [[['_route' => 'multi_tree_info_json', '_controller' => 'App\\Controller\\UiInfoController::multiJsonInfoAction'], ['id'], ['POST' => 0], null, false, true, null]],
        3934 => [[['_route' => 'lsdoc_tree_json', '_controller' => 'App\\Controller\\UiInfoController::docJsonInfoAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3956 => [[['_route' => 'lsitem_tree_json', '_controller' => 'App\\Controller\\UiInfoController::itemJsonInfoAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3985 => [[['_route' => 'doc_tree_association_json', '_controller' => 'App\\Controller\\UiInfoController::associationJsonInfoAction'], ['id'], ['GET' => 0], null, false, true, null]],
        4025 => [
            [['_route' => 'uri_lookup', '_format' => null, '_controller' => 'App\\Controller\\UriController::findUriAction'], ['uri', '_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
