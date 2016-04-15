@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            已领取任务
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($tasks->isEmpty())
                <div class="well text-center">还没有可供领取需求！</div>
            @else
                <table class="table table-responsive">
                    <thead>
                    <th>需求识别码</th>
                    <th>操作</th>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{!! $task->id !!}</td>
                            <td>
                                <a href="{!! route('ana.tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i>查看/下载/更新</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>

@endsection