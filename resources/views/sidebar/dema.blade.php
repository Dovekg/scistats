<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        任务页面
    </div>
    <div class="panel-body">
        <div class="app-tabs">
            <ul class="nav app-tabs-stacked">
                <li class="{{ setActive('dema/tasks') }}">
                    <a href="{{ route('dema.tasks.index')}}">
                        <i class="fa fa-btn fa-fw fa-tasks"></i>&nbsp;需求管理</span>
                    </a>
                </li>
                <li class="{{ setActive('dema/tasks/create') }}">
                    <a href="{{ route('dema.tasks.create')}}">
                        <i class="fa fa-btn fa-fw fa-file-excel-o"></i>&nbsp;新需求
                    </a>
                </li>
                <li class="{{ setActive('setting') }}">
                    <a href="{{ route('setting')}}">
                        <i class="fa fa-btn fa-fw fa-lock"></i>&nbsp;账号管理
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>