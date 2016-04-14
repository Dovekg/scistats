@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            所有任务
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($tasks->isEmpty())
                <div class="well text-center">还没有创建任何任务！</div>
            @else
                <table class="table table-responsive">
                    <thead>
                    <th>需求标识符</th>
                    <th>类别</th>
                    <th>预算</th>
                    <th>是否付款</th>
                    <th>创建日期</th>
                    <th colspan="6">操作</th>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{!! $task->id !!}</td>
                            <td>{!! $task->level !!}</td>
                            <td>{!! $task->budged !!} 元</td>
                            <td>
                                @if($task->paid == 3)
                                    <i class="btn btn-success btn-xs"><i class="fa fa-check"></i>已付清</i>
                                @elseif($task->paid == 2)
                                    <i class="btn btn-info btn-xs"><i class="fa fa-circle-o-notch"></i>确认中</i>
                                @else
                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target=".dema-pay-modal-{{$task->id}}"><i class="fa fa-credit-card"></i>去支付</button>
                                    @include('partials.dema-pay-modal')
                                @endif
                            </td>
                            <td>{!! $task->created_at->diffForHumans() !!}</td>
                            <td>
                                {!! Form::open(['route' => ['dema.tasks.destroy', $task->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('dema.tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    <a href="{!! route('dema.tasks.edit', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
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


@stop