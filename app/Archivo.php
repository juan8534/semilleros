<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected  $table = "archivos";

    protected $fillable = ['name', 'format_id'];

    //Relacion con formatos
    public function format()
    {
      return $this->belongsTo('App\Format');
    }
}
