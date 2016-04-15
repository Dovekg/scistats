@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">用户中心</div>

        <div class="panel-body">
            @if(Auth::user()->role == 'demander')
                你现在就可以提交你的需求信息，并且通过侧边栏进行管理&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('dema.tasks.create')}}" class="btn btn-success btn-sm"><i class="fa fa-hand-o-right">&nbsp;&nbsp;</i>点击新建分析需求</a>
            @else
                登陆管理中心成功，你可以在侧边栏进行业务管理
            @endif
        </div>
    </div>
@endsection
