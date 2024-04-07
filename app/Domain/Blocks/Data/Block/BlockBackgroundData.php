<?php

namespace DDD\Domain\Blocks\Data\Block;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseFileData;

class BlockBackgroundData extends Data
{
    public function __construct(
        public ?BaseFileData $file,
        public bool $overlay = false,
    ) {
    }
}