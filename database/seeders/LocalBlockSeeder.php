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
            // [
            //     'page_id' => 1,
            //     'group' => 'Hero',
            //     'component' => 'HeroSplitFull',
            //     'order' => 1,
            //     'data' => json_decode('{"content": {"body": {"text": "The body."}, "title": {"text": "The title"}, "buttons": [{"label": "Button", "destination": "/"}], "pretitle": {"text": "Pretitle"}}, "wrapper": {"image": null, "theme": "default", "overlay": false}, "image": {"file": {"id": 1, "name": "olivia-hutcherson-Uer1ZL2goM8-unsplash", "path": "acme/2bIPRgi5Qcf2048k3iWJnngfDoifZHkdsQ5pHvk5.jpg", "filename": "2bIPRgi5Qcf2048k3iWJnngfDoifZHkdsQ5pHvk5.jpg", "extension": "jpg"}}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Cards',
            //     'component' => 'CardsJumbo',
            //     'order' => 2,
            //     'data' => json_decode('{"columns": [{"image": {"file": {"id": 9, "alt": "The image alt", "url": "https://ik.imagekit.io/heyharmon/cms-local/acme/h2kGAlBRAe6DV7NDlz2E0uo4P1baisZdOk0MfKpM.jpg", "mime": "image/jpeg", "name": "ryan-stone-cL5THZBD5YQ-unsplash", "path": "acme/the-graphic-space-kLZs4yoR0uU-unsplash.jpg", "caption": "The image caption", "filename": "the-graphic-space-kLZs4yoR0uU-unsplash.jpg", "extension": "jpg", "description": "The image description"}}, "theme": "Dark", "content": {"body": {"text": "Get detailed commercial pressure washing services from Sunday to protect your property and reputation."}, "title": {"text": "Commercial"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}, {"image": {"file": {"id": 2, "alt": "The image alt", "url": "https://ik.imagekit.io/heyharmon/cms-local/acme/fiqlNFRaxMsIaWbSYX2dXMnc0vZUa3uCCnfRICDO.jpg", "mime": "image/jpeg", "name": "wade-austin-ellis-FtuJIuBbUhI-unsplash", "path": "acme/francesca-tosolini-XcVm8mn7NUM-unsplash.jpg", "caption": "The image caption", "filename": "francesca-tosolini-XcVm8mn7NUM-unsplash.jpg", "extension": "jpg", "description": "The image description"}}, "theme": "Dark", "content": {"body": {"text": "Keep your home clean and impressive with Sunday\'s thorough and customized residential pressure washing services."}, "title": {"text": "Residential"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}], "content": {"body": {"text": null}, "title": {"text": "Washing homes and businesses since 2007"}}, "wrapper": {"image": null, "theme": "root", "overlay": false}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Columns',
            //     'component' => 'Columns',
            //     'order' => 3,
            //     'data' => json_decode('{"columns": [{"content": {"body": {"text": "Our friendly team will take the time to understand your specific issues. We\’ll answer any questions you have."}, "title": {"text": "Get a fast quote", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}, {"content": {"body": {"text": "We offer flexible appointment times to minimize disruption to your daily routine. Our team will arrive promptly and fully prepared."}, "title": {"text": "Schedule service", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}, {"content": {"body": {"text": "Once we’ve assessed your cleaning situation, our experts will begin pressure washing and preventive measures."}, "title": {"text": "We get to work", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}], "content": {"title": {"text": "How it works"}}, "wrapper": {"image": null, "theme": "Light"}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Hero',
            //     'component' => 'HeroSplit',
            //     'order' => 4,
            //     'data' => json_decode('{"image": {"file": {"id": 4, "name": "tamas-pap-Qdt8f7Tcle0-unsplash", "path": "acme/kostiantyn-trundaiev-AIljyZlF5ZE-unsplash.jpg", "filename": "kostiantyn-trundaiev-AIljyZlF5ZE-unsplash.jpg", "extension": "jpg"}}, "content": {"body": {"text": "Let\'s restore your property."}, "title": {"text": "Ready to go?"}, "buttons": [{"label": "Get my quote", "destination": "/"}], "pretitle": {"text": null}}, "wrapper": {"image": null, "theme": "root", "overlay": false}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Review',
            //     'component' => 'Review',
            //     'order' => 5,
            //     'data' => json_decode('{"wrapper": {"image": null, "theme": "Light"}, "review": {"extra": {"text": "Salt Lake City"}, "image": {"file": {"id": 13, "name": "jon-grogan-yfTFo4iaADI-unsplash", "path": "acme/kGRz9gB96QT8aGzK2OH5xp3xMyL0Ys5Budk8COQz.jpg", "filename": "kGRz9gB96QT8aGzK2OH5xp3xMyL0Ys5Budk8COQz.jpg", "extension": "jpg"}}, "quote": {"text": "\"Anthony and his team washed my whole house. They did awesome work at such a good price. 100% recommend.\""}, "author": {"text": "John D."}}}', true),
            // ],

            [
                'page_id' => 1,
                'group' => 'Hero',
                'component' => 'HeroSplitFull',
                'order' => 1,
                'data' => json_decode('{"content": {"body": {"text": "The body."}, "title": {"text": "The title"}, "buttons": [{"label": "Button", "destination": "/"}], "pretitle": {"text": "Pretitle"}}, "wrapper": {"image": null, "theme": "default", "overlay": false}, "image": {"file": {"id": 1}}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Cards',
                'component' => 'CardsJumbo',
                'order' => 2,
                'data' => json_decode('{"columns": [{"image": {"file": {"id": 9}}, "theme": "Dark", "content": {"body": {"text": "Get detailed commercial pressure washing services from Sunday to protect your property and reputation."}, "title": {"text": "Commercial"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}, {"image": {"file": {"id": 2}}, "theme": "Dark", "content": {"body": {"text": "Keep your home clean and impressive with Sunday\'s thorough and customized residential pressure washing services."}, "title": {"text": "Residential"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}], "content": {"body": {"text": null}, "title": {"text": "Washing homes and businesses since 2007"}}, "wrapper": {"image": null, "theme": "root", "overlay": false}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Columns',
                'component' => 'Columns',
                'order' => 3,
                'data' => json_decode('{"columns": [{"content": {"body": {"text": "Our friendly team will take the time to understand your specific issues. We will answer any questions you have."}, "title": {"text": "Get a fast quote", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}, {"content": {"body": {"text": "We offer flexible appointment times to minimize disruption to your daily routine. Our team will arrive promptly and fully prepared."}, "title": {"text": "Schedule service", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}, {"content": {"body": {"text": "Once we have assessed your cleaning situation, our experts will begin pressure washing and preventive measures."}, "title": {"text": "We get to work", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}], "content": {"title": {"text": "How it works"}}, "wrapper": {"image": null, "theme": "Light"}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Hero',
                'component' => 'HeroSplit',
                'order' => 4,
                'data' => json_decode('{"image": {"file": {"id": 4}}, "content": {"body": {"text": "Let\'s restore your property."}, "title": {"text": "Ready to go?"}, "buttons": [{"label": "Get my quote", "destination": "/"}], "pretitle": {"text": null}}, "wrapper": {"image": null, "theme": "root", "overlay": false}}', true),
            ],
            [
                'page_id' => 1,
                'group' => 'Review',
                'component' => 'Review',
                'order' => 5,
                'data' => json_decode('{"wrapper": {"image": null, "theme": "Light"}, "review": {"extra": {"text": "Salt Lake City"}, "image": {"file": {"id": 13}}, "quote": {"text": "\"Anthony and his team washed my whole house. They did awesome work at such a good price. 100% recommend.\""}, "author": {"text": "John D."}}}', true),
            ],

            // [
            //     'page_id' => 1,
            //     'group' => 'Hero',
            //     'component' => 'HeroSplitFull',
            //     'order' => 1,
            //     'data' => json_decode('{"content": {"body": {"text": "The body."}, "title": {"text": "The title"}, "buttons": [{"label": "Button", "destination": "/"}], "pretitle": {"text": "Pretitle"}}, "wrapper": {"theme": "default", "overlay": false}, "image": {"file": {"id": 1}}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Cards',
            //     'component' => 'CardsJumbo',
            //     'order' => 2,
            //     'data' => json_decode('{"columns": [{"image": {"file": {"id": 9}}, "theme": "Dark", "content": {"body": {"text": "Get detailed commercial pressure washing services from Sunday to protect your property and reputation."}, "title": {"text": "Commercial"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}, {"image": {"file": {"id": 2}}, "theme": "Dark", "content": {"body": {"text": "Keep your home clean and impressive with Sunday\'s thorough and customized residential pressure washing services."}, "title": {"text": "Residential"}, "buttons": [{"label": "Get started", "destination": "/"}], "pretitle": {"text": null}}, "overlay": true}], "content": {"body": {"text": null}, "title": {"text": "Washing homes and businesses since 2007"}}, "wrapper": {"theme": "root", "overlay": false}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Columns',
            //     'component' => 'Columns',
            //     'order' => 3,
            //     'data' => json_decode('{"columns": [{"content": {"body": {"text": "Our friendly team will take the time to understand your specific issues. We will answer any questions you have."}, "title": {"text": "Get a fast quote", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}, {"content": {"body": {"text": "We offer flexible appointment times to minimize disruption to your daily routine. Our team will arrive promptly and fully prepared."}, "title": {"text": "Schedule service", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}, {"content": {"body": {"text": "Once we have assessed your cleaning situation, our experts will begin pressure washing and preventive measures."}, "title": {"text": "We get to work", "element": "h3"}, "buttons": [], "pretitle": {"text": null}}}], "content": {"title": {"text": "How it works"}}, "wrapper": {"theme": "Light"}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Hero',
            //     'component' => 'HeroSplit',
            //     'order' => 4,
            //     'data' => json_decode('{"image": {"file": {"id": 4}}, "content": {"body": {"text": "Let\'s restore your property."}, "title": {"text": "Ready to go?"}, "buttons": [{"label": "Get my quote", "destination": "/"}], "pretitle": {"text": null}}, "wrapper": {"theme": "root", "overlay": false}}', true),
            // ],
            // [
            //     'page_id' => 1,
            //     'group' => 'Review',
            //     'component' => 'Review',
            //     'order' => 5,
            //     'data' => json_decode('{"wrapper": {"theme": "Light"}, "review": {"extra": {"text": "Salt Lake City"}, "image": {"file": {"id": 13}}, "quote": {"text": "\"Anthony and his team washed my whole house. They did awesome work at such a good price. 100% recommend.\""}, "author": {"text": "John D."}}}', true),
            // ],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}
