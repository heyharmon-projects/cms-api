<?php

namespace DDD\Http\Admin\Blocks\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class BlockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'page_id' => $this->page_id,
            'group' => $this->group,
            'name' => $this->name,
            'order' => $this->order,
            'data' => $this->data,
        ];
    }
}
