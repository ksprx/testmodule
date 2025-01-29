<?php

use App\Core\Facades\Graphql;

Graphql::group(['suffix' => "Brand"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\BrandController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\BrandType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\BrandController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\BrandType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\BrandController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()));

    Graphql::mutation("update", [\App\Modules\Product\Controllers\BrandController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('fa_name', \GraphQL\Type\Definition\Type::string())
        ->argument('en_name', \GraphQL\Type\Definition\Type::string());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\BrandController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "Product"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\ProductController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\ProductType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\ProductController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\ProductType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\ProductController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('category_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('slug', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('is_original', \GraphQL\Type\Definition\Type::boolean())
        ->argument('is_active', \GraphQL\Type\Definition\Type::boolean())
        ->argument('brand_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::mutation("update", [\App\Modules\Product\Controllers\ProductController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('fa_name', \GraphQL\Type\Definition\Type::string())
        ->argument('en_name', \GraphQL\Type\Definition\Type::string())
        ->argument('category_id', \GraphQL\Type\Definition\Type::int())
        ->argument('slug', \GraphQL\Type\Definition\Type::string())
        ->argument('is_original', \GraphQL\Type\Definition\Type::boolean())
        ->argument('is_active', \GraphQL\Type\Definition\Type::boolean())
        ->argument('brand_id', \GraphQL\Type\Definition\Type::int());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\ProductController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "Category"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\CategoryController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\CategoryType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\CategoryController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\CategoryType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\CategoryController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('color_details', \GraphQL\Type\Definition\Type::string());

    Graphql::mutation("update", [\App\Modules\Product\Controllers\CategoryController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('fa_name', \GraphQL\Type\Definition\Type::string())
        ->argument('en_name', \GraphQL\Type\Definition\Type::string())
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('color_details', \GraphQL\Type\Definition\Type::string());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\CategoryController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "CategoryRelationship"], function () {
    Graphql::query("all", [\App\Modules\Product\Controllers\CategoryRelationshipController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\CategoryRelationshipType::build()));

    Graphql::query("get", [\App\Modules\Product\Controllers\CategoryRelationshipController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\CategoryRelationshipType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\CategoryRelationshipController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('parent_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('child_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('nick_name', \GraphQL\Type\Definition\Type::string());

    Graphql::mutation("update", [\App\Modules\Product\Controllers\CategoryRelationshipController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('parent_id', \GraphQL\Type\Definition\Type::int())
        ->argument('child_id', \GraphQL\Type\Definition\Type::int())
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('nick_name', \GraphQL\Type\Definition\Type::string());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\CategoryRelationshipController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "Color"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\ColorController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\ColorType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\ColorController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\ColorType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\ColorController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('hex', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('priority', \GraphQL\Type\Definition\Type::int());

    Graphql::mutation("update", [\App\Modules\Product\Controllers\ColorController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('fa_name', \GraphQL\Type\Definition\Type::string())
        ->argument('en_name', \GraphQL\Type\Definition\Type::string())
        ->argument('hex', \GraphQL\Type\Definition\Type::string())
        ->argument('priority', \GraphQL\Type\Definition\Type::int());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\ColorController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "Box"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\BoxController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\BoxType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\BoxController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\BoxType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\BoxController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('category_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::mutation("update", [\App\Modules\Product\Controllers\BoxController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('fa_name', \GraphQL\Type\Definition\Type::string())
        ->argument('en_name', \GraphQL\Type\Definition\Type::string())
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('category_id', \GraphQL\Type\Definition\Type::int());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\BoxController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "Property"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\PropertyController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\PropertyTypeType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\PropertyController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\PropertyTypeType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\PropertyController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('is_searchable', \GraphQL\Type\Definition\Type::boolean())
        ->argument('is_variable', \GraphQL\Type\Definition\Type::boolean())
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('category_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('type_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('box_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::mutation("update", [\App\Modules\Product\Controllers\PropertyController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('is_searchable', \GraphQL\Type\Definition\Type::boolean())
        ->argument('is_variable', \GraphQL\Type\Definition\Type::boolean())
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('category_id', \GraphQL\Type\Definition\Type::int())
        ->argument('type_id', \GraphQL\Type\Definition\Type::int())
        ->argument('box_id', \GraphQL\Type\Definition\Type::int());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\PropertyController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "PropertyType"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\PropertyTypeController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\PropertyTypeType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\PropertyTypeController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\PropertyTypeType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\PropertyTypeController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('is_searchable', \GraphQL\Type\Definition\Type::boolean())
        ->argument('type', \GraphQL\Type\Definition\Type::int());

    Graphql::mutation("update", [\App\Modules\Product\Controllers\PropertyTypeController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('fa_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('en_name', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('is_searchable', \GraphQL\Type\Definition\Type::boolean())
        ->argument('type', \GraphQL\Type\Definition\Type::int());

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\PropertyTypeController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});

Graphql::group(['suffix' => "PropertyValue"], function () {
    Graphql::query("get", [\App\Modules\Product\Controllers\PropertyValueController::class, 'get'])
        ->type(\App\Modules\Product\GraphQL\Types\PropertyValueType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::query("all", [\App\Modules\Product\Controllers\PropertyValueController::class, 'all'])
        ->type(\GraphQL\Type\Definition\Type::listOf(\App\Modules\Product\GraphQL\Types\PropertyValueType::build()));

    Graphql::mutation("create", [\App\Modules\Product\Controllers\PropertyValueController::class, 'create'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('value', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('property_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('product_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::mutation("update", [\App\Modules\Product\Controllers\PropertyValueController::class, 'update'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('value', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::string()))
        ->argument('priority', \GraphQL\Type\Definition\Type::int())
        ->argument('property_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()))
        ->argument('product_id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));

    Graphql::mutation("delete", [\App\Modules\Product\Controllers\PropertyValueController::class, 'delete'])
        ->type(\App\Modules\Product\GraphQL\Types\UpdateResponseType::build())
        ->argument('id', \GraphQL\Type\Definition\Type::nonNull(\GraphQL\Type\Definition\Type::int()));
});