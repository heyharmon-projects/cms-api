<?php

namespace DDD\Http\Public\Websites;

use DDD\Http\Public\Websites\Resources\PublicWebsiteResource;
use DDD\Domain\Websites\Website;
use DDD\Domain\Organizations\Organization;
use DDD\App\Controllers\Controller;

class PublicWebsiteController extends Controller
{
    public function show(Website $website)
    {
        return new PublicWebsiteResource($website);
    }
}
