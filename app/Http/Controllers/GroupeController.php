<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveau;
use App\Groupe;
use App\Eleve;

class GroupeController extends Controller
{
    public function create()
    {
    	$niveaux = Niveau::all();
    	return view('groupe.create',compact('niveaux'));
    }
    public function store(Request $request)
    {
    	$groupe = $request->all();
    	Groupe::create($groupe);
    }
    public function show($id)
    {
        $eleves = Eleve::where('groupe_id',$id)->get();
        return view('groupe.show',compact('eleves'));
    }
}
