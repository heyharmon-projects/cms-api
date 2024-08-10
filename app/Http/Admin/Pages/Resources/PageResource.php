<?php

namespace DDD\Http\Admin\Pages\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
use DDD\Http\Admin\Blocks\Resources\BlockResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'website_id' => $this->website_id,
            'is_published' => $this->is_published,
            'title' => $this->title,
            'path' => $this->path,
            // 'blocks' => $this->blocks,
            'blocks' => $this->whenLoaded('blocks'),
        ];
    }
}
