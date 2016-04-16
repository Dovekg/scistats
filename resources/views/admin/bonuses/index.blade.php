@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            所有分析员平台
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($bonuses->isEmpty())
                <div class="well text-center">还没用户拥有资产！</div>
            @else
                <table class="table table-responsive">
                    <thead>
                    <th>用户名</th>
                    <th>总资产</th>
                    <th>剩余资产</th>
                    <th>未到账资产</th>
                    <th>提现状态</th>
                    <th>提现资产</th>
                    <th colspan="6">操作</th>
                    </thead>
                    <tbody>
                    @foreach($bonuses as $bonus)
                        <tr>
                            <td>{!! $bonus->user->name !!}</td>
                            <td>{!! $bonus->all !!}</td>
                            <td>{!! $bonus->left !!}</td>
                            <td>{!! $bonus->pending !!}</td>
                            @if( $bonus->checked )
                                <td><button class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;&nbsp;</i>提交提现</button></td>
                                <td>{!! $bonus->check_amount !!}</td>
                            @else
                                <td><button class="btn btn-default btn-xs"><i class="fa fa-check">&nbsp;&nbsp;</i>未提交提现</button></td>
                                <td>0</td>
                            @endif

                            <td>
                                {!! Form::open(['route' => ['admin.bonuses.destroy', $bonus->id], 'bonus' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.bonuses.edit', [$bonus->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                    {!! Form::button('<i class="fa fa-times"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('确认删除？')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>

@endsection