<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;

class BaseButton extends Data
{
    public function __construct(
        public string $label = 'Button label',
        public string $destination = '/',
        public string|Optional $variant,
        public string|Optional $size,
        public string|Optional $icon,
    ) {
    }
}