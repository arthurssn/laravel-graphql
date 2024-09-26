<?php

namespace App\GraphQL\Mutations\Category;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateCategoryMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateCategory'
    ];

    public function type(): Type
    {
        return GraphQL::type('Category');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int())
            ],
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Type::string())
            ],
            'description' => [
                'name' => 'description',
                'type' => Type::nonNull(Type::string())
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $category = Category::findOrFail($args['id']);
        if (!$category) {
            return null;
        }

        $category->update([
            'name' => $args['name'],
            'description' => $args['description']
        ]);

        return $category;
    }
}
