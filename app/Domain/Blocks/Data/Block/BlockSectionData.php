<?php

namespace DDD\Domain\Blocks\Data\Block;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Block\BlockBackgroundData;
use DDD\Domain\Blocks\Data\Block\BlockSectionPaddingData;

class BlockSectionData extends Data
{
    public function __construct(
        public ?string $theme,
        public BlockSectionPaddingData $padding,
        public BlockBackgroundData $background,
    ) {
    }
}