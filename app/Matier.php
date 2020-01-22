<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matier extends Model
{
    public $fillable = [
    	'designation','coefficient','description',
    ];
}
