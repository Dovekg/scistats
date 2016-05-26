<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        任务管理
    </div>
    <div class="panel-body">
        <div class="app-tabs">
            <ul class="nav app-tabs-stacked">
                <li>
                    <a href="{{ route('ana.tasks.all') }}">
                        <i class="fa fa-btn fa-fw fa-list"></i>&nbsp;查看需求信息
                    </a>
                </li>
                <li>
                    <a href="{{ route('questions.all') }}">
                        <i class="fa fa-btn fa-fw fa-list"></i>&nbsp;查看匿名咨询
                    </a>
                </li>
                <li>
                    <a href="{{ route('ana.tasks.claimed') }}">
                        <i class="fa fa-btn fa-fw fa-list fa-folder-open"></i>&nbsp;查看已领取需求
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        账户管理
    </div>
    <div class="panel-body">
        <div class="app-tabs">
            <ul class="nav app-tabs-stacked">
                <li>
                    <a href="{{ route('ana.bonuses.index') }}">
                        <i class="fa fa-btn fa-fw fa-money "></i>&nbsp;资金池
                    </a>
                </li>
                <li>
                    <a href="{{ route('setting') }}">
                        <i class="fa fa-btn fa-fw fa-user "></i>&nbsp;网站账号
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>