<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $table = "formats";

    protected $fillable = ['title', 'note', 'user_id'];

    //Relacion con usuarios
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    //Relacion con Archivos
    public function archivo()
    {
      return $this->hasMany('App\Archivo');
    }

    public function scopeSearch($query, $title)
    {
      return $query->where('title', 'LIKE', "%$title%");
    }
    public function scopeSearchFormat($query, $title)
    {
      return $query->where('title', '=', $title);
    }
}
