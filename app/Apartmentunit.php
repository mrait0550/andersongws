<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartmentunit extends Model
{
    // protected $table = 'tblapartmentunit';
    protected $table = 'tbladdress';

    public function scopeCuslist($query){

        // return $query->join('tblcompanyrepresentative', 'tblapartmentunit.fldApartmentID', '=', 'tblcompanyrepresentative.fldCompanyID')
        // 			 ->join('tblpersonalinformation', 'tblapartmentunit.fldpersonalinfoid', '=', 'tblpersonalinformation.fldPersonalInfoID');

        return $query->join('tblcompany', 'tbladdress.fldCompanyID', '=', 'tblcompany.fldCompanyID')
        			 ->join('tblcustomer', 'tbladdress.fldAccountID', '=', 'tblcustomer.fldCustomerID')
        			 ->join('tblpersonalinformation', 'tblcustomer.fldCustomerID', '=', 'tblpersonalinformation.fldPersonalInfoID');

    }
}
