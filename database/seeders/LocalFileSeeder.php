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
            [
                'filename' => 'kGRz9gB96QT8aGzK2OH5xp3xMyL0Ys5Budk8COQz.jpg',
            ],
            [
                'filename' => 'kDRBPSsJBUrDJMapdh0FhTJNB7T88TUssgomXE68.jpg',
            ],
            [
                'filename' => '8xZAsVk9PKBhF3TVEK9QblefywbK7JN57M1Vapli.jpg',
            ],
            [
                'filename' => 'KGwPC3jOvdgPpZg1z9okuc2V8Js9GyIQPknqy8L4.jpg',
            ],
            [
                'filename' => '91mfDTPJXeIRfkWlZt0NS3wKfZ652tfyQiZWEj7K.jpg',
            ],
            [
                'filename' => 'pP3ic6RPEqcb8Sqxq0ZO8kL3vgkGsNaCRp16oo7W.jpg',
            ],
            [
                'filename' => '3IA7ie8lykSibpztoMXKZhaMyh0cjnv2iLFci0zZ.jpg',
            ],
            [
                'filename' => 'n9Z8JEkCMtUhhy1gMrWtY8qdiXEvTcgPUnQVRsVR.jpg',
            ],

            // ['name' => 'olivia-hutcherson-Uer1ZL2goM8-unsplash', 'filename' => 'dylan-hunter-IE_4GlVAbY8-unsplash.jpg',],
            // ['name' => 'wade-austin-ellis-FtuJIuBbUhI-unsplash', 'filename' => 'francesca-tosolini-XcVm8mn7NUM-unsplash.jpg',],
            // ['name' => 'valerie-elash-HNCX1RT1qRk-unsplash', 'filename' => 'joel-filipe-qi3CsbHCzRU-unsplash.jpg',],
            // ['name' => 'tamas-pap-Qdt8f7Tcle0-unsplash', 'filename' => 'kostiantyn-trundaiev-AIljyZlF5ZE-unsplash.jpg',],
            // ['name' => 'tamas-pap-cCVs8eo7vH4-unsplash', 'filename' => 'michael-moloney-oY-Mo5hh3r4-unsplash.jpg',],
            // ['name' => 'tadeusz-lakota-tk5LWGNiWVs-unsplash', 'filename' => 'mkjr_-2zUjvV0M9dQ-unsplash.jpg',],
            // ['name' => 'sasha-sashina--UJp4rYpPP0-unsplash', 'filename' => 'nuno-silva-Rcsa_Rg77Tc-unsplash.jpg',],
            // ['name' => 'sam-mcnamara-lBdVjQcfSRQ-unsplash', 'filename' => 'ryoji-iwata-Fusx3dlbqpw-unsplash.jpg',],
            // ['name' => 'ryan-stone-cL5THZBD5YQ-unsplash', 'filename' => 'the-graphic-space-kLZs4yoR0uU-unsplash.jpg',],
            // ['name' => 'ross-sokolovski-QHI4_13y9Tk-unsplash', 'filename' => 'thought-catalog-FYTXE6l8VaE-unsplash.jpg',],
            // ['name' => 'patrick-hendry-nk_uvN_b-w8-unsplash', 'filename' => 'todd-kent-178j8tJrNlc-unsplash.jpg',],
            // ['name' => 'nathan-hanna-7hxC83Qcuwo-unsplash', 'filename' => 'victor-0yL6nXhn0pI-unsplash.jpg',],
            // ['name' => 'jon-grogan-yfTFo4iaADI-unsplash', 'filename' => 'kGRz9gB96QT8aGzK2OH5xp3xMyL0Ys5Budk8COQz.jpg',],
            // ['name' => 'humphrey-muleba-mmqPwkaTGCs-unsplash', 'filename' => 'kDRBPSsJBUrDJMapdh0FhTJNB7T88TUssgomXE68.jpg',],
            // ['name' => 'helena-lopes-WhBGINtjuwc-unsplash', 'filename' => '8xZAsVk9PKBhF3TVEK9QblefywbK7JN57M1Vapli.jpg',],
            // ['name' => 'coral-ouellette-lYYDZH9U22I-unsplash', 'filename' => 'KGwPC3jOvdgPpZg1z9okuc2V8Js9GyIQPknqy8L4.jpg',],
            // ['name' => 'bruno-cervera-ZZqam9DoCoQ-unsplash', 'filename' => '91mfDTPJXeIRfkWlZt0NS3wKfZ652tfyQiZWEj7K.jpg',],
            // ['name' => 'baptist-standaert-mx0DEnfYxic-unsplash', 'filename' => 'pP3ic6RPEqcb8Sqxq0ZO8kL3vgkGsNaCRp16oo7W.jpg',],
            // ['name' => 'annie-spratt-GbfsuO5fq5E-unsplash', 'filename' => '3IA7ie8lykSibpztoMXKZhaMyh0cjnv2iLFci0zZ.jpg',],
            // ['name' => 'camylla-battani-6HMdAij5lfs-unsplash', 'filename' => 'n9Z8JEkCMtUhhy1gMrWtY8qdiXEvTcgPUnQVRsVR.jpg',],
        ];

        foreach ($files as $file) {
            File::create([
                'organization_id' => 1,
                'user_id' => 1,
                // 'name' => $file['name'],
                'filename' => $file['filename'],
                // 'path' => 'acme/' . $file['filename'],
                'extension' => 'jpg',
                // 'mime' => 'image/jpeg',
                'disk' => 'r2',
            ]);
        }
    }
}
