@extends('layouts.default')

@section('content')

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
                    <li class="splash-nav-link active"><a href="/features">特色</a></li>
                    <li class="splash-nav-link"><a href="/support">常见问题</a></li>
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

    <!-- Inspiration -->
    <div class="row splash-inspiration-row">
        <div class="col-md-4 col-md-offset-1">
            <div id="splash-inspiration-heading">
                快速准确的分析服务！
            </div>

            <div id="splash-inspiration-text">
                Scistats针对科研数据提供一整套的分析解决方案，而通过这个平台你可以与我们更进一步的沟通以让我们能够给你更好的服务！
            </div>
        </div>

        <!-- Browser Window -->
        <div class="col-md-6" class="splash-browser-window-container">
            <div class="splash-browser-window">
                <div class="splash-browser-dots-container">
                    <ul class="list-inline splash-browser-dots">
                        <li><i class="fa fa-circle red"></i></li>
                        <li><i class="fa fa-circle yellow"></i></li>
                        <li><i class="fa fa-circle green"></i></li>
                    </ul>
                </div>
                <div>
                    <img src="https://placehold.co/550x400" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Heading -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1 splash-row-heading">
            你可能会感到欣喜的地方
        </div>
    </div>

    <!-- Feature Icons -->
    <div class="row splash-features-icon-row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-icon">
                    <i class="fa fa-lock"></i>
                </div>

                <div class="splash-feature-heading">
                    及时反馈
                </div>

                <div class="splash-feature-text">
                    从提交到确认到分析，流水线一样顺畅
                </div>
            </div>

            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-icon">
                    <i class="fa fa-money"></i>
                </div>

                <div class="splash-feature-heading">
                    数据加密
                </div>

                <div class="splash-feature-text">
                    数据在传输的过程中绝不会出现泄漏和被滥用
                </div>
            </div>

            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-icon">
                    <i class="fa fa-phone"></i>
                </div>

                <div class="splash-feature-heading">
                    多渠道服务
                </div>

                <div class="splash-feature-text">
                    无论是分析要有还是支付渠道，我们都为您匹配最优解
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Icons -->
    <div class="row splash-features-icon-row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-icon">
                    <i class="fa fa-users"></i>
                </div>

                <div class="splash-feature-heading">
                    严格把关
                </div>

                <div class="splash-feature-text">
                    在数据分析员水平和最终结果把关上我们力争不出一丝差错
                </div>
            </div>

            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-icon">
                    <i class="fa fa-cubes"></i>
                </div>

                <div class="splash-feature-heading">
                    后顾无忧
                </div>

                <div class="splash-feature-text">
                    分析后我们仍旧为分析报告提供长达一个月的后续服务
                </div>
            </div>

            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-icon">
                    <i class="fa fa-clock-o"></i>
                </div>

                <div class="splash-feature-heading">
                    网络化统筹
                </div>

                <div class="splash-feature-text">
                    一改原先的机动繁杂，现在我们借助互联网一条龙服务
                </div>
            </div>
        </div>
    </div>



    <!-- Customers Heading -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1 splash-row-heading">
            我们的顾客如是说
        </div>
    </div>

    <!-- Customer Testimonials -->
    <div class="row splash-customer-row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="col-md-4 splash-customer">
                <div class="splash-customer-avatar">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/msurguy/128.jpg">
                </div>

                <div class="splash-customer-quote">
                    This is an inspiring testimonial about your application.
                </div>

                <div class="splash-customer-identity">
                    <div class="splash-customer-name">Maksim Surguy</div>
                    <div class="splash-customer-title">CEO, Company</div>
                </div>
            </div>

            <div class="col-md-4 splash-customer">
                <div class="splash-customer-avatar">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">
                </div>

                <div class="splash-customer-quote">
                    This is an inspiring testimonial about your application.
                </div>

                <div class="splash-customer-identity">
                    <div class="splash-customer-name">Allison Grayce</div>
                    <div class="splash-customer-title">CEO, Company</div>
                </div>
            </div>

            <div class="col-md-4 splash-customer">
                <div class="splash-customer-avatar">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/richcsmith/128.jpg">
                </div>

                <div class="splash-customer-quote">
                    This is an inspiring testimonial about your application.
                </div>

                <div class="splash-customer-identity">
                    <div class="splash-customer-name">Rich Smith</div>
                    <div class="splash-customer-title">CEO, Company</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="row">
        <!-- Company Information -->
        <div class="col-md-10 col-md-offset-1 splash-footer">
            <div class="pull-left splash-footer-company">
                Copyright © - <a href="/terms">Terms Of Service</a>
            </div>

            <!-- Social Icons -->
            <div class="pull-right splash-footer-social-icons">
                <a href="http://facebook.com">
                    <i class="fa fa-btn fa-facebook-square"></i>
                </a>
                <a href="http://twitter.com">
                    <i class="fa fa-btn fa-twitter-square"></i>
                </a>
                <a href="http://github.com">
                    <i class="fa fa-github-square"></i>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>


@endsection
