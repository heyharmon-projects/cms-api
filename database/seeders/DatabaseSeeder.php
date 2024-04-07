<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Websites\Website;
use DDD\Domain\Pages\Page;
use DDD\Domain\Blocks\Block;

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
            ]);
        }
        
        Website::factory()
            ->has(Page::factory()->count(3)
                ->has(Block::factory()->count(3)))
            // ->count(3)
            ->create();
    }
}
