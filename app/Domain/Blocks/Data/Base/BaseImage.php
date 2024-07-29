<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Files\Data\FileData;

class BaseImage extends Data
{
    public function __construct(
        public FileData $file,
        public string|Optional $width,
        public string|Optional $height,
    ) {
    }
}