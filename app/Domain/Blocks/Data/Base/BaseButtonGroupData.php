<?php

namespace DDD\Domain\Blocks\Data\Base;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseButtonData;

class BaseButtonGroupData extends Data
{
    /** @var BaseButtonData[] */
    public array $buttons;

    // public function __construct(
    //     public array $buttons,
    // ) {
    // }
}