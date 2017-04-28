<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table = "images";

  protected $fillable = ['name', 'document_id'];


  //Relacion con docuemntos
  public function document()
  {
    return $this->belongsTo('App\Document');
  }

}
