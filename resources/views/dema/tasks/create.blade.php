@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            创建新任务
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'dema.tasks.store', 'method' => 'post', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
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
                allSelectedText: '所有方法',
                enableFiltering: true,
                maxHeight: 400,
                templates: {
                    filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
                    filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default multiselect-clear-filter" type="button"><i class="fa fa-times"></i></button></span>'
                }
            });
        });

    </script>
@stop
