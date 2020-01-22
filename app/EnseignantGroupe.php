<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnseignantGroupe extends Model
{
    protected $fillable = [
    	'enseignant_id','groupe_id',
    ];
    public function enseignant()
    {
    	return $this->belongsTo('App\Enseignant');
    }
    public function groupe()
    {
    	return $this->belongsTo('App\Groupe');
    }
}
