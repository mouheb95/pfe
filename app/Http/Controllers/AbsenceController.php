<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notifications\RepliedToThread;
use App\Enseignant;
use App\Absence;

// use App\Conge;

class AbsenceController extends Controller
{
        /*public function demande_conge(Request $request, Conge $conge){
        
        $conge= $request->all();
        
        $image_signature=Enseignant::select('image_signature')->where('signature',$request->code)->first();
        
        if($image_signature)
        {

            $conges = Conge::create($conge);
            auth()->user()->notify(new RepliedToThread($conge));     
            $image_signature=$image_signature->image_signature;
            return view('enseignant.validate_conge',compact('conges','image_signature'));

        }
        else 

        return redirect()->back()->withInput();

    }*/
 /*
     public function show($id){
         
        $conge= Conge::where('id_enseig',$id)->first();
        
        $code=$conge->code;
        
        $image_signature=Enseignant::select('image_signature')->where('signature',$code)->first();
        $image_signature=$image_signature->image_signature;
      

        return view('absence.index',compact('conge','image_signature'));
    }*/

    public function create()
    {
        return view('absence.create');
    }
    public function store(Request $request)
    {
        $demande_conge = $request->all();
        Absence::create($demande_conge);        
    }
}
