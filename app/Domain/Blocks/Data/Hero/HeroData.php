<?php

namespace DDD\Domain\Blocks\Data\Hero;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class HeroData extends Data
{
    public function __construct(
        public ?BaseWrapper $wrapper,
        public ?BaseContent $content,
        public ?BaseImage $image,
    ) {}
}