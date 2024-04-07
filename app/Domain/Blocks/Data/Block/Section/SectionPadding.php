<?php

namespace DDD\Domain\Blocks\Data\Block\Section;

use Spatie\LaravelData\Data;

class SectionPadding extends Data
{
    public function __construct(
        public string $paddingTop = '6xl',
        public string $paddingBottom = '6xl',
    ) {
    }
}