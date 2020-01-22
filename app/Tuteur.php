<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
	protected $fillable = [
		'user_id','travail','nationalite','etat_civil',
	];
     public function user()
    {
    	return $this->belongsTo('App\User');
    }	
}
