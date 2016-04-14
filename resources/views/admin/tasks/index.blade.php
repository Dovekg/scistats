@extends('layouts.app')


@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        所有任务
    </div>
    <div class="panel-body">
        <div class="clearfix"></div>

        @if($tasks->isEmpty())
            <div class="well text-center">还没有人创建任务！</div>
        @else
            <table class="table table-responsive">
                <thead>
                    <th>用户邮箱</th>
                    <th>类别</th>
                    <th>预算</th>
                    <th>是否付款</th>
                    <th>创建日期</th>
                    <th>下发</th>
                    <th colspan="6">操作</th>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{!! $task->user->email !!}</td>
                        <td>{!! $task->level !!}</td>
                        <td>{!! $task->budged !!}</td>
                        <td>
                            @if($task->paid)
                                <i class="btn btn-success"><i class="fa fa-check"></i>已付清</i>
                            @else
                                <i class="btn btn-danger"><i class="fa fa-spark"></i>未付款</i>
                            @endif
                        </td>
                        <td>{!! $task->created_at !!}</td>
                        <td>
                        @if (!$task->verified)
                            {!! Form::open(['route' => ['admin.task.confirm', $task->id], 'method' => 'post']) !!}
                                {!! Form::button('<i class="fa fa-rocket"></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('确认下发？')"]) !!}
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['route' => ['admin.task.confirm', $task->id], 'method' => 'post']) !!}
                                {!! Form::button('<i class="fa fa-rocket"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('确认撤销下发？')"]) !!}
                            {!! Form::close() !!}
                        @endif
                        </td>
                        <td>
                            {!! Form::open(['route' => ['admin.task.destroy', $task->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                {{--<a href="{!! route('tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>--}}
                                {{--<a href="{!! route('tasks.edit', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>--}}
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