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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
	        $('input').iCheck({
	            checkboxClass: 'icheckbox_minimal',
	            radioClass: 'iradio_minimal',
	            increaseArea: '20%' // optional
	            });
	        });

    </script>
@stop