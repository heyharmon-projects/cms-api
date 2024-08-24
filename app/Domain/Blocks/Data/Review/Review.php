<?php

namespace DDD\Domain\Blocks\Data\Review;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class Review extends Data
{
    public function __construct(
        public BaseText|Optional $quote,
        public BaseText|Optional $author,
        public BaseText|Optional $extra,
        public BaseImage|Optional $image,
    ) {}
}