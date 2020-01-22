<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnseignantMatier;
use App\Matier;
use App\Enseignant;

class EnseignantMatierController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
    	$enseignants = Enseignant::all();
    	$matiers = Matier::all();
    	return view('enseignant.create',compact('enseignants','matiers'));
    }
    public function store(Request $request)
    {
    	$matier_enseignant = $request->all();
    	EnseignantMatier::create($matier_enseignant);
    }
}
