<?php

namespace DDD\Domain\Files\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Storage;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Files\File;

class StoreFileFromUrlAction
{
    use AsAction;
    
    function handle(String $url, Organization $organization)
    {
        $disk = config('filesystems.default');

        // $folder = $organization->slug;

        $fileInfo = pathinfo($url); // Get parts of the URL
        $filename = $fileInfo['basename']; // dog.jpg
        $extension = $fileInfo['extension']; // jpg
        
        // $filename = basename($url) . '.' . $extension;

        try {
            Storage::put($filename, file_get_contents($url));

            // $path = Storage::path($folder . '/' . $name);

            $file = File::updateOrCreate(
                [
                    'filename' => $filename
                ],
                [
                    'organization_id' => $organization->id,
                    // 'path' => $path,
                    // 'name' => $name,
                    'filename' => $filename,
                    'extension' => $extension,
                    'disk' => $disk,
                    // 'folder' => $folder
                ]
            );

            return $file;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}