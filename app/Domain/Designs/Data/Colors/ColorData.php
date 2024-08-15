<?php

namespace DDD\Domain\Designs\Data\Colors;

use Spatie\LaravelData\Data;

class ColorData extends Data
{
    public function __construct(
        public ?string $name,
        public ?string $variable,
        public ?string $value,
    ) {}
}