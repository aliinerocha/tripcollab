<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activityLog extends Model
{
    /* Relationships */

    public function notifications() {
        return $this->belongsTo('App\Notification');
    }

}
