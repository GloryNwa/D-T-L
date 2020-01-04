<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    private $table = "tapes";
   


    function items (){
        return $this->hasMany("App\Tape");
    }
    //
}
