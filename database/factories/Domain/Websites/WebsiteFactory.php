<?php

namespace Database\Factories\Domain\Websites;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use DDD\Domain\Websites\Website;
use DDD\Domain\Base\Organizations\Organization;

class WebsiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Website::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->company();
        
        return [
            'organization_id' => 1,
            'title' => $title,
            'domain' => Str::slug($title) . '.com',
        ];
    }
}
