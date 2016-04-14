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
        return $this->belongsToMany('App\Models\Task');
    }
}