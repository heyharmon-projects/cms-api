<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;

class BaseTextData extends Data
{
    public function __construct(
        public string $tag = 'p',
        public string $content = 'The text content',
        public string $size = 'base',
    ) {
    }
}