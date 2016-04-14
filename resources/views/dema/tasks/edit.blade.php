@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            修改需求
        </div>
        <div class="panel-body">
            {!! Form::model($task, ['route' => ['dema.tasks.update', $task->id], 'method' => 'patch', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
            @include('dema.tasks.fields')
            {!! Form::close() !!}
        </div>
    </div>

@stop
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#methods-select').multiselect({
                nonSelectedText: '选择你希望用到的方法，可多选',
                allSelectedText: '所有方法'
            });
        });

    </script>
@stop