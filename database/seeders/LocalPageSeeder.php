<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Pages\Page;

class LocalPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'website_id' => 1,
                'title' => 'Homepage',
                'path' => '/',
                'settings' => json_decode('{"meta_image": {"file": {"id": 6, "filename": "meta-image.png", "extension": "png"}}, "meta_title": "Homepage meta title", "meta_description": "This is the homepage meta description."}')
            ],
            [
                'website_id' => 1,
                'title' => 'Services',
                'path' => '/services',
            ],
            [
                'website_id' => 1,
                'title' => 'About',
                'path' => '/about',
            ],
            [
                'website_id' => 1,
                'title' => 'Locations',
                'path' => '/locations',
            ],
            [
                'website_id' => 1,
                'title' => 'Free Quote',
                'path' => '/free-quote',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
