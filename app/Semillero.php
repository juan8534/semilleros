<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    protected $table = "semilleros";

    protected $fillable = ['name','description','user_id'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function groups()
    {
      return $this->belongsToMany('App\Group');
    }
}
