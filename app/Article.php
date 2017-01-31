<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model
{
    // @var string
    protected $table = 'articles';

    //@var array
    protected $fillable = ['title', 'body', 'published_at'];

    // published_at で日付ミューテーターを使う
    //protected $dates = ['published_at'];

    public function getTitleAttribute($value)
    {
        // 大文字に変換
        return mb_strtoupper($value);
    }

    public function setBodyAttribute($value){
        //小文字に変換
        $this->attributes['body'] = mb_strtolower($value);
    }

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

}
