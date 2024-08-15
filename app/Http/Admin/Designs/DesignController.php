<?php

namespace DDD\Http\Admin\Designs;

use DDD\Http\Admin\Designs\Resources\DesignResource;
use DDD\Http\Admin\Designs\Requests\DesignUpdateRequest;
use DDD\Http\Admin\Designs\Requests\DesignStoreRequest;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Designs\Design;
use DDD\App\Controllers\Controller;

class DesignController extends Controller
{
    public function store(Organization $organization, DesignStoreRequest $request)
    {
        $design = $organization->designs()->create($request->validated());
        
        return new DesignResource($design);
    }

    public function show(Organization $organization, Design $design)
    {
        return new DesignResource($design);
    }

    public function update(Organization $organization, Design $design, DesignUpdateRequest $request)
    {
        $design->update($request->validated());

        return new DesignResource($design);
    }

    public function destroy(Organization $organization, Design $design)
    {
        $design->delete();

        return new DesignResource($design);
    }
}
