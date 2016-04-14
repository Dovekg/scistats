<div class="panel panel-default panel-flush">
    <div class="panel-heading">
        管理员页面
    </div>
    <div class="panel-body">
        <div class="app-tabs">
            <ul class="nav app-tabs-stacked">
                <li>
                    <a href="{{ route('admin.tasks.all') }}">
                        <i class="fa fa-btn fa-fw fa-list"></i>&nbsp;审核任务
                    </a>
                    <a href="{{ route('admin.methods.index') }}">
                        <i class="fa fa-btn fa-fw fa-list"></i>&nbsp;审核方法
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>