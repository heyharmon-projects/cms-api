<?php

namespace DDD\Domain\Files;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DDD\App\Traits\BelongsToUser;
use DDD\App\Traits\BelongsToOrganization;

class File extends Model
{
    use BelongsToOrganization,
        BelongsToUser,
        HasFactory;

    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();

        self::deleted(function (File $file) {
            Storage::disk($file->disk)->delete($file->filename);
        });
    }

    public function getStorageUrl()
    {
        return config('cdn.cdn_url') . '/' . $this->filename;
    }
}
