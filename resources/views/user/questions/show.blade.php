@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            查看匿名需求
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>问题属性</th>
                    <th>问题内容</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>任务ID</td>
                    <td>{{ $question->id }}</td>
                </tr>
                <tr>
                    <td>问题描述</td>
                    <td>{{ $question->description }}</td>
                </tr>
                <tr>
                    <td>所需方法</td>

                    <td>
                        @foreach($question->methods as $method)
                            <span class="label label-info">{{ $method->name }}</span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>数据量</td>
                    <td>
                        {{ $question->quantity }}
                    </td>
                </tr>
                <tr>
                    <td>数据样表</td>
                    @if($question->sample)
                        <td>
                            <a href="{{ route('download.sample', $question->sample) }}" class="btn btn-success btn-xs"><i class="fa fa-cloud-download">&nbsp;&nbsp;</i>下载样表</a>
                        </td>
                    @else
                        <td>
                            <span class="label label-default"><i class="fa fa-warning">&nbsp;&nbsp;</i>你没有上传任何数据文档</span>
                        </td>
                    @endif
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@stop