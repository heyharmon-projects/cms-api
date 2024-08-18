<?php

namespace DDD\Domain\Files\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Files\File;

class StoreFileAction
{
    use AsAction;
    
    function handle($file, Organization $organization)
    {
        $disk = config('filesystems.default');
        
        $path = $file->store();

        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        $newFile = File::updateOrCreate(
            [
                'filename' => $filename
            ],
            [
                'organization_id' => $organization->id,
                // 'name' => ,
                // 'path' => $path,
                'filename' => $filename,
                'extension' => $file->getClientOriginalExtension(),
                'disk' => $disk,
            ]
        );

        return $newFile;
    }
}