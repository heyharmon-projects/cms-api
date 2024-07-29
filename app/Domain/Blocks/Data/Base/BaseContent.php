<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseHeading;
use DDD\Domain\Blocks\Data\Base\BaseButton;

class BaseContent extends Data
{
    /**
     * Deignate collections of data objects
     * @property BaseButton[] $buttons
     */
    public function __construct(
        public BaseText|Optional $pretitle,
        public BaseHeading|Optional $title,
        public BaseText|Optional $body,
        public BaseImage|Optional $image,
        public ?array $buttons,
        
    ) {
        // Mutate empty values
        $this->buttons = $buttons ?? [];
    }
}