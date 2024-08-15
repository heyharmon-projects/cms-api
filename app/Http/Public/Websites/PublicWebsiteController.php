<?php

namespace DDD\Http\Public\Websites;

use DDD\Http\Public\Websites\Resources\PublicWebsiteResource;
use DDD\Domain\Websites\Website;
use DDD\Domain\Organizations\Organization;
use DDD\App\Controllers\Controller;

class PublicWebsiteController extends Controller
{
    public function show(Organization $organization, Website $website)
    {
        // $website = $website->load('pages');
        
        // return new PublicWebsiteResource($website);

        $content = '
            :root {
                --primary: #32473b;
                --secondary: #ff7200;
                --tertiary: #c7e5fc;
                --neutral: #f5f5f5;
                --black: #000000;
                --grey: #808080;
                --white: #ffffff;
            }

            :root {
                --wrapper-bg: var(--neutral);
                --pretitle-color: var(--secondary);
                --title-color: var(--primary);
                --text-color: var(--primary);
                --btn-primary-bg: var(--secondary);
                --btn-primary-text: var(--white);
                --btn-secondary-bg: var(--primary);
                --btn-secondary-text: var(--white);
                --btn-simple-text: var(--primary);
            }
        ';

        return response($content)
            ->header('Content-Type', 'text/css');
    }
}
