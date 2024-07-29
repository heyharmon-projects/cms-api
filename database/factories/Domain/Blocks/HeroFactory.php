<?php

namespace Database\Factories\Domain\Blocks;

use Illuminate\Database\Eloquent\Factories\Factory;
use DDD\Domain\Pages\Page;
use DDD\Domain\Blocks\Block;

class HeroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Block::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'page_id' => Page::factory(),
            'group' => 'Hero',
            'component' => 'Hero',
            'data' => [
                'content' => [
                    'pretitle' => [
                        'text' => 'Pretitle',
                    ],
                    'title' => [
                        'text' => 'Title',
                    ],
                    'body' => [
                        'text' => 'Body',
                    ],
                    'buttons' => [
                        [
                            'label' => 'Button',
                            'destination' => '/',
                        ],
                    ],
                    'image' => [
                        'file' => [
                            'id' => 1,
                        ],
                        'overlay' => true,
                    ],
                ]
            ],
        ];
    }
}
