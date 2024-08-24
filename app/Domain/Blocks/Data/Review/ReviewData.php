<?php

namespace DDD\Domain\Blocks\Data\Review;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Review\Review;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;

class ReviewData extends Data
{
    public function __construct(
        public ?Review $review,
        // public ?BaseContent $content,
        public ?BaseWrapper $wrapper,
        
    ) {}
}