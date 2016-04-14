@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            查看需求详情
        </div>
        <div class="panel-body">
                @include('dema.tasks.show_fields')
        </div>
    </div>

    @stop