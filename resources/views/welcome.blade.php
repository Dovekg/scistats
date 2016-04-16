@extends('layouts.default')

@section('content')



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
                    <img src="/images/home/analye.png" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Heading -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1 splash-row-heading">
            服务保障
        </div>
    </div>

    <!-- Feature Icons -->
    <div class="row splash-features-icon-row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-image">
                    <img src="/images/home/analyzis-01.png">
                </div>

                <div class="splash-feature-heading">
                    反馈及时
                </div>

                <div class="splash-feature-text">
                    有网络的地方就有我们的身影
                </div>
            </div>

            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-image">
                    <img src="/images/home/analyzis-02.png">
                </div>

                <div class="splash-feature-heading">
                    数据保密
                </div>

                <div class="splash-feature-text">
                    客户的数据安全是我们的立身之本
                </div>
            </div>

            <div class="col-md-4 splash-features-feature">
                <div class="splash-feature-image">
                    <img src="/images/home/analyzis-03.png">
                </div>

                <div class="splash-feature-heading">
                    多层校验
                </div>

                <div class="splash-feature-text">
                    每一份报告都经过严格的质量把关
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1 splash-row-heading">
            服务内容
        </div>
    </div>
    <div class="row splash-customer-row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="col-md-4">
                    <div class="card hovercard">
                       <div class="service bg-green">
                           <span class="service-name">基础分析</span>
                       </div>
                       <div class="info">
                          <p>集中趋势，离散趋势，t检验，卡方检验，方差分析，秩和检验，排列检验，基础统计图形，高级统计图形</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 splash-customer">
                    <div class="card hovercard">
                       <div class="service bg-yellow">
                           <span class="service-name">高级分析</span>
                       </div>
                       <div class="info">
                          <p>多重线性回归，logistic回归，log-linear模型，Poisson回归，生存分析，决策树模型，时间序列，混合效应模型，GAM模型，灰色预测模型，Meta分析</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 splash-customer">
                    <div class="card hovercard">
                       <div class="service bg-red">
                           <span class="service-name">数据挖掘</span>
                       </div>
                       <div class="info">
                          <p>聚类分析，神经网络，社会网络，因子分析，SEM</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>



    <!-- Footer -->
    <div class="row">
        <!-- Company Information -->
        <div class="col-md-10 col-md-offset-1 splash-footer">
            <div class="pull-left splash-footer-company">
                Copyright © - Scistats 2016</a>
            </div>

            <!-- Social Icons -->
            <!-- <div class="pull-right splash-footer-social-icons">
                <a href="http://facebook.com">
                    <i class="fa fa-btn fa-facebook-square"></i>
                </a>
                <a href="http://twitter.com">
                    <i class="fa fa-btn fa-twitter-square"></i>
                </a>
                <a href="http://github.com">
                    <i class="fa fa-github-square"></i>
                </a>
            </div> -->

            <div class="clearfix"></div>
        </div>
    </div>


@endsection
