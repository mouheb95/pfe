<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = [
    	'nom','prenom','grade','signature','date_naissance','image_signature','user_id',
    ];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
