<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseBackground;

class BaseStyles extends Data
{
    public function __construct(
        public string|Optional $theme,
        public BaseStylesPadding|Optional $padding,
        public BaseBackground|Optional $background,
    ) {
    }
}

class BaseStylesPadding extends Data
{
    public function __construct(
        public string|Optional $paddingTop,
        public string|Optional $paddingBottom,
    ) {
    }
}