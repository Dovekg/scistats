<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Uuids;



class Question extends Model
{
    use Uuids;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $table = 'questions';

    protected $fillable = ['description', 'quantity', 'sample', 'email'];

    public function methods()
    {
        return  $this->morphToMany('App\Models\Method', 'methodable');

    }
}
