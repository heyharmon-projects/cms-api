<?php

namespace DDD\Domain\Blocks\Data\Testimonial;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Testimonial\Testimonial;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;

class TestimonialData extends Data
{
    public function __construct(
        public ?Testimonial $testimonial,
        // public ?BaseContent $content,
        public ?BaseWrapper $wrapper,
        
    ) {}
}