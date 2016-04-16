@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            所有用户
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($users->isEmpty())
                <div class="well text-center">还没用户注册！</div>
            @else
                <table class="table table-responsive">
                    <thead>
                    <th>用户名</th>
                    <th>邮箱</th>
                    <th>角色</th>
                    <th>注册日期</th>
                    <th colspan="6">操作</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{!! $user->name !!}</td>
                            <td>{!! $user->email !!}</td>
                            <td>{!! $user->role !!}</td>
                            <td>{!! $user->created_at !!}</td>
                            <td>
                                {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'user' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    <a href="{!! route('admin.users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
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