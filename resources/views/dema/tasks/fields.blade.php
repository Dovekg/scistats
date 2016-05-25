
<div class="form-group">
    {!! Form::label('level', '选择需求类型：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        {{-- {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!} --}}
        <label class="level">{!! Form::radio('level', 1, true, ['id' => 'level1']) !!} 统计分析 </label>
        <label class="level">{!! Form::radio('level', 2, false, ['id' => 'level2']) !!} 数据挖掘 </label>
        <label class="level">{!! Form::radio('level', 3, false, ['id' => 'level3']) !!} 结果校验 </label>
    </div>
</div>
<div class="form-group">
    {!! Form::label('methods', '分析方法：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        @foreach ($methods as $key => $method)
            <label>
                <input type="checkbox" name="methods[{{$method->id}}]">&nbsp;&nbsp;
                {{ $method->name }}&nbsp;&nbsp;
            </label>
        @endforeach
        <div style="{{ setVisible('create') }}"><p class="help-block" ><i class="fa fa-exclamation-circle text-info">&nbsp;&nbsp;&nbsp;&nbsp;</i>请重新重新选择方法！</p></div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', '描述：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}
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
        <div style="{{ setVisible('create') }}">
        <p class="help-block" {{ setVisible('create') }}><i class="fa fa-exclamation-circle text-info">&nbsp;&nbsp;&nbsp;&nbsp;</i>若文件有更改，请重新上传！</p>
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('data_file', '需要校验数据文档：', ['class' => 'col-sm-2 col-sm-offset-1 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::file('review_file') !!}
        <div style="{{ setHide('create') }}">
            <p class="help-block"><i class="fa fa-exclamation-circle text-info">&nbsp;&nbsp;&nbsp;&nbsp;</i>若需要校验别处处理的数据，请一并上传！</p>
        </div>
        <div style="{{ setVisible('create') }}">
            <p class="help-block" ><i class="fa fa-exclamation-circle text-info">&nbsp;&nbsp;&nbsp;&nbsp;</i>若文件有更改，请重新上传！</p>
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-3">
        <button class="btn btn-primary"><i class="fa fa-btn fa-save"></i>保存</button>
        <a href="{!! route('dema.tasks.index') !!}" class="btn btn-default">取消</a>
    </div>
</div>
