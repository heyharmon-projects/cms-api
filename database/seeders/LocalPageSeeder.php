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
                'title' => 'Contact',
                'path' => '/contact',
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
