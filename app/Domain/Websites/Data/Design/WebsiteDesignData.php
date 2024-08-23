<?php

namespace DDD\Domain\Websites\Data\Design;

use Spatie\LaravelData\Data;
use DDD\Domain\Websites\Data\Design\Themes\ThemeData;
use DDD\Domain\Websites\Data\Design\Colors\ColorData;

class WebsiteDesignData extends Data
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