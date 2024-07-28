<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseHeading;
use DDD\Domain\Blocks\Data\Base\BaseButtonGroup;

class BaseContent extends Data
{
    public function __construct(
        public BaseText|Optional $pretitle,
        public BaseHeading|Optional $title,
        public BaseText|Optional $body,
        public BaseButtonGroup|Optional $buttons,
        public BaseImage|Optional $image,
    ) {
    }
}