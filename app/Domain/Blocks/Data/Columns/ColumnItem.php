<?php

namespace DDD\Domain\Blocks\Data\Columns;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class ColumnItem extends Data
{
    public function __construct(
        public ?BaseContent $content,
    ) {}
}