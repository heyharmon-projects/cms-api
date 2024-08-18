<?php

namespace DDD\Domain\Files\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Files\File;

class StoreFileAction
{
    use AsAction;
    
    function handle(Organization $organization, $file)
    {
        $disk = config('filesystems.default');
        
        $filename = $file->store();

        // $title = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        $fileRecord = File::updateOrCreate(
            [
                'filename' => $filename
            ],
            [
                'organization_id' => $organization->id,
                // 'title' => $title,
                'filename' => $filename,
                'extension' => $file->getClientOriginalExtension(),
                'disk' => $disk,
            ]
        );

        return $fileRecord;
    }
}