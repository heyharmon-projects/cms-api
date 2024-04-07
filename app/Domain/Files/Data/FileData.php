<?php

namespace DDD\Domain\Files\Data;

use Spatie\LaravelData\Data;
use DDD\Domain\Base\Files\File;

class FileData extends Data
{
    public function __construct(
        public int $id,
        public ?string $name = 'The file title',
        public ?string $src = 'https://placehold.co/450x350',
        public ?string $alt = 'The file alt',
        public ?string $extension,
    ) {
        $file = File::find($id);
        $this->name = $file->name;
        $this->src = $file->path;
         $this->alt = 'The alt';
        $this->extension = $file->extension;
    }

    // public static function fromModel(): self
    // {
    //     return new self(
    //         1,
    //         'File name',
    //         'File path',
    //         'The alt',
    //         'The extension',
    //     );
    //     // return new self(
    //     //     $file->id,
    //     //     $file->name,
    //     //     $file->path,
    //     //     'The alt',
    //     //     $file->extension,
    //     // );
    // }
}