<?php

namespace DDD\Domain\Files\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Storage;
use DDD\Domain\Files\File;

class UpdateFileAction
{
    use AsAction;
    
    function handle(File $file, $updatedFile)
    {
        
        $disk = config('filesystems.default');
        
        // Store new file in storage
        $filename = $updatedFile->store();

        // $title = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        // Remove old file storage
        Storage::disk($disk)->delete($file->filename);
        
        // Update file
        $file->update([
            // 'title' => $title,
            'filename' => $filename,
            'extension' => $updatedFile->getClientOriginalExtension(),
            'disk' => $disk,
        ]);

        return $file;
    }
}