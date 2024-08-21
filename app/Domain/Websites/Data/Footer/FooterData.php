<?php

namespace DDD\Domain\Websites\Data\Footer;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class FooterData extends Data
{
    public function __construct(
        public ?BaseImage $logo = null,
        public ?array $menu = [],
    ) {}
}