<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseTextData;
use DDD\Domain\Blocks\Data\Base\BaseHeadingData;
use DDD\Domain\Blocks\Data\Base\BaseFileData;
use DDD\Domain\Blocks\Data\Base\BaseButtonGroupData;

class BaseContentData extends Data
{
    public function __construct(
        public BaseTextData $pretitle,
        public BaseHeadingData $title,
        public BaseTextData $body,
        public BaseButtonGroupData $buttons,
        public BaseFileData $image,
    ) {
    }
}