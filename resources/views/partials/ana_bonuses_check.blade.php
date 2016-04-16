<div class="modal fade ana-bonuses-check-{{$bonuses->id}}" tabindex="-1" role="dialog" aria-labelledby="ana-bonuses-check-modal-small">
    <div class="modal-dialog">
        {!! Form::open(['route' => ['ana.bonuses.check', $bonuses->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ana-bonuses-check-modal-small">提现资金</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                {!! Form::label('check_amount', '提现金额：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('check_amount', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                {!! Form::submit('确认提现', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>