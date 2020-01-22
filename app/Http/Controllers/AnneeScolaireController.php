<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnneeScolaire;

class AnneeScolaireController extends Controller
{
    public function index()
    {
    	return view('annee_scolaire.index');
    }
    public function create()
    {
    	return view('annee_scolaire.create');
    }
    public function store(Request $request)
    {
    	$annee = $request->all();
    	AnneeScolaire::create($annee);
    }
    public function update()
    {
    	//
    }
}
