<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuteur;

class TuteurController extends Controller
{
    public function index()
    {
    	$tuteurs = Tuteur::all();
    	return view('parent.index',compact('tuteurs'));
    }
    public function show($id)
    {
    	return view('parent.profile');
    }
}
