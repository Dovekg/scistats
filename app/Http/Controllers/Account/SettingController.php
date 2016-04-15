<?php

namespace App\Http\Controllers\Account;

use App\Repositories\UsersRepository;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yuansir\Toastr\Facades\Toastr;

class SettingController extends Controller
{

    protected $user;
    /**
     * SettingController constructor.
     */
    public function __construct(UsersRepository $user)
    {
        $this->user = $user;
    }

    public function getIndex()
    {
        return view('user.setting.index');
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function changePassword(Request $request, $id)
    {
        $password = $request->get('password');
        $confirm = $request->get('confirm_password');
        if($password == $confirm){
            $this->user->update(['password' => bcrypt($password)], $id);
            Toastr::success('用户密码修改成功，现在你可以用心密码登陆！', '恭喜！');
            Auth::guard()->logOut();
        }
        else {
            Toastr::error('两次输入的密码不一样，请重新输入！', '出现错误');
            return redirect()->back();
        }
        return redirect(url('/login'));
    }

    public function changeUsername(Request $request, $id)
    {
        $username = $request->get('username');
        $this->user->update(['name' => $username], $id);
        Toastr::success('用户名更新成功', '恭喜！');

        return redirect()->back();
    }
}
