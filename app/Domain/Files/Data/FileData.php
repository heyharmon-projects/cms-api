<?php

namespace DDD\Domain\Files\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Computed;
use DDD\Domain\Base\Files\File;

class FileData extends Data
{
    #[Computed]
    public string $name;
    public string $filename;
    public string $path;
    public string $extension;

    public function __construct(
        public int $id,
    ) {
        $file = File::find($id);
        
        $this->name = $file->name;
        $this->filename = $file->filename;
        $this->path = $file->path;
        $this->extension = $file->extension;
    }
}