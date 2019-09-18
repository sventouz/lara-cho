<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = ['title', 'body', 'published_at'];
  //
  public function getTitleAttribute($value)
  {
    return mb_strtoupper($value);
  }
  // 小文字に変換
  public function setTitleAttribute($value)
  {
    $this->attribute['title'] = mb_strtolower($value);
  }
  // 日付ミューテータを使う
  protected $dates = ['published_at'];
}
