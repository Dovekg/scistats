<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        分析员页面
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
                    <a href="{{ route('ana.tasks.claimed') }}">
                        <i class="fa fa-btn fa-fw fa-list fa-folder-open"></i>&nbsp;查看已领取需求
                    </a>
                </li>
                <li>
                    <a href="{{ route('ana.tasks.finished') }}">
                        <i class="fa fa-btn fa-fw fa-folder"></i>&nbsp;查看已完成需求
                    </a>
                </li>
                <li>
                    <a href="{{ route('ana.bonus.index') }}">
                        <i class="fa fa-btn fa-fw fa-money "></i>&nbsp;资金池
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>