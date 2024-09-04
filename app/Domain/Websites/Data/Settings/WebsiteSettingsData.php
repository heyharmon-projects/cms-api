<?php

namespace DDD\Domain\Websites\Data\Settings;

use Spatie\LaravelData\Data;
use DDD\Domain\Websites\Data\Settings\Navbar\NavbarData;
use DDD\Domain\Websites\Data\Settings\Footer\FooterData;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class WebsiteSettingsData extends Data
{
    public function __construct(
        public ?BaseImage $favicon,
        public ?NavbarData $navbar = new NavbarData(),
        public ?FooterData $footer = new FooterData(),
    ) {}
}