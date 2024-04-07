<?php

namespace DDD\Domain\Blocks\Data\CallToAction;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\Section\Section;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class CallToActionData extends Data
{
    public function __construct(
        public ?Section $section,
        public ?BaseContent $content,
    ) {
    }
}