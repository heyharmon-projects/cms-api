<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class BaseContentCollection extends Data
{
    public function __construct(
        public ?BaseContent $content,
    ) {}
}