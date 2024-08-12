<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseBackground;

class BaseWrapper extends Data
{
    public function __construct(
        public string|Optional $theme,
        public string|Optional $padding_top,
        public string|Optional $padding_bottom,
        public ?BaseBackground $image,
        public bool|Optional $overlay,
    ) {}
}