<?php

namespace DDD\Domain\Websites;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\Domain\Pages\Page;
use DDD\App\Traits\BelongsToOrganization;

class Website extends Model
{
    use BelongsToOrganization,
        HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     * Pages associated with this website.
     *
     * @return hasMany
     */
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
