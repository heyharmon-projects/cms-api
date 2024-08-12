<?php

namespace DDD\Domain\Blocks\Data\Columns;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;
use DDD\Domain\Blocks\Data\Base\BaseImage;
// use DDD\Domain\Blocks\Data\Base\BaseContentCollection;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class ColumnsData extends Data
{
    /**
     * Deignate collections of data objects
     * @property ColumnsItemData[] $collection
     */
    public function __construct(
        public ?array $columns,
        public ?BaseWrapper $wrapper,
        public ?BaseContent $content,
    ) {}
}