<?php

namespace DDD\Domain\Pages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\Domain\Websites\Website;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     * Website this model belongs to.
     * 
     * @return belongsTo
     */
    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
