<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /* Relationships */

    public function users() {
        return $this->belongsToMany('App\User');
    }

    public function activities() {
        return $this->hasOne('App\activityLog');
    }
}
