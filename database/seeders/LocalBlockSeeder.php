<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DDD\Domain\Blocks\Block;

class LocalBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blocks = [
            [
                'page_id' => 1,
                'group' => 'Hero',
                'component' => 'HeroSplitFull',
                'order' => 1,
                'data' => json_decode('{"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "content": {"body": {"text": "[Company] is a reliable and experienced [service] company with over [number years] of experience in the local community. We offer comprehensive residential and commercial solutions for [sub services list]."}, "title": {"tag": "h1", "text": "Salt Lake\'s #1 [Service] Company"}, "buttons": [{"label": "Primary CTA", "destination": "/"}], "pretitle": {"text": "[Service description]"}, "alignment": "left"}, "wrapper": {"image": null, "theme": "Default", "overlay": false, "padding_top": "6xl", "padding_bottom": "6xl"}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Cards',
                'component' => 'CardsJumbo',
                'order' => 2,
                'data' => json_decode('{"columns": [{"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "theme": "Dark", "content": {"body": {"text": "Get detailed commercial pressure washing services from Sunday to protect your property and reputation."}, "title": {"tag": "h2", "text": "Commercial"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}, {"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "theme": "Dark", "content": {"body": {"text": "Keep your home clean and impressive with Sunday\'s thorough and customized residential pressure washing services."}, "title": {"tag": "h2", "text": "Residential"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}], "content": {"body": {"text": null}, "title": {"tag": "h2", "text": "[Service verb] homes and businesses since [start year]"}}, "wrapper": {"image": null, "theme": "root", "overlay": false}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Columns',
                'component' => 'Columns',
                'order' => 3,
                'data' => json_decode('{"columns": [{"image": null, "content": {"body": {"text": "Our friendly team will take the time to understand your specific issues. We will answer any questions you have."}, "title": {"tag": "h3", "text": "Get a fast quote"}, "buttons": [], "pretitle": {"text": null}}}, {"image": null, "content": {"body": {"text": "We offer flexible appointment times to minimize disruption to your daily routine. Our team will arrive promptly and fully prepared."}, "title": {"tag": "h3", "text": "Schedule service"}, "buttons": [], "pretitle": {"text": null}}}, {"image": null, "content": {"body": {"text": "Once we have assessed your cleaning situation, our experts will begin pressure washing and preventive measures."}, "title": {"tag": "h3", "text": "We get to work"}, "buttons": [], "pretitle": {"text": null}}}], "content": {"body": {"text": "Your time should never be taken for granted."}, "title": {"tag": "h2", "text": "The [company]\'s promise"}}, "wrapper": {"image": null, "theme": "Default"}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Hero',
                'component' => 'HeroSplit',
                'order' => 4,
                'data' => json_decode('{"image": {"file": {"id": 1, "filename": "placeholder-image-wide.png", "extension": "png"}}, "content": {"body": {"text": "Let\'s restore your property."}, "title": {"tag": "h2", "text": "Ready to go?"}, "buttons": [{"label": "Primary CTA", "destination": "/"}], "pretitle": {"text": null}}, "wrapper": {"image": null, "theme": "root", "overlay": false}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Cards',
                'component' => 'Cards',
                'order' => 5,
                'data' => json_decode('{"columns": [{"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "content": {"body": {"text": "Let our cleaning professionals clean the mold, dirt, and debris off of your house."}, "title": {"tag": "h3", "text": "House Wash"}, "buttons": [{"label": "Explore", "destination": "/"}], "pretitle": {"text": null}, "alignment": "left"}}, {"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "content": {"body": {"text": "Dirty Roof? We can clean the dirt off of your roof and leave you satisfied."}, "title": {"tag": "h3", "text": "Roof Cleaning"}, "buttons": [{"label": "Explore", "destination": "/"}], "pretitle": {"text": null}, "alignment": "left"}}, {"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "content": {"body": {"text": "Remove the dirt from your concrete with our pressure washing process."}, "title": {"tag": "h3", "text": "Concrete Cleaning"}, "buttons": [{"label": "Explore", "destination": "/"}], "pretitle": {"text": null}, "alignment": "left"}}, {"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "content": {"body": {"text": "Clogged gutters? Avoid pests and prevent flooding with clean gutters."}, "title": {"tag": "h3", "text": "Gutter Cleaning"}, "buttons": [{"label": "Explore", "destination": "/"}], "pretitle": {"text": null}, "alignment": "left"}}, {"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "content": {"body": {"text": "Expert deck and fence cleaning restores your outdoor spaces to a like-new look."}, "title": {"tag": "h3", "text": "Decks & Fences"}, "buttons": [{"label": "Explore", "destination": "/"}], "pretitle": {"text": null}, "alignment": "left"}}, {"image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "content": {"body": {"text": "Clean the dirt from your business with our pressure washing process."}, "title": {"tag": "h3", "text": "Commercial"}, "buttons": [{"label": "Explore", "destination": "/"}], "pretitle": {"text": null}, "alignment": "left"}}], "content": {"title": {"tag": "h2", "text": "Our services"}}, "wrapper": null}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Reviews',
                'component' => 'Review',
                'order' => 6,
                'data' => json_decode('{"review": {"extra": {"text": "Salt Lake City"}, "image": {"file": {"id": 2, "filename": "placeholder-image-square.png", "extension": "png"}}, "quote": {"text": "\"Anthony and his team washed my whole house. They did awesome work at such a good price. 100% recommend.\""}, "author": {"text": "John D."}}, "wrapper": {"image": null, "theme": "Light"}}', true),
            ],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}
