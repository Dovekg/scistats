<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    use Uuids;
    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $table = 'tasks';

    protected $casts = [
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}