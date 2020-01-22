<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnseignantMatier extends Model
{
    protected $fillable = [
    	'enseignant_id','matier_id',
    ];
}
