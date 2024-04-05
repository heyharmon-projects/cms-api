<?php

use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public string $group,
        public string $name,
        public int $order,
        // public BlockContent $content,
        // public Carbon $updated_at,
    ) {
    }
}