<?php

namespace DDD\Domain\Blocks;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\Domain\Pages\Page;
use DDD\Domain\Blocks\Traits\BlockOrderableTrait;
use DDD\Domain\Blocks\Data\BlockData;

class Block extends Model
{
    use HasFactory,
        BlockOrderableTrait;

    protected $guarded = [
        'id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'data' => BlockData::class,
    ];

    /**
     * Point to the data object class for the blocks 'data' column.
     * 
     * @return string
     */
    public function dataClass()
    {
        return 'DDD\\Domain\\Blocks\\Data\\' . Str::studly($this['group']) . '\\' . Str::studly($this['name']) . 'Data';
    }

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
