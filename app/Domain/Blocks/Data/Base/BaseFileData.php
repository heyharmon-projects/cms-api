<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;

class BaseFileData extends Data
{
    public function __construct(
        public string $name = 'The file title',
        public string $src = 'https://placehold.co/450x350',
        public string $alt = 'The file alt',
        public ?string $extension,
        public string $width,
        public ?string $height,
    ) {
    }
}