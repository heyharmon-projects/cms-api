<?php

namespace DDD\Http\Public\Pages\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class PublicPageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'path' => $this->path,
            'blocks' => $this->blocks,
        ];
    }
}
