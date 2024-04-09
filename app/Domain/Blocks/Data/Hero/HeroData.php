<?php

namespace DDD\Domain\Blocks\Data\Hero;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\Base\BaseSection;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class HeroData extends Data
{
    public function __construct(
        public ?BaseSection $section,
        public ?BaseContent $content,
    ) {
    }
}