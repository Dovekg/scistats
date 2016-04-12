@extends('layouts.app')


@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        所有方法
    </div>
    <div class="panel-body">
        <div class="clearfix"></div>

        @if($methods->isEmpty())
            <div class="well text-center">还没创建方法！</div>
        @else
            <table class="table table-responsive">
                <thead>
                    <th>方法名</th>
                    <th>描述</th>
                    <th>价格</th>
                    <th colspan="6">操作</th>
                </thead>
                <tbody>
                @foreach($methods as $method)
                    <tr>
                        <td>{!! $method->name !!}</td>
                        <td>{!! $method->description !!}</td>
                        <td>{!! $method->price !!}</td>
                        <td>
                            {!! Form::open(['route' => ['admin.methods.destroy', $method->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('admin.methods.show', [$method->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                <a href="{!! route('admin.methods.edit', [$method->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
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