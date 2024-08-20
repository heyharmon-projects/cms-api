<?php

namespace DDD\Domain\Designs\Data\Themes;

use Spatie\LaravelData\Data;

class ThemeData extends Data
{
    public function __construct(
        public ?string $name,
        public ?string $selector,
        public ?ThemeVariablesData $variables,
    ) {
        $this->variables = $variables ?? new ThemeVariablesData(); 
    }
}