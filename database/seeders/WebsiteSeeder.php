<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Websites\Website;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = [
            [
                'organization_id' => 1,
                'title' => 'Primary Website',
                'domain' => 'metrifi.com',
            ],
        ];

        foreach ($websites as $website) {
            Website::create($website);
        }
    }
}
