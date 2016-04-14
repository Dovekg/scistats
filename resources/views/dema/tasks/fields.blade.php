
<div class="form-group">
    {!! Form::label('methods', '分析方法：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        <select id="methods-select" multiple="multiple" name="methods[]">
            @foreach ($methods as $method)
                <option value={{$method->id}}>{{$method->name}}</option>
            @endforeach
        </select>
        <p class="help-block"><i class="fa fa-exclamation-circle text-info">&nbsp;&nbsp;&nbsp;&nbsp;</i>新建或修改,都需要重新选择！</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', '描述：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('phone', '联系方式：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('email', '联系邮箱：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('email', Auth::user()->email, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('data_file', '数据文档：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::file('data_file') !!}
        <p class="help-block"><i class="fa fa-exclamation-circle text-info">&nbsp;&nbsp;&nbsp;&nbsp;</i>之前上传过，此处可不必上传重复文件！</p>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">

</div>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-3">
        <button class="btn btn-primary"><i class="fa fa-btn fa-save"></i>保存</button>
        <a href="{!! route('dema.tasks.index') !!}" class="btn btn-default">取消</a>
    </div>
</div>
