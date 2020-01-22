<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    protected $fillable = [
       'nom','prenom','national_strategie','enseignant_id','ancien_post_travail','nouveau_post_travail','date_fin','date_debut','periode','annee_scolaire_id','jours_non_ouvert','telephone','code_postale','emplacement_vacance','certification','date_ecrire','emplacement_ecrire','signature'
    ];
    public function AnneeScolaire()
    {
    	return $this->belongsTo('App\AnneScolaire');
    }
    public function Enseignant()
    {
    	return $this->belongsTo('App\Enseignant');
    }
}
