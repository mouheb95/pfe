<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matier;

class MatierController extends Controller
{
    public function index()
    {
    	//
    }
    public function create()
    {
    	return view('matier.create');
    }
     public function store(Request $request)
    {
    	$matiers = $request->all();
    	Matier::create($matiers);
    }



}
