<?php

namespace DDD\Http\Public\Pages;

use Illuminate\Http\Request;
use DDD\Http\Public\Pages\Resources\PublicPageResource;
use DDD\Domain\Websites\Website;
use DDD\Domain\Organizations\Organization;
use DDD\App\Controllers\Controller;

class PublicPageController extends Controller
{
    public function show(Website $website, Request $request)
    {
        $page = $website->pages()
            ->where('path', $request['path'])
            ->firstOrFail();
            
        return new PublicPageResource($page);
    }
}
