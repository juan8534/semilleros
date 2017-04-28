<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = "news";

    protected $fillable = ['titulo', 'content', 'user_id'];

    //Relacion con usuarios
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
