<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\Domain\Blocks\HeroFactory;
use DDD\Domain\Websites\Website;
use DDD\Domain\Pages\Page;
use DDD\Domain\Blocks\Block;
use DDD\Domain\Base\Files\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SubscriptionPlansSeeder::class,
        ]);

        if (app()->environment('local')) {
            $this->call([
                LocalOrganizationsSeeder::class,
                LocalUsersSeeder::class,
                FileSeeder::class,
            ]);
        }
        
        // File::factory()->count(3)->create();
        
        // Website::factory()
        //     ->has(Page::factory()->count(3)
        //         ->has(Block::factory()->count(3)))
        //     ->create();

        Website::factory()
            ->has(Page::factory()->count(1)
                ->has(new HeroFactory()))
            ->create();
    }
}
