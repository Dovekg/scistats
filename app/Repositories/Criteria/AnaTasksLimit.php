<?php
namespace app\Repositories\Criteria;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;


class AnaTasksLimit extends Criteria
{
    public function apply($model, Repository $repository)
    {
        $model = $model->where(['verified' => true, 'claimed' => false]);
        return $model;
    }
}