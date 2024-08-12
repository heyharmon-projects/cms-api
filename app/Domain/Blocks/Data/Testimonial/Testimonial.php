<?php

namespace DDD\Domain\Blocks\Data\Testimonial;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class Testimonial extends Data
{
    public function __construct(
        public BaseText|Optional $quote,
        public BaseText|Optional $author,
        public BaseText|Optional $extra,
        public BaseImage|Optional $image,
    ) {}
}