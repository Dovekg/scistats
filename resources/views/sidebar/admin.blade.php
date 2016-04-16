<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        内容管理
    </div>
    <div class="panel-body">
        <div class="app-tabs">
            <ul class="nav app-tabs-stacked">
                <li>
                    <a href="{{ route('admin.tasks.all') }}">
                        <i class="fa fa-btn fa-fw fa-list"></i>&nbsp;审核任务
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.methods.index') }}">
                        <i class="fa fa-btn fa-fw fa-puzzle-piece"></i>&nbsp;管理方法
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}">
                        <i class="fa fa-btn fa-fw fa-users"></i>&nbsp;管理用户
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        资金管理
    </div>
    <div class="panel-body">
        <div class="app-tabs">
            <ul class="nav app-tabs-stacked">
                <li>
                    <a href="{{ route('admin.pays.index') }}">
                        <i class="fa fa-btn fa-fw fa-puzzle-piece"></i>&nbsp;管理支付账户
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.bonuses.index') }}">
                        <i class="fa fa-btn fa-fw fa-check"></i>&nbsp;提现管理
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>