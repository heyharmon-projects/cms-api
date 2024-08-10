<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;

class BasePadding extends Data
{
    public function __construct(
        public string|Optional $top,
        public string|Optional $bottom,
    ) {
    }
}