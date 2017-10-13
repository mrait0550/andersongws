<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'tblpersonalinformation';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fldUsername', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeDue($query){

        return $query->join('tblmonthlyKWH', 'tblpersonalinformation.fldPersonalInfoID', '=', 'tblmonthlyKWH.fldCustomerID');

    }
}
