<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Scistats</title>
        <!-- Styles -->
        <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/market.css">
        <link rel="stylesheet" type="text/css" href="/css/minimal/minimal.css">
    </head>
    <body>
        <section id="header">
            <div class="top-bar"></div>
            <div class="container">
                <a class="logo" href="/"></a>
                <nav class="navbar">
                    <ul class="nav-links">
                        {{-- <li><a href="/login"><strong>Login</strong></a></li>
                        <li><a href="/register"><strong>Register</strong></a></li>
                        <li><a href="/docs"><strong>Documentation</strong></a></li> --}}
                        @if (Auth::guest())
                        <li><button class="btn btn-primary" data-toggle="modal" data-target=".anony-question"><span class="text-question">匿名咨询</span></button></li>
                        <li><a href="/login"><strong>登陆</strong></a></li>
                        <li><a href="/register"><strong>注册</strong></a></li>
                        @else
                        <li><a href="/home"><strong>管理页面</strong></a></li>
                        @endif
                    </ul>
                </nav>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-md-push-6">
                        <div class="hero">
                            <img class="hero-illustration" src="/images/home/analye.png" width="460">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-md-pull-6">
                        <div class="headline">
                            {{-- <h1>Shipping has never been easier.</h1> --}}
                            <p class="lead">Scistats初期旨在解决科研过程中的数据管理与分析的问题，让科研人员不再为数据的繁杂、不精确担心。把费神伤脑的<strong color="text-danger">统计分析</strong>交给Scistats</p>
                        </div>
                        <div class="main-cta">
                            <a class="get-started-cta" href="/home">
                                <div class="get-started-cta-btn"><i class="fa fa-paper-plane-o">&nbsp;&nbsp;</i><strong>立即开始体验</strong></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white-fade"></div>
        </section>
        @yield('content')
        @include('partials.anony_question')
        <section id="footer"><p class="footer-text">Copyright © Scistats.com <br>Website design by <a class="origeno-name" href="http://www.origeno.com">元因科技</a>.</p></section>
        <script src="{{ elixir('js/all.js') }}"></script>
        <script type="text/javascript" src="/js/icheck.min.js"></script>
        {!! Toastr::render() !!}
        <script type="text/javascript">
            $(document).ready(function(){
                $('input').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal',
                    increaseArea: '20%' // optional
                    });
                });
        </script>
    </body>
</html>