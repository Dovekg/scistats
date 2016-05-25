<div class="modal fade anony-question" tabindex="-1" role="dialog" aria-labelledby="anony-question-modal-small">
    <div class="modal-dialog">
        {!! Form::open(['route' => ['questions.store'], 'method' => 'post', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="anony-question-modal-small">匿名咨询</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                {!! Form::label('method', '需求方法：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                            
                                <div class="col-sm-8">
                                    @foreach ($methods as $key => $method)
                                        <label>
                                            <input type="checkbox" name="methods[{{$method->id}}]">&nbsp;&nbsp;
                                            {{ $method->name }}&nbsp;&nbsp;
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', '数据描述：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('quantity', '数据量：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('sample', '数据样表：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::file('sample') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', '邮箱：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            

                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                {!! Form::submit('确认提交', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>
