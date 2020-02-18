<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name','description','admin','visibility'];

    public function user() {
        return $this->belongsToMany('App\User');
    }

    public function admin() {
        return $this->belongsTo('App\User', 'admin');
    }

    public function interest() {
        return $this->belongsToMany('App\Interest');
    }

    public function topic() {
        return $this->hasMany('App\Topic');
    }

    public function trips() {
        return $this->hasMany('App\Trip');
    } // Adicionado posteriormente
}
