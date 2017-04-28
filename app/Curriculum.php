<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = "curriculums";

    protected $fillable = ['name','document_number','birthdate','country','city','addres','phone_number',
                            'email','profile','user_id'];

    //Relacion con usuarios
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
