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
            mb_substr($this->title, 0, 40) .'-' . Carbon::now()->format('dmyHi'),
            '-'
        );
    }

    public function getChildren()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function getArticles()
    {
        return $this->morphedByMany(
            'App\Article',
            'model',
            'category2models'
        );
    }

    public function scopeLastCategories($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
