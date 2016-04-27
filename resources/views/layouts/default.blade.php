<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scistats</title>

    <!-- Styles -->
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body id="app-layout">
        <!-- Main Content -->
<div class="container app-splash-screen">
    <!-- Branding / Navigation -->
    <div class="row splash-nav">
        <div class="col-md-10 col-md-offset-1">
            <div class="pull-left" style="width: 25%;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/home/logo.png" style="width: 100%;">
                </a>
            </div>
            <div class="navbar-header">
                <button type="button" class="splash-nav-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false" aria-controls="primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    导航
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
                        <li class="splash-nav-link splash-nav-link-highlight-border"><a href="/home">管理页面</a></li>
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
