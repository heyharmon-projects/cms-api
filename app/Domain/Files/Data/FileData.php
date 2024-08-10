<?php

namespace DDD\Domain\Files\Data;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Base\Files\File;

class FileData extends Data
{
    public function __construct(
        public int $id,
        public string|Optional $name,
        public string|Optional $filename,
        public string|Optional $path,
        public string|Optional $extension,
    ) {
        $file = File::find($id);
        $this->name = $file->name;
        $this->filename = $file->filename;
        $this->path = $file->path;
        $this->extension = $file->extension;
    }
}