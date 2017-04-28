<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";

    protected $fillable = ['title', 'note', 'user_id',];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function image()
    {
      return $this->hasMany('App\Image');
    }

    public function scopeSearch($query, $title)
    {
      return $query->where('title', 'LIKE', "%$title%");
    }
    public function scopeSearchDocument($query, $title)
    {
      return $query->where('title', '=', $title);
    }
}
