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
            ],
            [
                'filename' => 'placeholder-image-square.png',
            ],
            [
                'filename' => 'placeholder-image-tall.png',
            ],
        ];

        foreach ($files as $file) {
            File::create([
                'organization_id' => 1,
                'user_id' => 1,
                'filename' => $file['filename'],
                'extension' => 'png',
                'disk' => 'r2',
            ]);
        }
    }
}
