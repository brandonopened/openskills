<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/ims/case/v1p0/CF(?'
                    .'|Documents(?'
                        .'|(?:\\.([^/]++))?(*:54)'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:87)'
                    .')'
                    .'|Packages/([^/\\.]++)(?:\\.([^/]++))?(*:129)'
                    .'|Item(?'
                        .'|Associations/([^/\\.]++)(?:\\.([^/]++))?(*:182)'
                        .'|s/(?'
                            .'|([^/]++)/associations(?:\\.([^/]++))?(*:231)'
                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:264)'
                        .')'
                        .'|Types/([^/\\.]++)(?:\\.([^/]++))?(*:304)'
                    .')'
                    .'|Association(?'
                        .'|Groupings/([^/\\.]++)(?:\\.([^/]++))?(*:362)'
                        .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:397)'
                    .')'
                    .'|Licenses/([^/\\.]++)(?:\\.([^/]++))?(*:440)'
                    .'|Rubric(?'
                        .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:484)'
                        .'|Criteri(?'
                            .'|a/([^/\\.]++)(?:\\.([^/]++))?(*:529)'
                            .'|onLevels/([^/\\.]++)(?:\\.([^/]++))?(*:571)'
                        .')'
                    .')'
                    .'|Concepts/([^/\\.]++)(?:\\.([^/]++))?(*:615)'
                    .'|Subjects/([^/\\.]++)(?:\\.([^/]++))?(*:657)'
                .')'
                .'|/a(?'
                    .'|pi/v1/lor/(?'
                        .'|frameworksByCreator/([^/]++)(*:712)'
                        .'|exactMatchIdentifiers/([^/]++)(*:750)'
                    .')'
                    .'|d(?'
                        .'|ditionalfield/(?'
                            .'|([^/]++)(*:788)'
                            .'|edit/([^/]++)(*:809)'
                            .'|delete/([^/]++)(*:832)'
                        .')'
                        .'|min/(?'
                            .'|mirror/(?'
                                .'|framework/([^/]++)/(?'
                                    .'|re(?'
                                        .'|solve\\-id\\-conflict(*:904)'
                                        .'|fresh(*:917)'
                                    .')'
                                    .'|enable(*:932)'
                                    .'|disable(*:947)'
                                    .'|logs(*:959)'
                                .')'
                                .'|credentials/([^/]++)(?'
                                    .'|(*:991)'
                                    .'|/edit(*:1004)'
                                    .'|(*:1013)'
                                .')'
                                .'|server/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1049)'
                                        .'|list(*:1062)'
                                        .'|refresh(*:1078)'
                                    .')'
                                    .'|(*:1088)'
                                .')'
                            .')'
                            .'|system_log/revisions(?:/(\\d+)(?:/(\\d+))?)?(*:1141)'
                            .'|organization/([^/]++)(?'
                                .'|(*:1174)'
                                .'|/edit(*:1188)'
                                .'|(*:1197)'
                            .')'
                            .'|user/([^/]++)(?'
                                .'|(*:1223)'
                                .'|/(?'
                                    .'|edit(*:1240)'
                                    .'|suspend(*:1256)'
                                    .'|activate(*:1273)'
                                    .'|reject(*:1288)'
                                .')'
                                .'|(*:1298)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ms/cfdoc/(\\d+)(?:\\.([^/]++))?(*:1345)'
                    .'|o(?'
                        .'|mments/(?'
                            .'|document/([^/]++)(*:1385)'
                            .'|item/([^/]++)(*:1407)'
                            .'|([^/]++)(?'
                                .'|/([^/]++)(*:1436)'
                                .'|(*:1445)'
                            .')'
                            .'|delete/([^/]++)(*:1470)'
                            .'|([^/]++)/upvote(?'
                                .'|(*:1497)'
                            .')'
                        .')'
                        .'|py/framework/([^/]++)(*:1529)'
                    .')'
                    .'|f(?'
                        .'|d(?'
                            .'|oc/(?'
                                .'|([^/]++)/(?'
                                    .'|revisions(?'
                                        .'|(?:/(\\d+)(?:/(\\d+))?)?(*:1599)'
                                        .'|/export(*:1615)'
                                    .')'
                                    .'|excel(*:1630)'
                                    .'|unlock(*:1645)'
                                    .'|lock(*:1658)'
                                .')'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:1693)'
                                .'|doc/([^/]++)/(?'
                                    .'|update(*:1724)'
                                    .'|derive(*:1739)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|/(?'
                                        .'|e(?'
                                            .'|dit(*:1771)'
                                            .'|xport(?:\\.((?:json|html|null)))?(*:1812)'
                                        .')'
                                        .'|import_logs/mark_as_read(*:1846)'
                                        .'|pdf(*:1858)'
                                        .'|acl(?'
                                            .'|(*:1873)'
                                            .'|/([^/]++)(*:1891)'
                                        .')'
                                    .')'
                                    .'|(*:1902)'
                                .')'
                            .')'
                            .'|ef/(?'
                                .'|association_grouping/([^/]++)(?'
                                    .'|(*:1951)'
                                    .'|/edit(*:1965)'
                                    .'|(*:1974)'
                                .')'
                                .'|concept/([^/]++)(?'
                                    .'|(*:2003)'
                                    .'|/edit(*:2017)'
                                    .'|(*:2026)'
                                .')'
                                .'|grade/([^/]++)(?'
                                    .'|(*:2053)'
                                    .'|/edit(*:2067)'
                                    .'|(*:2076)'
                                .')'
                                .'|item_type/(?'
                                    .'|list(?:\\.([^/]++))?(*:2118)'
                                    .'|([^/]++)(?'
                                        .'|(*:2138)'
                                        .'|/edit(*:2152)'
                                        .'|(*:2161)'
                                    .')'
                                .')'
                                .'|licence/(?'
                                    .'|list(?:\\.([^/]++))?(*:2202)'
                                    .'|([^/]++)(?'
                                        .'|(*:2222)'
                                        .'|/edit(*:2236)'
                                        .'|(*:2245)'
                                    .')'
                                .')'
                                .'|subject/(?'
                                    .'|list(?:\\.([^/]++))?(*:2286)'
                                    .'|([^/]++)(?'
                                        .'|(*:2306)'
                                        .'|/edit(*:2320)'
                                        .'|(*:2329)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|package/doc/(?'
                            .'|([^/\\.]++)(?:\\.((?:json|html|pdf|csv)))?(*:2397)'
                            .'|([^/]++)/export(?:\\.((?:json|html|pdf|csv)))?(*:2451)'
                        .')'
                        .'|tree/(?'
                            .'|doc(?'
                                .'|/(?'
                                    .'|([a-zA-Z0-9.-]+)(*:2495)'
                                    .'|([a-zA-Z0-9.-]+)/av(*:2523)'
                                    .'|([a-zA-Z0-9.-]+)/lv(*:2551)'
                                    .'|([a-zA-Z0-9.-]+)(?:/([^/]++))?(*:2590)'
                                    .'|([^/]++)/updateitems(?:\\.([^/]++))?(*:2634)'
                                .')'
                                .'|export/([^/\\.]++)\\.json(*:2667)'
                            .')'
                            .'|re(?'
                                .'|trievedocument/(?'
                                    .'|([^/]++)(*:2708)'
                                    .'|url(*:2720)'
                                .')'
                                .'|nder/([^/\\.]++)(?:\\.([^/]++))?(*:2760)'
                            .')'
                            .'|item/(?'
                                .'|([^/]++)/details(*:2794)'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:2828)'
                                .'|([^/]++)(?'
                                    .'|(?:/([^/\\.]++)(?:\\.([^/]++))?)?(*:2879)'
                                    .'|/delete(?:/([^/]++))?(*:2909)'
                                .')'
                            .')'
                            .'|assocgroup/([^/]++)/delete(*:2946)'
                        .')'
                        .'|/(?'
                            .'|doc/([^/\\.]++)(?:\\.([^/]++))?(*:2989)'
                            .'|item/([^/\\.]++)(?:\\.([^/]++))?(*:3028)'
                            .'|render/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:3072)'
                                .'|([^/]++)(?:/([^/\\.]++)(?:\\.([^/]++))?)?(*:3120)'
                            .')'
                        .')'
                        .'|item/(?'
                            .'|([^/]++)/(?'
                                .'|unlock(*:3157)'
                                .'|lock(*:3170)'
                            .')'
                            .'|new/([^/]++)(?'
                                .'|(?:/([^/]++))?(*:3209)'
                                .'|(?:/([^/]++)(?:/([^/]++))?)?(*:3246)'
                            .')'
                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:3281)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|e(?'
                                        .'|dit(*:3312)'
                                        .'|xport(*:3326)'
                                    .')'
                                    .'|removeChild/([^/]++)(*:3356)'
                                    .'|copy(*:3369)'
                                    .'|parent(*:3384)'
                                    .'|upload_attachment(*:3410)'
                                .')'
                                .'|(*:3420)'
                            .')'
                        .')'
                        .'|association/(?'
                            .'|new(?'
                                .'|(?:/([^/]++))?(*:3466)'
                                .'|(?:/([^/]++)(?:/([^/]++))?)?(*:3503)'
                            .')'
                            .'|treenew(?'
                                .'|/([^/]++)(*:3532)'
                                .'|exemplar/([^/]++)(*:3558)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:3579)'
                                .'|/(?'
                                    .'|e(?'
                                        .'|dit(*:3599)'
                                        .'|xport(*:3613)'
                                    .')'
                                    .'|remove(*:3629)'
                                .')'
                                .'|(*:3639)'
                            .')'
                        .')'
                    .')'
                    .'|lone/framework/([^/]++)(*:3674)'
                .')'
                .'|/salt/case/export_comment/([^/]++)/([^/]++)/comment\\.csv(*:3740)'
                .'|/treeuiinfo/(?'
                    .'|multi/([^/]++)(*:3778)'
                    .'|doc/([^/]++)(*:3799)'
                    .'|item/([^/]++)(*:3821)'
                    .'|association/([^/]++)(*:3850)'
                .')'
                .'|/uri/([^/\\.]++)(?:\\.([^/]++))?(*:3890)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        54 => [[['_route' => 'api_v1p0_cfdocuments', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getPublicCfDocumentsAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'api_v1p0_cfdocument', 'class' => 'App\\Entity\\Framework\\LsDoc', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        129 => [[['_route' => 'api_v1p0_cfpackage', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getCfPackageAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        182 => [[['_route' => 'api_v1p0_cfitemassociations', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getCfItemAssociationsAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'api_v1p0_cfitemassociations2', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getCfItemAssociationsAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'api_v1p0_cfitem', 'class' => 'App\\Entity\\Framework\\LsItem', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'api_v1p0_cfitemtype', 'class' => 'App\\Entity\\Framework\\LsDefItemType', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectCollectionAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'api_v1p0_cfassociationgrouping', 'class' => 'App\\Entity\\Framework\\LsDefAssociationGrouping', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        397 => [[['_route' => 'api_v1p0_cfassociation', 'class' => 'App\\Entity\\Framework\\LsAssociation', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        440 => [[['_route' => 'api_v1p0_cflicense', 'class' => 'App\\Entity\\Framework\\LsDefLicence', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        484 => [[['_route' => 'api_v1p0_cfrubric', 'class' => 'App\\Entity\\Framework\\CfRubric', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'api_v1p0_cfrubriccriterion', 'class' => 'App\\Entity\\Framework\\CfRubricCriterion', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        571 => [[['_route' => 'api_v1p0_cfrubriccriterionlevel', 'class' => 'App\\Entity\\Framework\\CfRubricCriterionLevel', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        615 => [[['_route' => 'api_v1p0_cfconcept', 'class' => 'App\\Entity\\Framework\\LsDefConcept', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectCollectionAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        657 => [[['_route' => 'api_v1p0_cfsubject', 'class' => 'App\\Entity\\Framework\\LsDefSubject', '_format' => 'json', '_controller' => 'App\\Controller\\Api\\CaseV1P0Controller::getObjectCollectionAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        712 => [[['_route' => 'api_get_frameworks_by_creator', '_controller' => 'App\\Controller\\Api\\LorSupportController::getFrameworksByCreator'], ['creator'], ['GET' => 0], null, false, true, null]],
        750 => [[['_route' => 'api_get_exact_matches', '_controller' => 'App\\Controller\\Api\\LorSupportController::getMatches'], ['identifier'], ['GET' => 0], null, false, true, null]],
        788 => [[['_route' => 'additional_field_show', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::show'], ['id'], null, null, false, true, null]],
        809 => [[['_route' => 'additional_field_update', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::update'], ['id'], null, null, false, true, null]],
        832 => [[['_route' => 'additional_field_delete', '_controller' => 'App\\Controller\\Framework\\AdditionalFieldController::delete'], ['id'], null, null, false, true, null]],
        904 => [[['_route' => 'mirror_framework_resolve_conflict', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::resolveConflict'], ['id'], null, null, false, false, null]],
        917 => [[['_route' => 'mirror_framework_refresh', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::refresh'], ['id'], ['POST' => 0], null, false, false, null]],
        932 => [[['_route' => 'mirror_framework_enable', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::enable'], ['id'], ['POST' => 0], null, false, false, null]],
        947 => [[['_route' => 'mirror_framework_disable', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::disable'], ['id'], ['POST' => 0], null, false, false, null]],
        959 => [[['_route' => 'mirror_framework_logs', '_controller' => 'App\\Controller\\Mirror\\FrameworkController::viewLog'], ['id'], null, null, false, false, null]],
        991 => [[['_route' => 'oauth_credentials_show', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1004 => [[['_route' => 'oauth_credentials_edit', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1013 => [[['_route' => 'oauth_credentials_delete', '_controller' => 'App\\Controller\\Mirror\\OAuthCredentialsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1049 => [[['_route' => 'mirror_server_edit', '_controller' => 'App\\Controller\\Mirror\\ServerController::edit'], ['id'], null, null, false, false, null]],
        1062 => [[['_route' => 'mirror_server_list', '_controller' => 'App\\Controller\\Mirror\\ServerController::list'], ['id'], null, null, false, false, null]],
        1078 => [[['_route' => 'mirror_server_refresh', '_controller' => 'App\\Controller\\Mirror\\ServerController::refresh'], ['id'], ['POST' => 0], null, false, false, null]],
        1088 => [[['_route' => 'mirror_server_delete', '_controller' => 'App\\Controller\\Mirror\\ServerController::remove'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        1141 => [[['_route' => 'system_logs_json', 'offset' => 0, 'limit' => 0, '_controller' => 'App\\Controller\\SystemLogController::listDocRevisionsAction'], ['offset', 'limit'], ['GET' => 0], null, false, true, null]],
        1174 => [[['_route' => 'admin_organization_show', '_controller' => 'App\\Controller\\User\\OrganizationController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1188 => [[['_route' => 'admin_organization_edit', '_controller' => 'App\\Controller\\User\\OrganizationController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1197 => [[['_route' => 'admin_organization_delete', '_controller' => 'App\\Controller\\User\\OrganizationController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1223 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\User\\UserController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1240 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\User\\UserController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1256 => [[['_route' => 'admin_user_suspend', '_controller' => 'App\\Controller\\User\\UserController::suspendAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1273 => [[['_route' => 'admin_user_activate', '_controller' => 'App\\Controller\\User\\UserController::activateAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1288 => [[['_route' => 'admin_user_reject', '_controller' => 'App\\Controller\\User\\UserController::rejectAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1298 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\User\\UserController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1345 => [[['_route' => 'lsdoc_api_view', '_format' => 'json', '_controller' => 'App\\Controller\\Cms\\ExportController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1385 => [[['_route' => 'create_doc_comment', '_controller' => 'App\\Controller\\CommentsController::newDocCommentAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1407 => [[['_route' => 'create_item_comment', '_controller' => 'App\\Controller\\CommentsController::newItemCommentAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1436 => [[['_route' => 'get_comments', '_controller' => 'App\\Controller\\CommentsController::listAction'], ['itemType', 'itemId'], ['GET' => 0], null, false, true, null]],
        1445 => [[['_route' => 'app_comments_update', '_controller' => 'App\\Controller\\CommentsController::updateAction'], ['id'], ['PUT' => 0], null, false, true, null]],
        1470 => [[['_route' => 'app_comments_delete', '_controller' => 'App\\Controller\\CommentsController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1497 => [
            [['_route' => 'app_comments_upvote', '_controller' => 'App\\Controller\\CommentsController::upvoteAction'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_comments_downvote', '_controller' => 'App\\Controller\\CommentsController::downvoteAction'], ['id'], ['DELETE' => 0], null, false, false, null],
        ],
        1529 => [[['_route' => 'copy_framework_content', '_controller' => 'App\\Controller\\Framework\\CopyController::frameworkAction'], ['id'], ['POST' => 0], null, false, true, null]],
        1599 => [[['_route' => 'doc_revisions_json', 'offset' => 0, 'limit' => 0, '_controller' => 'App\\Controller\\DocRevisionController::listDocRevisionsAction'], ['id', 'offset', 'limit'], ['GET' => 0], null, false, true, null]],
        1615 => [[['_route' => 'doc_revisions_csv', '_controller' => 'App\\Controller\\DocRevisionController::exportDocRevisions'], ['id'], ['GET' => 0], null, false, false, null]],
        1630 => [[['_route' => 'export_excel_file', '_controller' => 'App\\Controller\\ExcelExportController::exportExcelAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1645 => [[['_route' => 'lsdoc_unlock', '_controller' => 'App\\Controller\\Framework\\LockController::releaseDocLock'], ['id'], ['POST' => 0], null, false, false, null]],
        1658 => [[['_route' => 'lsdoc_lock', '_controller' => 'App\\Controller\\Framework\\LockController::extendDocLock'], ['id'], ['POST' => 0], null, false, false, null]],
        1693 => [[['_route' => 'lsdoc_show', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\LsDocController::showAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1724 => [[['_route' => 'lsdoc_update', '_controller' => 'App\\Controller\\Framework\\LsDocController::updateAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1739 => [[['_route' => 'lsdoc_update_derive', '_controller' => 'App\\Controller\\Framework\\LsDocController::deriveAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1771 => [[['_route' => 'lsdoc_edit', '_controller' => 'App\\Controller\\Framework\\LsDocController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1812 => [[['_route' => 'lsdoc_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDocController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1846 => [[['_route' => 'mark_import_logs_as_read', '_controller' => 'App\\Controller\\ImportLogsController::markAsReadAction'], ['doc'], ['POST' => 0], null, false, false, null]],
        1858 => [[['_route' => 'export_pdf_file', '_controller' => 'App\\Controller\\PdfExportController::exportPdfAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1873 => [[['_route' => 'framework_acl_edit', '_controller' => 'App\\Controller\\User\\FrameworkAclController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1891 => [[['_route' => 'framework_acl_remove', '_controller' => 'App\\Controller\\User\\FrameworkAclController::removeAclAction'], ['id', 'targetUser'], ['DELETE' => 0], null, false, true, null]],
        1902 => [[['_route' => 'lsdoc_delete', '_controller' => 'App\\Controller\\Framework\\LsDocController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1951 => [[['_route' => 'lsdef_association_grouping_show', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1965 => [[['_route' => 'lsdef_association_grouping_edit', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1974 => [[['_route' => 'lsdef_association_grouping_delete', '_controller' => 'App\\Controller\\Framework\\LsDefAssociationGroupingController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2003 => [[['_route' => 'lsdef_concept_show', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2017 => [[['_route' => 'lsdef_concept_edit', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2026 => [[['_route' => 'lsdef_concept_delete', '_controller' => 'App\\Controller\\Framework\\LsDefConceptController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2053 => [[['_route' => 'lsdef_grade_show', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2067 => [[['_route' => 'lsdef_grade_edit', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2076 => [[['_route' => 'lsdef_grade_delete', '_controller' => 'App\\Controller\\Framework\\LsDefGradeController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2118 => [[['_route' => 'lsdef_item_type_index_json', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::jsonListAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        2138 => [[['_route' => 'lsdef_item_type_show', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2152 => [[['_route' => 'lsdef_item_type_edit', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2161 => [[['_route' => 'lsdef_item_type_delete', '_controller' => 'App\\Controller\\Framework\\LsDefItemTypeController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2202 => [[['_route' => 'lsdef_licence_index_json', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::jsonListAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        2222 => [[['_route' => 'lsdef_licence_show', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2236 => [[['_route' => 'lsdef_licence_edit', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2245 => [[['_route' => 'lsdef_licence_delete', '_controller' => 'App\\Controller\\Framework\\LsDefLicenceController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2286 => [[['_route' => 'lsdef_subject_index_json', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::jsonListAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        2306 => [[['_route' => 'lsdef_subject_show', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2320 => [[['_route' => 'lsdef_subject_edit', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2329 => [[['_route' => 'lsdef_subject_delete', '_controller' => 'App\\Controller\\Framework\\LsDefSubjectController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2397 => [[['_route' => 'cfpackage_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\CfPackageController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2451 => [[['_route' => 'cfpackage_export2', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\CfPackageController::exportAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2495 => [[['_route' => 'doc_tree_view', 'lsItemId' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug'], ['GET' => 0], null, false, true, null]],
        2523 => [[['_route' => 'doc_tree_view_av', 'lsItemId' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug'], ['GET' => 0], null, false, false, null]],
        2551 => [[['_route' => 'doc_tree_view_log', 'lsItemId' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug'], ['GET' => 0], null, false, false, null]],
        2590 => [[['_route' => 'doc_tree_view_ag', 'lsItemId' => null, 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewAction'], ['slug', 'assocGroup'], ['GET' => 0], null, false, true, null]],
        2634 => [[['_route' => 'doctree_update_items', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\DocTreeController::updateItemsAction'], ['id', '_format'], ['POST' => 0], null, false, true, null]],
        2667 => [[['_route' => 'doctree_cfpackage_export', '_controller' => 'App\\Controller\\Framework\\DocTreeController::exportAction'], ['id'], ['GET' => 0], null, false, false, null]],
        2708 => [[['_route' => 'doctree_retrieve_document', '_controller' => 'App\\Controller\\Framework\\DocTreeController::retrieveDocumentAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2720 => [[['_route' => 'doctree_retrieve_document_by_url', 'id' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::retrieveDocumentAction'], [], ['GET' => 0], null, false, false, null]],
        2760 => [[['_route' => 'doctree_render_document', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\DocTreeController::renderDocumentAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2794 => [[['_route' => 'doc_tree_item_details', '_controller' => 'App\\Controller\\Framework\\DocTreeController::treeItemDetailsAction'], ['id'], ['GET' => 0], null, false, false, null]],
        2828 => [[['_route' => 'doc_tree_item_view', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewItemAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2879 => [[['_route' => 'doc_tree_item_view_ag', '_format' => 'html', 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\DocTreeController::viewItemAction'], ['id', 'assocGroup', '_format'], ['GET' => 0], null, false, true, null]],
        2909 => [[['_route' => 'lsitem_tree_delete', 'includingChildren' => 0, '_controller' => 'App\\Controller\\Framework\\DocTreeController::deleteItemAction'], ['id', 'includingChildren'], ['POST' => 0], null, false, true, null]],
        2946 => [[['_route' => 'lsdef_association_grouping_tree_delete', '_controller' => 'App\\Controller\\Framework\\DocTreeController::deleteAssocGroupAction'], ['id'], ['POST' => 0], null, false, false, null]],
        2989 => [[['_route' => 'editor_lsdoc', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::viewDocAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3028 => [[['_route' => 'editor_lsitem', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::viewItemAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3072 => [[['_route' => 'editor_render_document_only', 'highlight' => null, '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::renderDocumentAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3120 => [[['_route' => 'editor_render', 'highlight' => null, '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\EditorController::renderDocumentAction'], ['id', 'highlight', '_format'], ['GET' => 0], null, false, true, null]],
        3157 => [[['_route' => 'lsitem_unlock', '_controller' => 'App\\Controller\\Framework\\LockController::releaseItemLock'], ['id'], ['POST' => 0], null, false, false, null]],
        3170 => [[['_route' => 'lsitem_lock', '_controller' => 'App\\Controller\\Framework\\LockController::extendItemLock'], ['id'], ['POST' => 0], null, false, false, null]],
        3209 => [[['_route' => 'lsitem_new', 'parent' => null, '_controller' => 'App\\Controller\\Framework\\LsItemController::newAction'], ['doc', 'parent'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3246 => [[['_route' => 'lsitem_new_ag', 'parent' => null, 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\LsItemController::newAction'], ['doc', 'parent', 'assocGroup'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3281 => [[['_route' => 'lsitem_show', '_format' => 'html', '_controller' => 'App\\Controller\\Framework\\LsItemController::showAction'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3312 => [[['_route' => 'lsitem_edit', '_controller' => 'App\\Controller\\Framework\\LsItemController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3326 => [[['_route' => 'lsitem_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsItemController::exportAction'], ['id'], ['GET' => 0], null, false, false, null]],
        3356 => [[['_route' => 'lsitem_remove_child', '_controller' => 'App\\Controller\\Framework\\LsItemController::removeChildAction'], ['id', 'child'], ['POST' => 0], null, false, true, null]],
        3369 => [[['_route' => 'lsitem_copy_item', '_controller' => 'App\\Controller\\Framework\\LsItemController::copyAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3384 => [[['_route' => 'lsitem_change_parent', '_controller' => 'App\\Controller\\Framework\\LsItemController::changeParentAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3410 => [[['_route' => 'lsitem_upload_attachment', '_controller' => 'App\\Controller\\Framework\\LsItemController::uploadAttachmentAction'], ['id'], ['POST' => 0], null, false, false, null]],
        3420 => [[['_route' => 'lsitem_delete', '_controller' => 'App\\Controller\\Framework\\LsItemController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3466 => [[['_route' => 'lsassociation_new', 'sourceLsItem' => null, '_controller' => 'App\\Controller\\Framework\\LsAssociationController::newAction'], ['sourceLsItem'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3503 => [[['_route' => 'lsassociation_new_ag', 'sourceLsItem' => null, 'assocGroup' => null, '_controller' => 'App\\Controller\\Framework\\LsAssociationController::newAction'], ['sourceLsItem', 'assocGroup'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3532 => [[['_route' => 'lsassociation_tree_new', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::treeNewAction'], ['lsDoc'], ['POST' => 0], null, false, true, null]],
        3558 => [[['_route' => 'lsassociation_tree_new_exemplar', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::treeNewExemplarAction'], ['originLsItem'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3579 => [[['_route' => 'lsassociation_show', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3599 => [[['_route' => 'lsassociation_edit', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3613 => [[['_route' => 'lsassociation_export', '_format' => 'json', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::exportAction'], ['id'], ['GET' => 0], null, false, false, null]],
        3629 => [[['_route' => 'lsassociation_remove', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::removeChildAction'], ['id'], ['POST' => 0], null, false, false, null]],
        3639 => [[['_route' => 'lsassociation_delete', '_controller' => 'App\\Controller\\Framework\\LsAssociationController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3674 => [[['_route' => 'clone_framework', '_controller' => 'App\\Controller\\Framework\\CloneController::frameworkAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3740 => [[['_route' => 'export_comment_file', '_controller' => 'App\\Controller\\CommentsController::exportCommentAction'], ['itemType', 'itemId'], null, null, false, false, null]],
        3778 => [[['_route' => 'multi_tree_info_json', '_controller' => 'App\\Controller\\UiInfoController::multiJsonInfoAction'], ['id'], ['POST' => 0], null, false, true, null]],
        3799 => [[['_route' => 'lsdoc_tree_json', '_controller' => 'App\\Controller\\UiInfoController::docJsonInfoAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3821 => [[['_route' => 'lsitem_tree_json', '_controller' => 'App\\Controller\\UiInfoController::itemJsonInfoAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3850 => [[['_route' => 'doc_tree_association_json', '_controller' => 'App\\Controller\\UiInfoController::associationJsonInfoAction'], ['id'], ['GET' => 0], null, false, true, null]],
        3890 => [
            [['_route' => 'uri_lookup', '_format' => null, '_controller' => 'App\\Controller\\UriController::findUriAction'], ['uri', '_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
