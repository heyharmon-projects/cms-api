<?php

namespace DDD\Domain\Base\Comments\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
use DDD\Domain\Base\Users\Resources\UserResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'body' => $this->body,
            'group' => $this->group,
            'user' => new UserResource($this->user),
            'children' => CommentResource::collection($this->whenLoaded('children')),
        ];
    }
}
