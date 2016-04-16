<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scistats</title>

    <!-- Styles -->
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
        <!-- Main Content -->
<div class="container app-splash-screen">
    <!-- Branding / Navigation -->
    <div class="row splash-nav">
        <div class="col-md-10 col-md-offset-1">
            <div class="pull-left splash-brand">
                <i class="fa fa-btn fa-sun-o"></i>Scistats
            </div>

            <div class="navbar-header">
                <button type="button" class="splash-nav-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false" aria-controls="primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    MENU
                </button>
            </div>

            <div id="primary-nav" class="navbar-collapse collapse splash-nav-list">
                <ul class="nav navbar-nav navbar-right inline-list">
                    <!-- <li class="splash-nav-link active"><a href="/features">特色</a></li>
                    <li class="splash-nav-link"><a href="/support">常见问题</a></li> -->
                    @if (Auth::guest())
                        <li class="splash-nav-link splash-nav-link-highlight"><a href="/login">登陆</a></li>
                        <li class="splash-nav-link splash-nav-link-highlight-border"><a href="/register">注册</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-gears"></i>管理界面</a></li>
                                <div class="divider"></div>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>登出</a></li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    
@yield('content')
</div>

<!-- JavaScripts -->
<script src="{{ elixir('js/all.js') }}"></script>
@yield('scripts')
</body>
</html>
