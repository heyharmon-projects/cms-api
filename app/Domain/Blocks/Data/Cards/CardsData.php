<?php

namespace DDD\Domain\Blocks\Data\Cards;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class CardsData extends Data
{
    /**
     * Deignate collections of data objects
     * @property CardsItemData[] $collection
     */
    public function __construct(
        public ?array $columns,
        public ?BaseWrapper $wrapper,
        public ?BaseContent $content,
    ) {}
}