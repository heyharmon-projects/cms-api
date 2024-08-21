<?php

namespace DDD\Domain\Websites\Data;

use Spatie\LaravelData\Data;
use DDD\Domain\Websites\Data\Navbar\NavbarData;
use DDD\Domain\Websites\Data\Footer\FooterData;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class WebsiteSettingsData extends Data
{
    public function __construct(
        public ?string $title,
        public ?string $description,
        public ?BaseImage $favicon,
        public ?NavbarData $navbar = new NavbarData(),
        public ?FooterData $footer = new FooterData(),
    ) {}
}