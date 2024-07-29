<?php

namespace DDD\Domain\Blocks\Data\Feature;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\Base\BaseSection;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class FeatureData extends Data
{
    public function __construct(
        public BaseSection|Optional $section,
        public BaseContent|Optional $content,
    ) {
    }
}