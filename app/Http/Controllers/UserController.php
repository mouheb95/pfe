<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Enseignant;
use App\Groupe;
use App\EnseignantGroupe;

use App\Tuteur;
use App\Eleve;

class UserController extends Controller
{
    public function show($id)
    {   
        // ** to be sure that's his account ** \\
    	$user = User::whereId($id)->first();
        if($user->id != Auth::user()->id)
            dd('woops something wrong');
        // ** end test ** \\

        else
        {

            if(Auth::user()->role_id == 3)
                {
                   
                    $enseignant = Enseignant::where('user_id',$id)->first();

                    $groupes_enseignants = EnseignantGroupe::where('enseignant_id',$enseignant->id)->get();
                    // dd($groupes_enseignant->groupe);

                    // ** determiner la designation de group_id ** \\
                    // $tab_designation = array();
                    // $i=0;
                    // foreach($groupes as $groupe)
                    // {
                    //     $tab_designation[$i] = Groupe::where('id',$groupe->groupe_id)->first();
                    //     $i++;
                    // }

                    return view('user.show',compact('user','enseignant','groupes_enseignants'));
                // ** end verification entre table ens_mat est user_id ** \\
                }
                else if(Auth::user()->role_id == 4)
                {$eleves = null;
                    {
                        $tuteur = Tuteur::where('user_id',$id)->first();
                        if ($tuteur) 
                        {
                            $eleves = Eleve::where('tuteur_id',$tuteur->id)->get(); 
                        }
                        
                    }
                    return view('user.show',compact('user','eleves'));
                }

    
        }
        	
    }
}
