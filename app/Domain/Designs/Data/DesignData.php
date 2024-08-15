<?php

namespace DDD\Domain\Designs\Data;

use Spatie\LaravelData\Data;
use DDD\Domain\Designs\Data\Themes\ThemeData;
use DDD\Domain\Designs\Data\Colors\ColorData;

class DesignData extends Data
{
    /**
     * Deignate collections of data objects
     * @property ColorData[] $colors
     * @property ThemeData[] $themes
     */
    public function __construct(
        public ?array $colors,
        public ?array $themes,
    ) {
        $this->colors = $colors ?? [];
        $this->themes = $themes ?? [];
    }
}