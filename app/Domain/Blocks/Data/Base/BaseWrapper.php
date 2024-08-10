<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Files\Data\FileData;

class BaseWrapper extends Data
{
    public function __construct(
        // public string|Optional $theme,
        // public BaseStylesPadding|Optional $padding,
        // // public FileData|Optional $background,
        // public ?BaseImage $background,

        public string|Optional $theme,
        public string|Optional $padding_top,
        public string|Optional $padding_bottom,
        public ?BaseImage $image,
    ) {}
}