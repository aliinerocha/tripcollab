<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    protected $fillable = [
        'requester_user_id',
        'requested_user_id',
        'status'
    ];
}
