<?php

namespace DDD\Domain\Blocks\Data\Testimonial;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class TestimonialData extends Data
{
    public function __construct(
        public BaseText|Optional $testimonial_quote,
        public BaseText|Optional $testimonial_author,
        public BaseText|Optional $testimonial_extra,
        public BaseImage|Optional $testimonial_image,
        // public ?BaseContent $content,
        public ?BaseWrapper $wrapper,
        
    ) {}
}