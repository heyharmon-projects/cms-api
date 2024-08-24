<?php

namespace DDD\Domain\Blocks\Data\Columns;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class Column extends Data
{
    public function __construct(
        public ?BaseContent $content,
        public ?BaseImage $image,
    ) {}
}