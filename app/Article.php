<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'published_at'];
    // public scopeを定義
    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }
}
