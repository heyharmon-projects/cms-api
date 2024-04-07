<?php

namespace DDD\Domain\Blocks\Data\Block;

use Spatie\LaravelData\Data;

class BlockSectionPaddingData extends Data
{
    public function __construct(
        public string $paddingTop = '6xl',
        public string $paddingBottom = '6xl',
    ) {
    }
}