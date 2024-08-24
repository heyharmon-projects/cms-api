<?php

namespace DDD\Domain\Blocks\Data\Cards;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class Card extends Data
{
    public function __construct(
        public ?BaseContent $content,
        public ?BaseImage $image,
        public string|Optional $theme,
        public bool|Optional $overlay,
    ) {}
}