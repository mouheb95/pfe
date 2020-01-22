<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\User;
use App\Matier;


class EnseignantController extends Controller
{

    public function index()
    {
        return view('enseignant.profile');
    }
    public function create()
    {
        $enseignants = Enseignant::all();
        $matiers = Matier::all();
        return view('enseignant.create',compact('enseignants','matiers'));
    }
    public function store(Request $request)
    {
        $enseignant= new Enseignant();

        $enseignant->grade = $request->input('grade');
        $enseignant->Signature = random(10000,2000000000000);
        $enseignant->save();
        
    }



}




































































// class EnseignantController extends Controller
// {
//     public function index()
//     {
//     	$enseignants = Enseignant::all();
//     	return view('enseignant.index',compact('enseignants'));
//     }

//     public function show()
//     {
//     	// $enseignant = Enseignant::FindOrFail($id);    	
//     	return view('enseignant.profile');
//     }

//     public function conge()
//     {
              
//         return view('enseignant.conge');
//     }


//     public function create()
//     {
//     	return view('enseignant.create');
//     }

//     public function store(Request $request)
//     {
//         $enseignant= new Enseignant();

//         $enseignant->nom= $request->input('nom');
//         $enseignant->prenom = $request->input('prenom');
//         $enseignant->date_naissance= $request->input('date_naissance');
//         $enseignant->grade = $request->input('grade');
//         $enseignant->image_signature = $request->input('image_signature');


// //  Algorithme Code
//         $date=$request->input('date_naissance');
//         $signature=str_replace("-","",$date);
//         $annee=substr($signature,-8,4);
//         $moin=substr($signature,-4,2);
//         $jour=substr($signature,-2,2);
//         $number_code=Enseignant::select('date_naissance')->where('date_naissance',$date)->get();
//         $nomber=count($number_code)+1;
//         if($nombre<10)
//         $signature=$jour.$moin.$annee."000".$nomber;
//         else if ($nombre>10 && $nombre<100) {
//         $signature=$jour.$moin.$annee."00".$nomber;
//         }
//         else if ($nombre>100 && $nombre<1000) {
//         $signature=$jour.$moin.$annee."0".$nomber;
//         }

// //

//         $enseignant->signature =$signature;

//         $enseignant->save();

//         // $enseignant= $request->all();

//         // Enseignant::create($enseignant);



//     	return view('enseignant.validation',compact('enseignant'));
//     }
    

// }
