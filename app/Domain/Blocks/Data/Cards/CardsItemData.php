<?php

namespace DDD\Domain\Blocks\Data\Cards;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class CardsItemData extends Data
{
    public function __construct(
        public ?BaseContent $content,
        public ?BaseImage $image,
    ) {}
}