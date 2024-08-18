<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Websites\Website;

class LocalWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = [
            [
                'organization_id' => 1,
                'title' => 'Main Website',
                'domain' => 'acme.com',
            ],
            [
                'organization_id' => 1,
                'title' => 'Blog',
                'domain' => 'blog.acme.com',
            ],
        ];

        foreach ($websites as $website) {
            Website::create($website);
        }
    }
}
