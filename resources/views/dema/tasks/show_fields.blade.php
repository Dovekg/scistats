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
                    <span class="label label-info">{{ $method->name }}</span>
                @endforeach
            </td>

        </tr>
        <tr>
            <td>付费状态</td>
            <td>
                @if($task->paid == 3)
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i>已付清</button>
                @elseif($task->paid == 2)
                    <button class="btn btn-info btn-xs"><i class="fa fa-circle-o-notch"></i>确认中</button>
                @else
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target=".dema-pay-modal-{{$task->id}}"><i class="fa fa-credit-card">&nbsp;&nbsp;</i>去支付</button>
                    @include('partials.dema-pay-modal')
                @endif
            </td>
        </tr>
        <tr>
            <td>认领状态</td>
            <td>
                @if($task->claimed)
                    <i class="label label-success btn-xs"><i class="fa fa-check">&nbsp;&nbsp;</i>已有分析人员认领</i>
                @else
                    <i class="label label-default btn-xs"><i class="fa fa-warning">&nbsp;&nbsp;</i>还未有人认领任务</i>
                @endif
            </td>
        </tr>
        <tr>
            <td>完成状态状态</td>
            <td>
                @if($task->claimed)
                    <i class="label label-success btn-xs"><i class="fa fa-check">&nbsp;&nbsp;</i>恭喜你，已完成，请注意查收邮箱或在本页面下载结果文档！</i>
                @else
                    <i class="label label-default btn-xs"><i class="fa fa-warning">&nbsp;&nbsp;</i>很抱歉，分析人员还在努力分析中！</i>
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
                    <span class="label label-default"><i class="fa fa-warning">&nbsp;&nbsp;</i>你没有上传任何数据文档</span>
                </td>
            @endif
        </tr>
        <tr>
            <td>需要数据校验文档</td>
            @if($task->review_file)
                <td><a href="{{ route('download.review',$task->review_file) }}" class="btn btn-success btn-xs"><i class="fa fa-cloud-download">&nbsp;&nbsp;</i>{{ $task->review_ori_filename }}</a></td>
            @else
                <td>
                    <span class="label label-default"><i class="fa fa-warning">&nbsp;&nbsp;</i>你没有上传任何数据文档</span>
                </td>
            @endif
        </tr>
        <tr>
            <td>结果数据文档</td>
            @if($task->result_file)
                <td>
                    <a href="{{ route('download.result', $task->result_file) }}" class="btn btn-success btn-xs"><i class="fa fa-cloud-download">&nbsp;&nbsp;</i>{{ $task->result_ori_filename }}</a>
                </td>
            @else
                <td>
                    <span class="label label-default"><i class="fa fa-warning">&nbsp;&nbsp;</i>再给我一些时间完善结果</span>
                </td>
            @endif
        </tr>

    </tbody>
</table>