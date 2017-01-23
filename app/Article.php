<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // @var string
    protected $table = 'articles';

    //@var array
    protected $fillable = ['title', 'body', 'published_at'];

    public function getTitleAttribute($value)
    {
        // 大文字に変換
        return mb_strtoupper($value);
    }

    public function setBodyAttribute($value){
        $this->attributes['title'] = mb_strtolower($value);
    }

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

}