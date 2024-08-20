<?php

namespace DDD\Domain\Websites;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\Domain\Websites\Cast\WebsiteSettingsCast;
use DDD\Domain\Pages\Page;
use DDD\Domain\Designs\Design;
use DDD\App\Traits\BelongsToOrganization;

class Website extends Model
{
    use BelongsToOrganization,
        HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'settings' => WebsiteSettingsCast::class,
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function design()
    {
        return $this->belongsTo(Design::class);
    }
}
