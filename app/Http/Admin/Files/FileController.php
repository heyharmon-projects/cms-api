<?php

namespace DDD\Http\Admin\Files;

use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DDD\Http\Admin\Files\Resources\FileResource;
use DDD\Http\Admin\Files\Requests\UpdateFileRequest;
use DDD\Http\Admin\Files\Requests\StoreFileRequest;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Files\File;
use DDD\Domain\Files\Actions\UpdateFileAction;
use DDD\Domain\Files\Actions\StoreFileAction;
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
        $file = StoreFileAction::run($organization, $request->file);

        return new FileResource($file);
    }

    public function show(Organization $organization, File $file)
    {
        return new FileResource($file);
    }

    public function update(Organization $organization, File $file, UpdateFileRequest $request)
    {
        $file = UpdateFileAction::run($file, $request->file);

        return new FileResource($file);
    }

    public function destroy(Organization $organization, File $file): JsonResponse
    {
        $file->delete();

        return response()->json(['message' => 'File destroyed'], 200);
    }
}
