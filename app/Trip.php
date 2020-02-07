<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public function user() {
        return $this->belongsToMany('App\User');
    }

    public function admin() {
        return $this->belongsTo('App\User', 'admin');
    }

    public function interest() {
        return $this->belongsToMany('App\Interest');
    }

    
}
