<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public function trip() {
        return $this->belongsToMany('App\Trip');
    }

    public function group() {
        return $this->belongsToMany('App\Group');
    } 

    

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
