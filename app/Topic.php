<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name','description'];
    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function topicMessages() {
        return $this->hasMany('App\TopicMessage');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
