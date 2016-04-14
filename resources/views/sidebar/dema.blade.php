<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        任务页面
    </div>
    <div class="panel-body">
        <div class="app-tabs">
            <ul class="nav app-tabs-stacked">
                <li class="{{ setActive('dema/tasks') }}">
                    <a href="{{ route('dema.tasks.index')}}">
                        <i class="fa fa-btn fa-fw fa-list"></i>&nbsp;管理任务</span>
                    </a>
                </li>
                <li class="{{ setActive('dema/tasks/create') }}">
                    <a href="{{ route('dema.tasks.create')}}">
                        <i class="fa fa-btn fa-fw fa-file-excel-o"></i>&nbsp;创建新任务
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>