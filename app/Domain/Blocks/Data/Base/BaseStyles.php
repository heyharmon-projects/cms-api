<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Files\Data\FileData;

class BaseStyles extends Data
{
    public function __construct(
        public string|Optional $theme,
        public BaseStylesPadding|Optional $padding,
        public FileData|Optional $background,
    ) {}
}

class BaseStylesPadding extends Data
{
    public function __construct(
        public string|Optional $top,
        public string|Optional $bottom,
    ) {
    }
}