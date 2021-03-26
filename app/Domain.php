<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    //



    public function account(){
        return $this->hasOne('App\Account','id','id_account');

    }
    
    public function client(){
        return $this->hasOne('App\Client','id','id_client');

    }
}
