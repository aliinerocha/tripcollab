<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function topicMessage() {
        return $this->hasMany('App\TopicMessage');
    }
}
