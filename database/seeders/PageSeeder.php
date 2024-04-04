<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Pages\Page;

class PageSeeder extends Seeder
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
            ],
            [
                'website_id' => 1,
                'title' => 'About',
                'path' => '/about',
            ],
            [
                'website_id' => 1,
                'title' => 'Contact',
                'path' => '/about/contact',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
