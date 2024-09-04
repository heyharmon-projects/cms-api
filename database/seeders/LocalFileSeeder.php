<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Files\File;

class LocalFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            [
                'filename' => 'placeholder-image-wide.png',
                'extension' => 'png',
            ],
            [
                'filename' => 'placeholder-image-square.png',
                'extension' => 'png',
            ],
            [
                'filename' => 'placeholder-image-tall.png',
                'extension' => 'png',
            ],
            [
                'filename' => 'logo.svg',
                'extension' => 'svg',
            ],
            [
                'filename' => 'favicon.ico',
                'extension' => 'ico',
            ],
            [
                'filename' => 'meta-image.png',
                'extension' => 'png',
            ]
        ];

        foreach ($files as $file) {
            File::create([
                'organization_id' => 1,
                'user_id' => 1,
                'filename' => $file['filename'],
                'extension' => $file['extension'],
                'disk' => 'r2',
            ]);
        }
    }
}
