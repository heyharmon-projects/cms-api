<?php

namespace DDD\Domain\Designs\Data\Themes;

use Spatie\LaravelData\Data;

class ThemeVariablesData extends Data
{
    public function __construct(
        public ?string $wrapperBg = null,
        public ?string $pretitleColor = null,
        public ?string $titleColor = null,
        public ?string $textColor = null,
        public ?string $btnPrimaryBg = null,
        public ?string $btnPrimaryText = null,
        public ?string $btnSecondaryBg = null,
        public ?string $btnSecondaryText = null,
        public ?string $btnSimpleText = null,
    ) {}
}