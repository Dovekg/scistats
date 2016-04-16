<div class="modal fade ana-re-upload-{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="ana-re-upload-modal-small">
    <div class="modal-dialog">
        {!! Form::open(['route' => ['ana.re.upload', $task->id], 'method' => 'patch', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ana-re-upload-modal-small">重新上传结果文档</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                {!! Form::label('result_file', '结果文档：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::file('result_file') !!}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                {!! Form::submit('确认上传', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>