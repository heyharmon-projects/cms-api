<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;

class BaseText extends Data
{
    public function __construct(
        public string|Optional $tag,
        public string $content = 'The text content',
        public string|Optional $size,
    ) {
    }
}