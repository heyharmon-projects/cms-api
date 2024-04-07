<?php

namespace DDD\Domain\Blocks\Data\Block\Section;

use Spatie\LaravelData\Data;
use DDD\Domain\Files\Data\FileData;

class SectionBackground extends Data
{
    public function __construct(
        public ?FileData $file,
        public bool $overlay = false,
    ) {
    }
}