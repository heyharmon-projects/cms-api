<?php

namespace DDD\Http\Admin\Files;

use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DDD\Http\Admin\Files\Resources\FileResource;
use DDD\Http\Admin\Files\Requests\StoreFileRequest;
use DDD\Domain\Files\File;
use DDD\Domain\Files\Actions\StoreFileAction;
use DDD\Domain\Base\Organizations\Organization;
use DDD\App\Controllers\Controller;

class FileController extends Controller
{
    public function index(Organization $organization, Request $request)
    {
        $file = QueryBuilder::for(File::class)
            ->where('organization_id', $organization->id)
            ->latest()
            ->get();

        return FileResource::collection($file);
    }

    public function store(Organization $organization, StoreFileRequest $request)
    {
        $file = StoreFileAction::run($request->file, $organization);

        return new FileResource($file);
    }

    public function show(Organization $organization, File $file)
    {
        return new FileResource($file);
    }

    public function destroy(Organization $organization, File $file): JsonResponse
    {
        $file->delete();

        return response()->json(['message' => 'File destroyed'], 200);
    }
}
