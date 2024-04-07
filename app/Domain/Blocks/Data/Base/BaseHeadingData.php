<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;

class BaseHeadingData extends Data
{
    public function __construct(
        public string $tag = 'h1',
        public string $content = 'The heading content',
        public string $size = 'base',
    ) {
    }
}