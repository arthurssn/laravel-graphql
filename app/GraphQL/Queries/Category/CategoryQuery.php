<?php

namespace App\GraphQL\Queries\Category;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CategoryQuery extends Query
{
    protected $attributes = [
        'name' => 'categories',
    ];

    public function type(): \GraphQL\Type\Definition\Type
    {
        return Type::listOf(GraphQL::type('Category'));
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
            'name' => [
                'name' => 'name',
                'type' => Type::string()
            ],
            'description' => [
                'name' => 'description',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['id'])) {
            return \App\Models\Category::where('id', $args['id'])->get();
        }
        if (isset($args['name'])) {
            return \App\Models\Category::where('name', $args['name'])->get();
        }
        if (isset($args['description'])) {
            return \App\Models\Category::where('description', $args['description'])->get();
        }

        return \App\Models\Category::all();
    }
}
