<?php

namespace DDD\Domain\Pages\Data;

use Spatie\LaravelData\Data;
use DDD\Domain\Blocks\Data\Base\BaseImage;

class PageSettingsData extends Data
{
    public function __construct(
        public ?string $meta_title,
        public ?string $meta_description,
        public ?BaseImage $meta_image,
    ) {}
}