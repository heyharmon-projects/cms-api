<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Base\Files\File;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $files = [
            ['name' => 'olivia-hutcherson-Uer1ZL2goM8-unsplash', 'filename' => '2bIPRgi5Qcf2048k3iWJnngfDoifZHkdsQ5pHvk5.jpg',],
            ['name' => 'wade-austin-ellis-FtuJIuBbUhI-unsplash', 'filename' => 'fiqlNFRaxMsIaWbSYX2dXMnc0vZUa3uCCnfRICDO.jpg',],
            ['name' => 'valerie-elash-HNCX1RT1qRk-unsplash', 'filename' => 'ATIZcVzET9boNoQaAYjxO5bIQzNJIzsoxuXZG85l.jpg',],
            ['name' => 'tamas-pap-Qdt8f7Tcle0-unsplash', 'filename' => 'vke2h9wDiOanDTWT86YEAM2pKoGxgOmp07xfF0oJ.jpg',],
            ['name' => 'tamas-pap-cCVs8eo7vH4-unsplash', 'filename' => '854APRIshVRLkzRjgsPXeHLDo05PrGX7YZiFps4f.jpg',],
            ['name' => 'tadeusz-lakota-tk5LWGNiWVs-unsplash', 'filename' => 'Zk1ZwBNSHTOrGqkGmqTFwUBFFnqazwDUvvSahPRT.jpg',],
            ['name' => 'sasha-sashina--UJp4rYpPP0-unsplash', 'filename' => '1dBuObw6HpdkejmvQkA2NwdJ3w0yf9K0HhQ2v41u.jpg',],
            ['name' => 'sam-mcnamara-lBdVjQcfSRQ-unsplash', 'filename' => 'YGlC51m0hxoBn4BULfLVFZbCFiX8YlE2a2A5avto.jpg',],
            ['name' => 'ryan-stone-cL5THZBD5YQ-unsplash', 'filename' => 'h2kGAlBRAe6DV7NDlz2E0uo4P1baisZdOk0MfKpM.jpg',],
            ['name' => 'ross-sokolovski-QHI4_13y9Tk-unsplash', 'filename' => 'gbeEVtCJy2p2qPWX22WKWwhsfxySDvhc2fNYBlUf.jpg',],
            ['name' => 'patrick-hendry-nk_uvN_b-w8-unsplash', 'filename' => 'ZaicBTEP9mtHMjpeVPYHYvqTvm8TnZqJ2kL2GqvN.jpg',],
            ['name' => 'nathan-hanna-7hxC83Qcuwo-unsplash', 'filename' => 'tOlbFKkUonJRthYeMkTyE9rfiemmnSEQ75r1T7sM.jpg',],
            ['name' => 'jon-grogan-yfTFo4iaADI-unsplash', 'filename' => 'kGRz9gB96QT8aGzK2OH5xp3xMyL0Ys5Budk8COQz.jpg',],
            ['name' => 'humphrey-muleba-mmqPwkaTGCs-unsplash', 'filename' => 'kDRBPSsJBUrDJMapdh0FhTJNB7T88TUssgomXE68.jpg',],
            ['name' => 'helena-lopes-WhBGINtjuwc-unsplash', 'filename' => '8xZAsVk9PKBhF3TVEK9QblefywbK7JN57M1Vapli.jpg',],
            ['name' => 'coral-ouellette-lYYDZH9U22I-unsplash', 'filename' => 'KGwPC3jOvdgPpZg1z9okuc2V8Js9GyIQPknqy8L4.jpg',],
            ['name' => 'bruno-cervera-ZZqam9DoCoQ-unsplash', 'filename' => '91mfDTPJXeIRfkWlZt0NS3wKfZ652tfyQiZWEj7K.jpg',],
            ['name' => 'baptist-standaert-mx0DEnfYxic-unsplash', 'filename' => 'pP3ic6RPEqcb8Sqxq0ZO8kL3vgkGsNaCRp16oo7W.jpg',],
            ['name' => 'annie-spratt-GbfsuO5fq5E-unsplash', 'filename' => '3IA7ie8lykSibpztoMXKZhaMyh0cjnv2iLFci0zZ.jpg',],
            ['name' => 'camylla-battani-6HMdAij5lfs-unsplash', 'filename' => 'n9Z8JEkCMtUhhy1gMrWtY8qdiXEvTcgPUnQVRsVR.jpg',],
        ];

        foreach ($files as $file) {
            File::create([
                'organization_id' => 1,
                'user_id' => 1,
                'name' => $file['name'],
                'filename' => $file['filename'],
                'path' => 'acme/' . $file['filename'],
                'extension' => 'jpg',
                'mime' => 'image/jpeg',
                'disk' => 'r2',
            ]);
        }
    }
}
