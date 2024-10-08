<?php

namespace DDD\Http\Public\Websites\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class PublicWebsiteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            // 'organization_id' => $this->organization_id,
            'title' => $this->title,
            // 'domain' => $this->domain,
            'settings' => $this->settings,
        ];
    }
}
