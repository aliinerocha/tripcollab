<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{

    protected $fillable = ['name','description','photo','departure','return_date','admin','visibility','foreseen_budget'];

    public function user() {
        return $this->belongsToMany('App\User');
    }

    public function admin() {
        return $this->belongsTo('App\User', 'admin');
    }

    public function interest() {
        return $this->belongsToMany('App\Interest');
    }

    public function group() {
        return $this->belongsTo('App\Group', 'group');
    }
}
