<?php

namespace DDD\Domain\Websites;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\App\Traits\BelongsToOrganization;

class Website extends Model
{
    use BelongsToOrganization,
        HasFactory;

    protected $guarded = [
        'id',
    ];
}
