<?php

namespace DDD\Domain\Blocks\Data\Block\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\Base\BaseBackground;

class BaseSection extends Data
{
    public function __construct(
        public string|Optional $theme,
        public BaseSectionPadding|Optional $padding,
        public BaseBackground|Optional $background,
    ) {
    }
}

class BaseSectionPadding extends Data
{
    public function __construct(
        public string|Optional $paddingTop,
        public string|Optional $paddingBottom,
    ) {
    }
}