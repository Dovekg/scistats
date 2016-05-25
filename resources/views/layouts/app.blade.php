<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scistats--善析</title>

    <!-- Styles -->
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" type="text/css" href="/css/minimal/minimal.css">


</head>
<body id="app-layout" class="with-navbar">
<div class="top-bar"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/home/sci-logo.png" style="height: 32px;">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">主页</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::user())'
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
        </div>
    </nav>

    <div class="container app-screen">
        <div class="col-sm-3">
            @if(Auth::guest())
                @include('sidebar.auth')
            @elseif(Auth::user()->role == 'admin')
                @include('sidebar.admin')
            @elseif(Auth::user()->role == 'analyzer')
                @include('sidebar.ana')
            @elseif(Auth::user()->role == 'demander')
                @include('sidebar.dema')
            @endif

        </div>
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScripts -->
    <script src="{{ elixir('js/all.js') }}"></script>
    <script type="text/javascript" src="/js/icheck.min.js"></script>
    {!! Toastr::render() !!}
    @yield('scripts')
</body>
</html>
