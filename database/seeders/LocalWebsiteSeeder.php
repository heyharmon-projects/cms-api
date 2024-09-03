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
                'settings' => json_decode('{"title": null, "footer": {"logo": null, "menu": []}, "navbar": {"cta": {"label": "Free quote", "destination": "/quote"}, "logo": {"file": {"id": 4, "filename": "logo.svg", "extension": "svg"}}, "menu": [{"path": "/", "title": "Services"}, {"path": "/", "title": "About"}, {"path": "/", "title": "Locations"}], "phone": {"label": "(800) 123-4567", "destination": "tel:+18001234567"}}, "favicon": null, "description": null}'),
                'design' => json_decode('{"colors": [{"name": "White", "value": "#ffffff", "variable": "white"}, {"name": "Grey", "value": "#f2f2f2", "variable": "grey"}, {"name": "Black", "value": "#000", "variable": "black"}], "themes": [{"name": "Default", "selector": ":root", "variables": {"textColor": "black", "wrapperBg": "white", "titleColor": "black", "btnPrimaryBg": "black", "btnSimpleText": "black", "pretitleColor": "black", "btnPrimaryText": "white", "btnSecondaryBg": "white", "btnSecondaryText": "black"}}, {"name": "Neutral", "selector": "[data-theme=\"Neutral\"]", "variables": {"textColor": "black", "wrapperBg": "grey", "titleColor": "black", "btnPrimaryBg": "black", "btnSimpleText": "black", "pretitleColor": "black", "btnPrimaryText": "white", "btnSecondaryBg": "white", "btnSecondaryText": "black"}}, {"name": "Dark", "selector": "[data-theme=\"Dark\"]", "variables": {"textColor": "white", "wrapperBg": "black", "titleColor": "white", "btnPrimaryBg": "white", "btnSimpleText": "white", "pretitleColor": "white", "btnPrimaryText": "black", "btnSecondaryBg": "grey", "btnSecondaryText": "black"}}]}'),
            ],
        ];

        foreach ($websites as $website) {
            Website::create($website);
        }
    }
}
