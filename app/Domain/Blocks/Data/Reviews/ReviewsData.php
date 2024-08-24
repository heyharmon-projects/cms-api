<?php

namespace DDD\Domain\Blocks\Data\Reviews;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Reviews\Review;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;

class ReviewsData extends Data
{
    public function __construct(
        public ?Review $review,
        // public ?BaseContent $content,
        public ?BaseWrapper $wrapper,
        
    ) {}
}