<?php

namespace DDD\Domain\Websites\Data\Design\Colors;

use Spatie\LaravelData\Data;

class ColorData extends Data
{
    public function __construct(
        public ?string $name,
        public ?string $variable,
        public ?string $value,
    ) {}
}