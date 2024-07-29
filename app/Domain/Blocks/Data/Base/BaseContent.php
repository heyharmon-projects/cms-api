<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseImageGroup;
use DDD\Domain\Blocks\Data\Base\BaseHeading;
use DDD\Domain\Blocks\Data\Base\BaseButtonGroup;

class BaseContent extends Data
{
    /**
     * @property \DDD\Domain\Blocks\Data\Base\BaseButton[] $buttons
     * @property \DDD\Domain\Blocks\Data\Base\BaseImage[] $images
     */
    public function __construct(
        public BaseText|Optional $pretitle,
        public BaseHeading|Optional $title,
        public BaseText|Optional $body,
        public ?array $buttons,
        public ?array $images,
    ) {
        $this->buttons = $buttons ?? [];
        $this->images = $images ?? [];
    }
}