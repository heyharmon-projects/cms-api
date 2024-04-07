<?php

namespace DDD\Domain\Files\Data;

use Spatie\LaravelData\Data;

class FileData extends Data
{
    public function __construct(
        public int $id,
        public string $name = 'The file title',
        public string $src = 'https://placehold.co/450x350',
        public string $alt = 'The file alt',
        public ?string $extension,
    ) {
    }
}