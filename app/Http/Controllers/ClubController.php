<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubController extends Controller
{
    public function index()
    {
    	$clubs = Club::all();     	
    	return view('clubs.index',compact('clubs'));
    }
    public function create()
    {
    	return view('clubs.create');
    }
    public function store(Request $request)
    {

    	$clubs =  $request->all();
    	Club::create($clubs);
    }

}
