<?php

namespace DDD\Http\Admin\Blocks;

use DDD\Http\Admin\Blocks\Resources\BlockResource;
use DDD\Http\Admin\Blocks\Requests\BlockUpdateRequest;
use DDD\Http\Admin\Blocks\Requests\BlockStoreRequest;
use DDD\Domain\Websites\Website;
use DDD\Domain\Pages\Page;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Blocks\Block;
use DDD\App\Controllers\Controller;

class BlockController extends Controller
{
    public function store(Organization $organization, Website $website, Page $page, BlockStoreRequest $request)
    {
        $block = $page->blocks()->create($request->validated());
        
        return new BlockResource($block);
    }

    public function show(Organization $organization, Website $website, Page $page, Block $block)
    {
        return new BlockResource($block);
    }

    public function update(Organization $organization, Website $website, Page $page, Block $block, BlockUpdateRequest $request)
    {
        // return $request->validated();
        $block->update($request->validated());

        return new BlockResource($block);
    }

    public function destroy(Organization $organization, Website $website, Page $page, Block $block)
    {
        $block->delete();

        return new BlockResource($block);
    }
}
