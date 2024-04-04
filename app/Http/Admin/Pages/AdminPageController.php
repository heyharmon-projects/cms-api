<?php

namespace DDD\Http\Admin\Pages;

use DDD\Domain\Websites\Website;
use DDD\Domain\Websites\Resources\PageResource;
use DDD\Domain\Websites\Requests\PageUpdateRequest;
use DDD\Domain\Websites\Requests\PageStoreRequest;
use DDD\Domain\Websites\Page;
use DDD\Domain\Organizations\Organization;
use DDD\App\Controllers\Controller;

class AdminPageController extends Controller
{
    public function index(Organization $organization)
    {
        return PageResource::collection($organization->websites);
    }

    public function store(Organization $organization, Website $website, PageStoreRequest $request)
    {
        $page = $website->pages()->create([
            'title' => $request->title,
            'path' => $request->path,
        ]);

        return new PageResource($page);
    }

    public function show(Organization $organization, Website $website, Page $page)
    {
        return new PageResource($page);
    }

    public function update(Organization $organization, Website $website, PageUpdateRequest $request)
    {
        $page->update($request->validated());

        return new PageResource($website);
    }

    public function destroy(Organization $organization, Website $website, Page $page)
    {
        $page->delete();

        return new PageResource($page);
    }
}
