<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug','avatar','annee_scolaire_id','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tuteur()
    {
        return $this->HasOne('App\Tuteur');
    }   
    public function anneeScolaire()
    {
        return $this->belongsTo('App\AnneeScolaire');
    }   
    // public function role()
    // {
    //     return $this->belongsTo('App\Role');
    // }  
}
