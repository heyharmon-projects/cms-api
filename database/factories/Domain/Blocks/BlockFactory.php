<?php

namespace Database\Factories\Domain\Blocks;

use Illuminate\Database\Eloquent\Factories\Factory;
use DDD\Domain\Pages\Page;
use DDD\Domain\Blocks\Block;

class BlockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Block::class;

    /**
     * Configure the model factory.
     */
    // public function configure(): static
    // {
    //     return $this->afterMaking(function (Block $block) {
    //         $block->data = $block->dataClass()::from()->toArray();
    //     });
    // }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $blocks = [
            ['group' => 'CallToAction', 'name' => 'CallToAction'],
            ['group' => 'Card',         'name' => 'CardRepeater'],
            ['group' => 'Feature',      'name' => 'Feature'],
            ['group' => 'Feature',      'name' => 'FeatureRepeater'],
            ['group' => 'Hero',         'name' => 'Hero'],
            ['group' => 'Reviews',      'name' => 'Review'],
        ];

        shuffle($blocks);

        return [
            'page_id' => Page::factory(),
            'group' => $blocks[0]['group'],
            'name' => $blocks[0]['name'],
            // 'data' => [
            //     'section' => [
            //         'theme' => 'light',
            //         'padding' => [
            //             'top' => 'py-12',
            //             'bottom' => 'py-12',
            //         ],
            //     ],
            //     'content' => [
            //         'image' => [
            //           'file' => [
            //             'name' => 'The image title',
            //             'src' => 'https://placehold.co/1280x720/white/grey',
            //             'alt' => 'The image alt',
            //             'description' => 'The image description',
            //             'caption' => 'The image caption',
            //           ],
            //           'overlay' => false,
            //           'width' => null,
            //           'height' => null,
            //         ]
            //     ]
            // ]
        ];
    }
}
