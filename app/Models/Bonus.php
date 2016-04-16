<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $casts = [
    ];
}
