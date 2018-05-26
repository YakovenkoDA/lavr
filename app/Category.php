<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'title',
        'hash',
        'parent_id',
        'status',
        'created_by',
        'updated_by',
    ];

    public function setHashAttribute($value)
    {
        $this->attributes['hash'] = Str::slug(
            mb_substr($this->title, 0, 40) .'-' . \Carbon\Carbon::now()->format('dmyHi'),
            '-'
        );
    }

    public function getChildren()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
}
