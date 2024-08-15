<?php

namespace DDD\Domain\Designs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\Domain\Designs\Cast\DesignDataCast;
use DDD\App\Traits\BelongsToOrganization;

class Design extends Model
{
    use HasFactory,
        BelongsToOrganization;

    protected $guarded = [
        'id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'data' => DesignDataCast::class,
    ];
}
