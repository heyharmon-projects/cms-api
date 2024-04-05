<?php

namespace Database\Factories\Domain\Pages;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use DDD\Domain\Websites\Website;
use DDD\Domain\Pages\Page;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->word();

        return [
            'website_id' => Website::factory(),
            'title' => $title,
            'path' => '/' . Str::slug($title),
        ];
    }
}
