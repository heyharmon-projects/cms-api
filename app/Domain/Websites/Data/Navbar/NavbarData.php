<?php

namespace DDD\Domain\Websites\Data\Navbar;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class NavbarData extends Data
{
    public function __construct(
        public ?BaseImage $logo = null,
        public ?array $menu = [],
    ) {}
}