<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeTopicMessage extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function topicMessage()
    {
        return $this->belongsTo('App\TopicMessage');
    }
}
