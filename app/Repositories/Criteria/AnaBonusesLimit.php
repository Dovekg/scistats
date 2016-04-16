<?php
namespace App\Repositories\Criteria;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Illuminate\Support\Facades\Auth;


class AnaBonusesLimit extends Criteria
{
    public function apply($model, Repository $repository)
    {
        $model = $model->where(['user_id', Auth::user()->id]);
        return $model;
    }
}