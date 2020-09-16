<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_ExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.extension' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';

        return $container->privates['form.extension'] = new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\Type\\AddAclUserType' => ['privates', 'App\\Form\\Type\\AddAclUserType', 'getAddAclUserTypeService', true],
            'App\\Form\\Type\\AddAclUsernameType' => ['privates', 'App\\Form\\Type\\AddAclUsernameType', 'getAddAclUsernameTypeService', true],
            'App\\Form\\Type\\AdditionalFieldType' => ['privates', 'App\\Form\\Type\\AdditionalFieldType', 'getAdditionalFieldTypeService', true],
            'App\\Form\\Type\\ChangePasswordType' => ['privates', 'App\\Form\\Type\\ChangePasswordType', 'getChangePasswordTypeService', true],
            'App\\Form\\Type\\CustomFieldsType' => ['privates', 'App\\Form\\Type\\CustomFieldsType', 'getCustomFieldsTypeService', true],
            'App\\Form\\Type\\DatalistType' => ['privates', 'App\\Form\\Type\\DatalistType', 'getDatalistTypeService', true],
            'App\\Form\\Type\\LsAssociationAjaxType' => ['privates', 'App\\Form\\Type\\LsAssociationAjaxType', 'getLsAssociationAjaxTypeService', true],
            'App\\Form\\Type\\LsAssociationTreeType' => ['privates', 'App\\Form\\Type\\LsAssociationTreeType', 'getLsAssociationTreeTypeService', true],
            'App\\Form\\Type\\LsAssociationType' => ['privates', 'App\\Form\\Type\\LsAssociationType', 'getLsAssociationTypeService', true],
            'App\\Form\\Type\\LsDefAssociationGroupingType' => ['privates', 'App\\Form\\Type\\LsDefAssociationGroupingType', 'getLsDefAssociationGroupingTypeService', true],
            'App\\Form\\Type\\LsDefConceptType' => ['privates', 'App\\Form\\Type\\LsDefConceptType', 'getLsDefConceptTypeService', true],
            'App\\Form\\Type\\LsDefGradeType' => ['privates', 'App\\Form\\Type\\LsDefGradeType', 'getLsDefGradeTypeService', true],
            'App\\Form\\Type\\LsDefItemTypeType' => ['privates', 'App\\Form\\Type\\LsDefItemTypeType', 'getLsDefItemTypeTypeService', true],
            'App\\Form\\Type\\LsDefLicenceType' => ['privates', 'App\\Form\\Type\\LsDefLicenceType', 'getLsDefLicenceTypeService', true],
            'App\\Form\\Type\\LsDefSubjectType' => ['privates', 'App\\Form\\Type\\LsDefSubjectType', 'getLsDefSubjectTypeService', true],
            'App\\Form\\Type\\LsDocCreateType' => ['privates', 'App\\Form\\Type\\LsDocCreateType', 'getLsDocCreateTypeService', true],
            'App\\Form\\Type\\LsDocListType' => ['privates', 'App\\Form\\Type\\LsDocListType', 'getLsDocListTypeService', true],
            'App\\Form\\Type\\LsDocType' => ['privates', 'App\\Form\\Type\\LsDocType', 'getLsDocTypeService', true],
            'App\\Form\\Type\\LsItemParentType' => ['privates', 'App\\Form\\Type\\LsItemParentType', 'getLsItemParentTypeService', true],
            'App\\Form\\Type\\LsItemType' => ['privates', 'App\\Form\\Type\\LsItemType', 'getLsItemTypeService', true],
            'App\\Form\\Type\\MirroredFrameworkDTOType' => ['privates', 'App\\Form\\Type\\MirroredFrameworkDTOType', 'getMirroredFrameworkDTOTypeService', true],
            'App\\Form\\Type\\MirroredServerDTOType' => ['privates', 'App\\Form\\Type\\MirroredServerDTOType', 'getMirroredServerDTOTypeService', true],
            'App\\Form\\Type\\NewFrameworkType' => ['privates', 'App\\Form\\Type\\NewFrameworkType', 'getNewFrameworkTypeService', true],
            'App\\Form\\Type\\OAuthCredentialDTOType' => ['privates', 'App\\Form\\Type\\OAuthCredentialDTOType', 'getOAuthCredentialDTOTypeService', true],
            'App\\Form\\Type\\OrganizationType' => ['privates', 'App\\Form\\Type\\OrganizationType', 'getOrganizationTypeService', true],
            'App\\Form\\Type\\RemoteCaseServerType' => ['privates', 'App\\Form\\Type\\RemoteCaseServerType', 'getRemoteCaseServerTypeService', true],
            'App\\Form\\Type\\SignupType' => ['privates', 'App\\Form\\Type\\SignupType', 'getSignupTypeService', true],
            'App\\Form\\Type\\UserType' => ['privates', 'App\\Form\\Type\\UserType', 'getUserTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
            'Tetranz\\Select2EntityBundle\\Form\\Type\\Select2EntityType' => ['privates', 'tetranz_select2entity.select2entity_type', 'getTetranzSelect2entity_Select2entityTypeService', true],
        ], [
            'App\\Form\\Type\\AddAclUserType' => '?',
            'App\\Form\\Type\\AddAclUsernameType' => '?',
            'App\\Form\\Type\\AdditionalFieldType' => '?',
            'App\\Form\\Type\\ChangePasswordType' => '?',
            'App\\Form\\Type\\CustomFieldsType' => '?',
            'App\\Form\\Type\\DatalistType' => '?',
            'App\\Form\\Type\\LsAssociationAjaxType' => '?',
            'App\\Form\\Type\\LsAssociationTreeType' => '?',
            'App\\Form\\Type\\LsAssociationType' => '?',
            'App\\Form\\Type\\LsDefAssociationGroupingType' => '?',
            'App\\Form\\Type\\LsDefConceptType' => '?',
            'App\\Form\\Type\\LsDefGradeType' => '?',
            'App\\Form\\Type\\LsDefItemTypeType' => '?',
            'App\\Form\\Type\\LsDefLicenceType' => '?',
            'App\\Form\\Type\\LsDefSubjectType' => '?',
            'App\\Form\\Type\\LsDocCreateType' => '?',
            'App\\Form\\Type\\LsDocListType' => '?',
            'App\\Form\\Type\\LsDocType' => '?',
            'App\\Form\\Type\\LsItemParentType' => '?',
            'App\\Form\\Type\\LsItemType' => '?',
            'App\\Form\\Type\\MirroredFrameworkDTOType' => '?',
            'App\\Form\\Type\\MirroredServerDTOType' => '?',
            'App\\Form\\Type\\NewFrameworkType' => '?',
            'App\\Form\\Type\\OAuthCredentialDTOType' => '?',
            'App\\Form\\Type\\OrganizationType' => '?',
            'App\\Form\\Type\\RemoteCaseServerType' => '?',
            'App\\Form\\Type\\SignupType' => '?',
            'App\\Form\\Type\\UserType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'Tetranz\\Select2EntityBundle\\Form\\Type\\Select2EntityType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
            yield 1 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
        }, 2));
    }
}
