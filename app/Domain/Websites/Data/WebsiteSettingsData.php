<?php

namespace DDD\Domain\Websites\Data;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class WebsiteSettingsData extends Data
{
    public function __construct(
        public ?string $title,
        public ?string $description,
        public ?BaseImage $logo,
        public ?BaseImage $favicon,
    ) {
    }
}