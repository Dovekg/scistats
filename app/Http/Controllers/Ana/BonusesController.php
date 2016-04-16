<?php

namespace App\Http\Controllers\Ana;

use Illuminate\Http\Request;
use App\Repositories\BonusesRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yuansir\Toastr\Facades\Toastr;

class BonusesController extends Controller
{
    protected $repo;

    /**
     * BonusController constructor.
     * @param BonusesRepository $repo
     */
    public function __construct(BonusesRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $bonuses = $this->repo->findBy('user_id', 3);
        $bonuses = $this->repo->findBy('user_id', Auth::user()->id);
//        dd($bonuses);
        return view('ana.bonuses.index', compact('bonuses'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function check(Request $request, $id)
    {
        $bonuses = [];
        $bonuses['check_amount'] = $request->get('check_amount');
        $bonuses['checked'] = true;
        $this->repo->update($bonuses, $id);
        Toastr::success('您的提现正在处理中', '提交成功');
        return redirect()->back();
        
    }

    
}
