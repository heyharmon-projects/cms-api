<?php

namespace DDD\Http\Admin\Websites\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
use DDD\Http\Admin\Designs\Resources\DesignResource;

class WebsiteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'organization_id' => $this->organization_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'domain' => $this->domain,
            'settings' => $this->settings,
            'design' => $this->design,
            // 'design' => new DesignResource($this->design),
        ];
    }
}
