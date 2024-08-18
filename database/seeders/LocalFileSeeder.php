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
                'filename' => 'dylan-hunter-IE_4GlVAbY8-unsplash.jpg',
            ],
            [
                'filename' => 'francesca-tosolini-XcVm8mn7NUM-unsplash.jpg',
            ],
            [
                'filename' => 'joel-filipe-qi3CsbHCzRU-unsplash.jpg',
            ],
            [
                'filename' => 'kostiantyn-trundaiev-AIljyZlF5ZE-unsplash.jpg',
            ],
            [
                'filename' => 'michael-moloney-oY-Mo5hh3r4-unsplash.jpg',
            ],
            [
                'filename' => 'mkjr_-2zUjvV0M9dQ-unsplash.jpg',
            ],
            [
                'filename' => 'nuno-silva-Rcsa_Rg77Tc-unsplash.jpg',
            ],
            [
                'filename' => 'ryoji-iwata-Fusx3dlbqpw-unsplash.jpg',
            ],
            [
                'filename' => 'the-graphic-space-kLZs4yoR0uU-unsplash.jpg',
            ],
            [
                'filename' => 'thought-catalog-FYTXE6l8VaE-unsplash.jpg',
            ],
            [
                'filename' => 'todd-kent-178j8tJrNlc-unsplash.jpg',
            ],
            [
                'filename' => 'victor-0yL6nXhn0pI-unsplash.jpg',
            ],
        ];

        foreach ($files as $file) {
            File::create([
                'organization_id' => 1,
                'user_id' => 1,
                'filename' => $file['filename'],
                'extension' => 'jpg',
                'disk' => 'r2',
            ]);
        }
    }
}
