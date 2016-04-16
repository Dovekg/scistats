@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            资金状况
        </div>
        <div class="panel-body">
            <div class="clearfix"></div>

            @if($bonuses)
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>账目</th>
                        <th>金额</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>至今总收入</td>
                        <td>{{ $bonuses->all . '.00' }}</td>
                    </tr>
                    <tr>
                        <td>剩余可提现</td>
                        <td>{{ $bonuses->left . '.00' }}</td>
                    </tr>
                    <tr>
                        <td>任务未到账资金</td>
                        <td>{{ $bonuses->pending . '.00' }}</td>
                    </tr>
                    <tr>
                        <td>提现状态</td>
                        @if($bonuses->checked)
                            <td>
                                <button class="btn btn-warning btn-xs"><i class="fa fa-warning">&nbsp;&nbsp;</i>提现处理中</button>
                            </td>
                        @else
                            <td>
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target=".ana-bonuses-check-{{$bonuses->id}}"><i class="fa fa-check-circle-o">&nbsp;&nbsp;</i>提现资金</button>
                                @include('partials.ana_bonuses_check')
                            </td>
                        @endif
                    </tr>
                    </tbody>
                </table>
            @else
                <div class="well text-center">还没有可供领取需求！</div>
            @endif
    </div>

@endsection