<?php

namespace DDD\Domain\Designs\Data\Themes;

use Spatie\LaravelData\Data;

class ThemePropertiesData extends Data
{
    public function __construct(
        public ?string $wrapperBg,
        public ?string $pretitleColor,
        public ?string $titleColor,
        public ?string $textColor,
        public ?string $btnPrimaryBg,
        public ?string $btnPrimaryText,
        public ?string $btnSecondaryBg,
        public ?string $btnSecondaryText,
        public ?string $btnSimpleText,
    ) {}
}