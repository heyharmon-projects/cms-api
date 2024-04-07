<?php

namespace DDD\Domain\Blocks\Data\Block\Section;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\Section\SectionBackground;
use DDD\Domain\Blocks\Data\Block\Section\SectionPadding;

class Section extends Data
{
    public function __construct(
        public ?string $theme,
        public ?SectionPadding $padding,
        public ?SectionBackground $background,
    ) {
    }
}