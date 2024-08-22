<?php

namespace DDD\Http\Public\Websites;

use DDD\Domain\Websites\Website;
use DDD\Domain\Organizations\Organization;
use DDD\App\Controllers\Controller;

class PublicWebsiteStylesheetController extends Controller
{
    public function show(Organization $organization, Website $website)
    {
        // $website = $website->load('settings');
        
        $content = '
            :root {
            --primary: navy;
            --secondary: black;
            --white: white;
            }

            :root {
            --wrapperBg: var(--white);
            --pretitleColor: var(--primary);
            --titleColor: var(--secondary);
            --textColor: var(--secondary);
            --btnPrimaryBg: var(--primary);
            --btnPrimaryText: var(--white);
            --btnSecondaryBg: var(--secondary);
            --btnSecondaryText: var(--white);
            --btnSimpleText: var(--secondary);
            }

            [data-theme="Dark"] {
            --wrapperBg: var(--primary);
            --pretitleColor: var(--white);
            --titleColor: var(--white);
            --textColor: var(--white);
            --btnPrimaryBg: var(--white);
            --btnPrimaryText: var(--primary);
            --btnSecondaryBg: var(--secondary);
            --btnSecondaryText: var(--white);
            --btnSimpleText: var(--white);
            }
        ';

        return response($content)
            ->header('Content-Type', 'text/css');
    }
}
