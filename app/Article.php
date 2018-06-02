<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'subject',
        'hash',
        'description',
        'text',
        'image',
        'show_image',
        'meta_title',
        'meta_description',
        'meta_tags',
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

    public function categories()
    {
        return $this->morphToMany(
            'App\Category',
            'model',
            'category2models');
    }
}
