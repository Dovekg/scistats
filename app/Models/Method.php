<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Method extends Model {

    protected $primaryKey = 'id';

    protected $table = 'methods';

    protected $casts = [
    ];

    

    public function tasks()
    {
        return $this->morphedByMany('App\Models\Tasks', 'methodable');
    }


    public function questions()
    {
        return $this->morphedByMany('App\Models\Question', 'methodable');
    }
}
