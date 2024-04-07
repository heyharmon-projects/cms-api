<?php

namespace DDD\Domain\Blocks\Data\Hero;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\BlockSectionData;
use DDD\Domain\Blocks\Data\Base\BaseTextData;
use DDD\Domain\Blocks\Data\Base\BaseHeadingData;
use DDD\Domain\Blocks\Data\Base\BaseFileData;
use DDD\Domain\Blocks\Data\Base\BaseButtonGroupData;

class HeroData extends Data
{
    public function __construct(
        public ?BlockSectionData $section,
        public ?BaseTextData $pretitle,
        public ?BaseHeadingData $title,
        public ?BaseTextData $body,
        public ?BaseButtonGroupData $buttons,
        public ?BaseFileData $image,
    ) {
    }
}