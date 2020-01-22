<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $fillable = [
    	'designation','niveau_id',
    ];

   public function eleve()
   {
   		$this->hasOne('App\Eleve');
   }
}
