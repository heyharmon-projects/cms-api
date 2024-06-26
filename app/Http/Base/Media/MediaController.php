<?php

namespace DDD\Http\Base\Media;

use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DDD\Domain\Base\Organizations\Organization;
use DDD\Domain\Base\Media\Resources\MediaResource;
use DDD\Domain\Base\Media\Requests\StoreMediaRequest;
use DDD\Domain\Base\Media\Media;
use DDD\App\Controllers\Controller;

class MediaController extends Controller
{
    public function index(Organization $organization, Request $request)
    {
        $media = QueryBuilder::for(Media::class)
            ->where('model_id', $organization->id)
            ->allowedFilters(['tags.slug'])
            ->with('tags')
            ->latest()
            ->get();

        return MediaResource::collection($media);
    }

    public function store(Organization $organization, StoreMediaRequest $request)
    {
        $media = $organization
            ->addMedia($request->file)
            ->toMediaCollection($request->collection);

        return new MediaResource($media->load('tags'));
    }

    public function show(Organization $organization, Media $media)
    {
        return new MediaResource($media->load('tags'));
    }

    public function destroy(Organization $organization, Media $media): JsonResponse
    {
        $media->delete();

        return response()->json(['message' => 'Media destroyed'], 200);
    }
}
