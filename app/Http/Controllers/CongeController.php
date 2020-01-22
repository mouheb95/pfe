<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notifications\RepliedToThread;
use App\Enseignant;
use App\User;

use App\Conge;

class CongeController extends Controller
{
        public function store(Request $request, Conge $conge_request){
        
        $conge_request= $request->all();
        
        $image_signature=Enseignant::select('image_signature')->where('signature',$request->signature)->first();
        $image_signature=$image_signature->image_signature;
        if($image_signature)
        {

            $conges = Conge::create($conge_request);
            $admin= User::where('role_id','1')->first();
          
             $admin->notify(new RepliedToThread($conges));     
           
           
            return view('conge.index',compact('conges','image_signature'));

        }
        else 

        return redirect()->back()->withInput();


        

    }
 
     public function show($id){
         
        $conges= Conge::where('id',$id)->first();
        dd($conges);
        
        $code=$conges->signature;
        
        $image_signature=Enseignant::select('image_signature')->where('signature',$code)->first();
        $image_signature=$image_signature->image_signature;
       

        return view('conge.index',compact('conges','image_signature'));
    }
    public function create()
    {
        return view('conge.create');
    }
   
    
}
