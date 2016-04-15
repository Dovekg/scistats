@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            查看需求详情
        </div>
        <div class="panel-body">
            @include('ana.tasks.show_fields')
            {!! Form::open(['route' => ['ana.tasks.claim', $task->id], 'method' => 'patch']) !!}
            @if($task->claimed)
                {!! Form::button('<i class="fa fa-lock">&nbsp;&nbsp;&nbsp;&nbsp;</i>取消领取', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('取消领取？')"]) !!}
            @else
                {!! Form::button('<i class="fa fa-unlock">&nbsp;&nbsp;&nbsp;&nbsp;</i>领取任务', ['type' => 'submit', 'class' => 'btn btn-info', 'onclick' => "return confirm('确认领取？')"]) !!}
            @endif
            {!! Form::close() !!}
        </div>
    </div>

@stop