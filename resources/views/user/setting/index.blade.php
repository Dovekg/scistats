@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            修改密码
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => ['setting.change.password', Auth::user()->id], 'method'=> 'patch', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('password', '新密码：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
                <div class="col-sm-5">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('confirm_password', '确认新密码：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
                <div class="col-sm-5">
                    {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-3">
                    <button class="btn btn-primary"><i class="fa fa-btn fa-save"></i>保存</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            修改用户名
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => ['setting.change.username', Auth::user()->id], 'method'=> 'patch', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('username', '新用户名：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
                <div class="col-sm-5">
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-3">
                    <button class="btn btn-primary"><i class="fa fa-btn fa-save"></i>保存</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    @stop