<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  protected $table = "groups";

  protected $fillable = ['user_id', 'semillero_id'];

  public function user()
  {
    return $this->belongsToMany('App\User');
  }

  public function semillero()
  {
    return $this->belongsToMany('App\Semillero');
  }
}
