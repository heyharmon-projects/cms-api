<?php

namespace DDD\Http\Websites;

use DDD\App\Controllers\Controller;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Websites\Website;
use DDD\Domain\Websites\Requests\WebsiteStoreRequest;
use DDD\Domain\Websites\Requests\WebsiteUpdateRequest;
use DDD\Domain\Websites\Resources\WebsiteResource;

class WebsiteController extends Controller
{
    public function index(Organization $organization)
    {
        return WebsiteResource::collection($organization->websites);
    }

    public function store(Organization $organization, WebsiteStoreRequest $request)
    {
        $website = $organization->websites()->create([
            'title' => $request->title,
            'url' => $request->url,
            'domain' => $request->domain,
        ]);

        return new WebsiteResource($website);
    }

    public function show(Organization $organization, Website $website)
    {
        return new WebsiteResource($website);
    }

    public function update(Organization $organization, Website $website, WebsiteUpdateRequest $request)
    {
        $website->update($request->validated());

        return new WebsiteResource($website);
    }

    public function destroy(Organization $organization, Website $website)
    {
        $website->delete();

        return new WebsiteResource($website);
    }
}
