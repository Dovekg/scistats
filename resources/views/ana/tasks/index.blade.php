@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            所有任务
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($tasks->isEmpty())
                <div class="well text-center">还没有可供领取需求！</div>
            @else
                <table class="table table-responsive">
                    <thead>
                    <th>需求识别码</th>
                    <th>方法要求</th>
                    <th>创建日期</th>
                    <th>查看需求</th>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{!! $task->id !!}</td>
                            <td>
                                @foreach($task->methods as $method)
                                    <span class="label label-default">{{ $method->name }}</span>
                                @endforeach
                            </td>
                            <td>{!! $task->created_at !!}</td>
                            <td>
                                <a href="{!! route('ana.tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                            </td>

                            {{--<td>--}}
                                {{--{!! Form::open(['route' => ['ana.task.complete', $task->id], 'method' => 'patch']) !!}--}}
                                {{--<div class='btn-group'>--}}
                                    {{--<a href="{!! route('tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>--}}
                                    {{--<a href="{!! route('tasks.edit', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>--}}
                                    {{--{!! Form::button('<i class="fa fa-times"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('确认完成？')"]) !!}--}}
                                {{--</div>--}}
                                {{--{!! Form::close() !!}--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>

@endsection