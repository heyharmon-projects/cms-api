<?php

namespace DDD\Domain\Blocks;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\Domain\Pages\Page;
use DDD\Domain\Blocks\Traits\BlockOrderableTrait;

class Block extends Model
{
    use HasFactory,
        BlockOrderableTrait;

    protected $guarded = [
        'id',
    ];

    /**
     * Page this block belongs to.
     * 
     * @return belongsTo
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
