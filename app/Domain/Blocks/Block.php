<?php

namespace DDD\Domain\Blocks;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\Domain\Pages\Page;
use DDD\Domain\Blocks\Cast\BlockDataCast;
use DDD\App\Traits\IsSortable;

class Block extends Model
{
    use HasFactory,
        IsSortable;

    protected $guarded = [
        'id',
    ];

    /**
     * The query used when sorting page blocks.
     *
     * @return Collection
     */
    public function buildSortQuery()
    {
        return static::query()
            ->where('page_id', $this->page->id)
            ->orderBy('order')
            ->get();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'data' => BlockDataCast::class,
    ];

    /**
     * Point to the data object class for the blocks 'data' column.
     * 
     * @return string
     */
    public function dataClass()
    {
        return 'DDD\\Domain\\Blocks\\Data\\' . Str::studly($this['group']) . '\\' . Str::studly($this['group']) . 'Data';
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
