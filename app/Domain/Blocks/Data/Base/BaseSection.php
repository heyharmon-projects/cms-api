<?php

namespace DDD\Domain\Blocks\Data\Block\Base;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\Base\BaseBackground;

class BaseSection extends Data
{
    public function __construct(
        public ?string $theme,
        public ?BaseSectionPadding $padding,
        public ?BaseBackground $background,
    ) {
    }
}

class BaseSectionPadding extends Data
{
    public function __construct(
        public string $paddingTop = '6xl',
        public string $paddingBottom = '6xl',
    ) {
    }
}