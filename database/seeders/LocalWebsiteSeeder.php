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
                'slug' => 'acme',
                'domain' => 'acme.com',
                'settings' => json_decode('{"title": null, "footer": {"logo": null, "menu": []}, "navbar": {"logo": {"file": {"id": 4, "filename": "logo.svg", "extension": "svg"}}, "menu": [{"path": "/services", "title": "Services"}, {"path": "/about", "title": "About"}, {"path": "/locations", "title": "Locations"}]}, "favicon": null, "description": null}'),
                'design' => json_decode('{"colors": [{"name": "Black", "value": "#000000", "variable": "black"}, {"name": "White", "value": "#ffffff", "variable": "white"}], "themes": [{"name": "Default", "selector": ":root", "variables": {"textColor": "black", "wrapperBg": "white", "titleColor": "black", "btnPrimaryBg": "black", "btnSimpleText": "black", "pretitleColor": "black", "btnPrimaryText": "white", "btnSecondaryBg": "white", "btnSecondaryText": "black"}}]}'),
            ],
            [
                'organization_id' => 1,
                'title' => 'Blog',
                'slug' => 'blog',
                'domain' => 'blog.acme.com',
            ],
        ];

        foreach ($websites as $website) {
            Website::create($website);
        }
    }
}
