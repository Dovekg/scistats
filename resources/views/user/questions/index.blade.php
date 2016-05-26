@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            所有匿名咨询
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($questions->isEmpty())
                <div class="well text-center">还没有任何匿名咨询！</div>
            @else
                <table class="table table-responsive">
                    <thead>
                    <th>ID</th>
                    <th>创建日起</th>
                    <th colspan="6">操作</th>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>{!! $question->id !!}</td>
                            <td>{!! $question->created_at->diffForHumans() !!}</td>
                            <td>
                                {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('questions.show', [$question->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    {!! Form::button('<i class="fa fa-times">&nbsp;&nbsp;</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('确认删除？')"]) !!}
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
