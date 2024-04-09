<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;

class BaseHeading extends Data
{
    public function __construct(
        public string|Optional $tag,
        public string $content = 'The heading content',
        public string|Optional $size,
    ) {
    }
}