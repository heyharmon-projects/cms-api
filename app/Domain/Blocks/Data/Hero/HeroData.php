<?php

namespace DDD\Domain\Blocks\Data\Hero;

use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Data;
use DDD\Domain\Files\Data\FileData;
use DDD\Domain\Blocks\Data\Base\BaseText;
use DDD\Domain\Blocks\Data\Base\BaseWrapper;
use DDD\Domain\Blocks\Data\Base\BasePadding;
use DDD\Domain\Blocks\Data\Base\BaseImage;
use DDD\Domain\Blocks\Data\Base\BaseHeading;
use DDD\Domain\Blocks\Data\Base\BaseContent;

class HeroData extends Data
{
    public function __construct(
        public ?BaseWrapper $wrapper,
        public ?BaseContent $content,
        public ?BaseImage $image,

        // // Content
        // public string|Optional $alignment,
        // public BaseText|Optional $pretitle,
        // public BaseHeading|Optional $title,
        // public BaseText|Optional $body,
        // public array|Optional $buttons,

        // // Image
        // public FileData|Optional $image,
        // public string|Optional $image_width,
        // public string|Optional $image_height,

        // // Style
        // public string|Optional $theme,
        // public BasePadding|Optional $padding,
        // public FileData|Optional $background_image,
    ) {
        // $this->content_buttons = $content_buttons ?? [];
    }
}