<div class="modal fade dema-pay-modal-{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="dema-pay-modal-small">
    <div class="modal-dialog">
        {!! Form::open(['route' => ['dema.tasks.pay', $task->id], 'method' => 'post', 'class' => 'form-horizontal']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="dema-pay-modal-small">付款确认页面</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                                <div class="form-group">
                                    {!! Form::label('pay_method', '支付方法：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                    <div class="col-sm-7">
                                        @foreach($pays as $pay)
                                            {!! Form::radio('pay_method', $pay->id, ['class' => 'form-control']) !!} <span>{{$pay->method . ' : ' . $pay->account}}</span></br>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('pay_account', '支付账号：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('pay_account', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('require_invoice', '索要发票：', ['class' => 'col-sm-3 col-sm-offset-1 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::checkbox('require_invoice', 1, null) !!}
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                {!! Form::submit('提交付款信息', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>