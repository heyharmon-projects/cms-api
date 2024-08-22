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
        // $website = $website->load('settings');
        
        return new PublicWebsiteResource($website);
    }
}
