<?php

namespace DDD\Domain\Blocks\Data\Block\Base;

use Spatie\LaravelData\Data;
use DDD\Domain\Files\Data\FileData;

class BaseImage extends Data
{
    public function __construct(
        public ?FileData $file,
        public bool $overlay = false,
        public ?string $width,
        public ?string $height,
    ) {
    }
}