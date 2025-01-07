<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Property\NestedAnnotationToAttributeRector;
use Rector\PHPUnit\AnnotationsToAttributes\Rector\Class_\AnnotationWithValueToAttributeRector;
use Rector\PHPUnit\AnnotationsToAttributes\Rector\Class_\CoversAnnotationWithValueToAttributeRector;
use Rector\PHPUnit\AnnotationsToAttributes\Rector\Class_\TicketAnnotationToAttributeRector;
use Rector\PHPUnit\AnnotationsToAttributes\Rector\ClassMethod\DataProviderAnnotationToAttributeRector;
use Rector\PHPUnit\AnnotationsToAttributes\Rector\ClassMethod\DependsAnnotationWithValueToAttributeRector;
use Rector\PHPUnit\AnnotationsToAttributes\Rector\ClassMethod\TestWithAnnotationToAttributeRector;
use Rector\Symfony\Configs\Rector\Closure\ServiceSetStringNameToClassNameRector;
use Rector\Symfony\Symfony25\Rector\MethodCall\MaxLengthSymfonyFormOptionToAttrRector;
use Rector\Symfony\Symfony30\Rector\MethodCall\StringFormTypeToClassRector;
use Rector\TypeDeclaration\Rector\ClassMethod\BoolReturnTypeFromBooleanStrictReturnsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\NumericReturnTypeFromStrictReturnsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\NumericReturnTypeFromStrictScalarReturnsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictFluentReturnRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNativeCallRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNewArrayRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedPropertyRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromSymfonySerializerRector;
use Rector\TypeDeclaration\Rector\Property\AddPropertyTypeDeclarationRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;
use RectorLaravel\Rector\MethodCall\ValidationRuleArrayStringValueToArrayRector;
use RectorLaravel\Set\LaravelLevelSetList;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withComposerBased()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
        naming: true,
        instanceOf: true,
        earlyReturn: true,
        strictBooleans: true,
        carbon: true,
        rectorPreset: true,
    )
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_110,
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelSetList::LARAVEL_COLLECTION,
        LaravelSetList::LARAVEL_CONTAINER_STRING_TO_FULLY_QUALIFIED_NAME,
        LaravelSetList::ARRAY_STR_FUNCTIONS_TO_STATIC_CALL,
        LaravelSetList::LARAVEL_ARRAY_STR_FUNCTION_TO_STATIC_CALL,
        LaravelSetList::LARAVEL_ELOQUENT_MAGIC_METHOD_TO_QUERY_BUILDER,
        LaravelSetList::LARAVEL_FACADE_ALIASES_TO_FULL_NAMES,
        LaravelSetList::LARAVEL_IF_HELPERS,
        LaravelSetList::LARAVEL_LEGACY_FACTORIES_TO_CLASSES,
        LaravelSetList::LARAVEL_STATIC_TO_INJECTION,
    ])
    ->withRules([
        TypedPropertyFromAssignsRector::class,
        AddPropertyTypeDeclarationRector::class,
        ReturnTypeFromStrictNewArrayRector::class,
        ReturnTypeFromStrictNativeCallRector::class,
        NumericReturnTypeFromStrictReturnsRector::class,
        NumericReturnTypeFromStrictScalarReturnsRector::class,
        BoolReturnTypeFromBooleanStrictReturnsRector::class,
        ReturnTypeFromStrictTypedPropertyRector::class,
        ReturnTypeFromStrictFluentReturnRector::class,
        TicketAnnotationToAttributeRector::class,
        CoversAnnotationWithValueToAttributeRector::class,
        AnnotationWithValueToAttributeRector::class,
        DependsAnnotationWithValueToAttributeRector::class,
        TestWithAnnotationToAttributeRector::class,
        DataProviderAnnotationToAttributeRector::class,
        NestedAnnotationToAttributeRector::class,
        ReturnTypeFromSymfonySerializerRector::class,
        MaxLengthSymfonyFormOptionToAttrRector::class,
        StringFormTypeToClassRector::class,
        ServiceSetStringNameToClassNameRector::class,
        ValidationRuleArrayStringValueToArrayRector::class,
    ]);
