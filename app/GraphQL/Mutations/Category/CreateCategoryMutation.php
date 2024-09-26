<?php

namespace App\GraphQL\Mutations\Category;

use App\Models\Category;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class CreateCategoryMutation extends Mutation
{

    protected $attributes = [
        'name' => 'createCategory'
    ];

    public function type(): Type
    {
        return GraphQL::type('Category');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Type::string())
            ],
            'description' => [
                'name' => 'description',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $category = new Category();
        $category->name = $args['name'];
        $category->description = $args['description'] ?? null;
        $category->save();

        return $category;
    }
}
