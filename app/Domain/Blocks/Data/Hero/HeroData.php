<?php

namespace DDD\Domain\Blocks\Data\Hero;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\Base\BaseStyles;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class HeroData extends Data
{
    public function __construct(
        public BaseStyles|Optional $styles,
        public BaseContent|Optional $content,
    ) {
    }
}