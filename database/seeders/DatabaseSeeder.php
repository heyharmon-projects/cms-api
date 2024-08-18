<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                LocalFileSeeder::class,
                LocalWebsiteSeeder::class,
                LocalPageSeeder::class,
                LocalBlockSeeder::class,
            ]);
        }
        
        // File::factory()->count(3)->create();
        
        // Website::factory()
        //     ->has(Page::factory()->count(3)
        //         ->has(Block::factory()->count(3)))
        //     ->create();

        // Website::factory()
        //     ->has(Page::factory()->count(1)
        //         ->has(new HeroFactory()))
        //     ->create();
    }
}
