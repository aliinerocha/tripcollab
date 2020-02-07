<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicMessage extends Model
{
    public function Topic() {
        return $this->belongsTo('App\Topic');
    }
}
