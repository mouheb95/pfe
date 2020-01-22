<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;
use App\Groupe;
use App\Tuteur;
class EleveController extends Controller
{
     public function index()
    {
    	$eleves = Eleve::all();
    	return view('eleve.index',compact('eleves'));
    }
    public function show($id)
    {
    	$eleves = Eleve::whereId($id)->get();
    	return view('eleve.index',compact('eleves'));
    }
    public function create()
    {
        $groupes = Groupe::all();
        return view('eleve.create',compact('groupes'));
    }
    public function store(Request $request)
    {
        $eleve = $request->all();
        Eleve::create($eleve);
    }
     public function profile()
    {
        return view('eleve.profile');
    }
}
