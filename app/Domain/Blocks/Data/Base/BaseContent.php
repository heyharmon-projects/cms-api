<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseHeading;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseButtonGroup;

class BaseContent extends Data
{
    public function __construct(
        public ?BaseText $pretitle,
        public ?BaseHeading $title,
        public ?BaseText $body,
        public ?BaseButtonGroup $buttons,
        public ?BaseImage $image,
    ) {
    }
}