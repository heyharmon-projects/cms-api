<?php

namespace DDD\Domain\Websites\Data\Settings\Navbar;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseButton;

class NavbarData extends Data
{
    public function __construct(
        public ?BaseImage $logo = null,
        public ?array $menu = [],
        public ?BaseButton $phone = null,
        public ?BaseButton $cta = null,
    ) {}
}