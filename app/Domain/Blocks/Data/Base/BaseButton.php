<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;

class BaseText extends Data
{
    public function __construct(
        public string $label = 'Button label',
        public string $destination = '/',
        public ?string $variant,
        public ?string $size,
        public ?string $icon,
    ) {
    }
}