<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;
class ActualiteController extends Controller
{
    public function show($id)
    {
    	dd(Actualite::findOrFail($id));
    }
}
