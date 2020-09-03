<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserRegistrationLog extends Model
{
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
