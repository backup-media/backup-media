<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


    public function expiration(){
        return \Carbon\Carbon::parse($this->date_expire)->diffForHumans();
        
    }
    //
}
