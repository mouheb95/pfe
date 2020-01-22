<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
   protected $fillable = [
   		'nom','prenom','avatar','tuteur_id','groupe_id','date_naissance',
   ];

    public function tuteur()
    {
    	return $this->belongsTo('App\Tuteur');
    }
    public function groupe()
    {
    	return $this->belongsTo('App\Groupe');
    }
}
