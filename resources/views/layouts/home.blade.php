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
    <link rel="stylesheet" type="text/css" href="/css/style.css">


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
                        <img class="hero-illustration" src="/images/home/analye.png" width="460" height="319">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-md-pull-6">
                    <div class="headline">
                        {{-- <h1>Shipping has never been easier.</h1> --}}
                        <p class="lead">Scistats提供了一系列针对科研数据分析的服务。在数据时代，解放你的双手，把费神伤脑的事情交给我们。因我们只擅长做：<strong>数据分析</strong></p>
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

    <section id="what-is">
        <div class="container">
            <div class="what-is-box">
                <div class="row">
                    <div class="col-md-6 about-spark">
                        <h2>
                            强大的任务控制
                        </h2>
                        <p>
                            Scistats初期旨在解决科研过程中的数据管理与分析的问题，让科研人员不再为数据的繁杂、不精确担心！
                        </p>
                        <p>
                            以后，您的数据的收集、管理、协作等一些列需求都可以在Scistats找到对应的工具，从这里开始，从现在开始，您的下一步试验、下一篇文章、下一个病人、还有很多很多。
                            期待我们能为您做的更多！
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="screenshot">
                            <img class="dashboard-screen" src="/images/home/sci-screen.png" width="560" height="438">
                        </div>
                    </div>
                </div>
            </div>
            <div class="save-costs">
                <div class="row">
                    <div class="col-md-9" style="padding-top: 9px;">
                        <div class="main-bene-text">
                            <p class="enough-features">免费的咨询和结果校验，免费的数据存储</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="learn-more-cta">
                            <a class="learn-more-cta-btn" href="/register"><strong>现在就开始</strong></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3>
                        <figure class="icon-1"></figure>
                        多种数据类型
                    </h3>
                    <p>表格、文本、图片、数据库等多种数据，你不用担心数据的类型，只需要直接把数据交给我们，接下来的事情你完全可以袖手旁观。</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>
                        <figure class="icon-2"></figure>
                        数据全程保密
                    </h3>
                    <p>数据的分配严格保密、可追踪，我们有完善的法律机制以保证您的数据不会发生泄漏和窃取，毕竟数据安全使我们的立身之本。</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>
                        <figure class="icon-3"></figure>
                        多层校验
                    </h3>
                    <p>在结果交付您之前，数据分析结果需要经过多层校验，以保证不会出现任何的纰漏，并且完善后续追踪，随时可针对出现的问题进行快熟的补充。</p>
                </div>
            </div>

        </div>

</section>


<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card hovercard">
                   <div class="service bg-color">
                       <span class="service-name">基础分析</span>
                   </div>
                   <div class="info">
                      <p>集中趋势，离散趋势，t检验，卡方检验，方差分析，秩和检验，排列检验，基础统计图形，高级统计图形</p>
                   </div>
                </div>
            </div>
            <div class="col-md-4 splash-customer">
                <div class="card hovercard">
                   <div class="service bg-color">
                       <span class="service-name">高级分析</span>
                   </div>
                   <div class="info">
                      <p>多重线性回归，logistic回归，log-linear模型，Poisson回归，生存分析，决策树模型，时间序列，混合效应模型，GAM模型，灰色预测模型，Meta分析</p>
                   </div>
                </div>
            </div>
            <div class="col-md-4 splash-customer">
                <div class="card hovercard">
                   <div class="service bg-color">
                       <span class="service-name">数据挖掘</span>
                   </div>
                   <div class="info">
                      <p>聚类分析，神经网络，社会网络，因子分析，SEM</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer"><p class="footer-text">Copyright © Scistats.com <br>Website design by <a class="origeno-name" href="http://www.origeno.com">元因科技</a>.</p></section>
