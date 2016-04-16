@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            所有支付账号
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($pays->isEmpty())
                <div class="well text-center">还没创建支付账号！</div>
            @else
                <table class="table table-responsive">
                    <thead>
                    <th>方法名</th>
                    <th>描述</th>
                    <th>价格</th>
                    <th colspan="6">操作</th>
                    </thead>
                    <tbody>
                    @foreach($pays as $pay)
                        <tr>
                            <td>{!! $pay->logo !!}</td>
                            <td>{!! $pay->method !!}</td>
                            <td>{!! $pay->account !!}</td>
                            <td>
                                {!! Form::open(['route' => ['admin.pays.destroy', $pay->id], 'pay' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{!! route('admin.pays.show', [$pay->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    <a href="{!! route('admin.pays.edit', [$pay->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
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