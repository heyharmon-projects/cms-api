<?php

namespace DDD\Domain\Websites\Data\Design\Themes;

use Spatie\LaravelData\Data;

class ThemeData extends Data
{
    public function __construct(
        public ?string $name,
        public ?string $selector,
        public ?ThemeVariablesData $variables = new ThemeVariablesData(),
    ) {}
}