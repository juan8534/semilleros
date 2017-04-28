<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //Relacion con documentos
    public function document()
    {
      return $this->hasMany('App\Document');
    }

    //Relacion con semilleros
    public function semillero()
    {
      return $this->hasMany('App\Semillero');
    }

    //Relacion con formatos
    public function format()
    {
      return $this->hasMany('App\Format');
    }


    //Relacion con noticias
    public function news()
    {
      return $this->hasMany('App\New');
    }


    //Relacion con hoja de vida
    public function curriculum()
    {
      return $this->hasMany('App\Curriculum');
    }


    public function group()
    {
      return $this->belongsToMany('App\Group');
    }

    public function admin()
    {
      return $this->type === 'admin';
    }















}
