<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicMessage extends Model
{
    protected $fillable = ['message'];

    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likeTopicMessages()
    {
        return $this->hasMany('App\LikeTopicMessage');
    }
}
