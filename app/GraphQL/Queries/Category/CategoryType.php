<?php

namespace App\GraphQL\Queries\Category;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CategoryType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Category',
        'description' => 'A category',
        'model' => Category::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the category',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the category',
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'The description of the category',
            ],
        ];
    }
}
