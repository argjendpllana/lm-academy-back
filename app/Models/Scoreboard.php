<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scoreboard extends Model
{
    protected $fillable = [
        'user_id','score'
    ];
}
