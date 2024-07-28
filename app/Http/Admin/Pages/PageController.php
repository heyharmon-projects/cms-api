<?php

namespace DDD\Http\Admin\Pages;

use DDD\Http\Admin\Pages\Resources\PageResource;
use DDD\Http\Admin\Pages\Requests\PageUpdateRequest;
use DDD\Http\Admin\Pages\Requests\PageStoreRequest;
use DDD\Domain\Websites\Website;
use DDD\Domain\Pages\Page;
use DDD\Domain\Organizations\Organization;
use DDD\App\Controllers\Controller;

class PageController extends Controller
{
    public function index(Organization $organization, Website $website)
    {
        // $pages = $website->pages->with('blocks')->get();

        // $pages = Page::where('website_id', $website->id)
        //     ->with('blocks')
        //     ->get();

        return PageResource::collection($website->pages);
    }

    public function store(Organization $organization, Website $website, PageStoreRequest $request)
    {
        $page = $website->pages()->create($request->validated());

        return new PageResource($page);
    }

    public function show(Organization $organization, Website $website, Page $page)
    {
        $page = $page->load('blocks');

        return new PageResource($page);
    }

    public function update(Organization $organization, Website $website, Page $page, PageUpdateRequest $request)
    {
        $page->update($request->validated());

        return new PageResource($page);
    }

    public function destroy(Organization $organization, Website $website, Page $page)
    {
        $page->delete();

        return new PageResource($page);
    }
}
