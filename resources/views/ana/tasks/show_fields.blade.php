<table class="table table-hover">
    <thead>
    <tr>
        <th>需求属性</th>
        <th>需求内容</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>需求标识符</td>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <td>需求描述</td>
        <td>{{ $task->description }}</td>
    </tr>
    <tr>
        <td>所需方法</td>

        <td>
            @foreach($task->methods as $method)
                <span class="label label-default">{{ $method->name }}</span>
            @endforeach
        </td>
    </tr>
    @unless(!$task->claimed)
        <tr>
            <td>完成状态状态</td>
            <td>
                @if($task->completed)
                    <i class="btn btn-success btn-xs"><i class="fa fa-check">&nbsp;&nbsp;</i>分析已完成，感谢你的辛勤劳动！</i>
                @else
                    <i class="btn btn-info btn-xs"><i class="fa fa-warning">&nbsp;&nbsp;</i>请上传分析结果，完成状态会自动更新！</i>
                @endif
            </td>
        </tr>
        <tr>
            <td>原先数据文档</td>
            @if($task->data_file)
                <td>
                    {{--{!! Form::open(['route' => ['download', $task->data_file], 'method' => 'post']) !!}--}}
                    {{--<button type="submit" class="btn btn-success btn-xs"><i class="fa fa-cloud-download"></i>下载数据文档</button>--}}
                    {{--{!! Form::close() !!}--}}
                    <a href="{{ route('download.data', $task->data_file) }}" class="btn btn-success btn-xs"><i class="fa fa-cloud-download">&nbsp;&nbsp;</i>{{ $task->data_ori_filename }}</a>
                </td>
            @else
                <td>
                    <span class="label label-info"><i class="fa fa-warning">&nbsp;&nbsp;</i>你没有上传任何数据文档</span>
                </td>
            @endif
        </tr>
        <tr>
            <td>需要数据校验文档</td>
            @if($task->review_file)
                <td><a href="{{ route('download.review',$task->review_file) }}" class="btn btn-success btn-xs"><i class="fa fa-cloud-download">&nbsp;&nbsp;</i>{{ $task->review_ori_filename }}</a></td>
            @else
                <td>
                    <span class="label label-info"><i class="fa fa-warning">&nbsp;&nbsp;</i>你没有上传任何数据文档</span>
                </td>
            @endif
        </tr>
        <tr>
            {{--TODO: add file download function--}}
            <td>结果数据文档</td>
            @if($task->result_file)
                <td>
                    {{--{!! Form::open(['route' => ['download', $task->result_file], 'method' => 'post']) !!}--}}
                    {{--<button type="submit" class="btn btn-success btn-xs"><i class="fa fa-cloud-download"></i>下载结果文档</button>--}}
                    {{--{!! Form::close() !!}--}}
                    <a href="{{ route('download.result', $task->result_file) }}" class="btn btn-success btn-xs"><i class="fa fa-cloud-download">&nbsp;&nbsp;</i>{{ $task->result_ori_filename }}</a>
                </td>
            @else
                <td>
                    {!! Form::open(['route' => ['ana.tasks.finish', $task->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                    {!! Form::file('result_file') !!}
                    {!! Form::button('<i class="fa fa-cloud-upload">&nbsp;&nbsp;&nbsp;&nbsp;</i>上传并且确认完成', ['type' => 'submit', 'class' => 'btn btn-info btn-xs pull-right', 'onclick' => "return confirm('确认完成？')"]) !!}
                    {!! Form::close() !!}
                </td>
            @endif
        </tr>
    @endunless
    </tbody>
</table>