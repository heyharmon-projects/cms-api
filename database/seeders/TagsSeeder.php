<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

// Models
use DDD\Domain\Tags\TagGroup;
use DDD\Domain\Tags\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'id' => 1,
                'title' => 'Content Tags',
            ],
            [
                'id' => 2,
                'title' => 'Accounts',
                'parent_id' => 1,
            ],
            [
                'id' => 3,
                'title' => 'Checking',
                'parent_id' => 2,
            ],
            [
                'id' => 4,
                'title' => 'Savings',
                'parent_id' => 2,
            ],
            [
                'id' => 5,
                'title' => 'Share',
                'parent_id' => 4,
            ],
            [
                'id' => 6,
                'title' => 'Money Market',
                'parent_id' => 4,
            ],
            [
                'id' => 7,
                'title' => 'Certificates',
                'parent_id' => 4,
            ],
            [
                'id' => 8,
                'title' => 'Loans',
                'parent_id' => 1,
            ],
            [
                'id' => 9,
                'title' => 'Cards',
                'parent_id' => 1,
            ],
            [
                'id' => 10,
                'title' => 'Content Types',
            ],
            [
                'id' => 11,
                'title' => 'Product',
                'parent_id' => 10,
            ],
            [
                'id' => 12,
                'title' => 'Service',
                'parent_id' => 10,
            ],
            [
                'id' => 13,
                'title' => 'Info',
                'parent_id' => 10,
            ],
            [
                'id' => 14,
                'title' => 'Media Tags',
            ],
            [
                'id' => 15,
                'title' => 'Brand',
                'parent_id' => 14,
            ],
            [
                'id' => 16,
                'title' => 'Logo',
                'parent_id' => 14,
            ],
            [
                'id' => 17,
                'title' => 'Brand',
                'parent_id' => 14,
            ],
            [
                'id' => 18,
                'title' => 'Fonts',
                'parent_id' => 14,
            ],
            [
                'id' => 19,
                'title' => 'Desktop Fonts',
                'parent_id' => 18,
            ],
            [
                'id' => 20,
                'title' => 'Web Fonts',
                'parent_id' => 18,
            ],
            [
                'id' => 21,
                'title' => 'Photos',
                'parent_id' => 14,
            ],
            [
                'id' => 22,
                'title' => 'Other Media',
                'parent_id' => 14,
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
