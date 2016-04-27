<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scistats</title>

    <!-- Styles -->
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/market.css">

</head>
<body>
    <section id="header">
        <div class="top-bar"></div>
        <div class="container">
            <a class="logo" href="/"></a>
            <nav class="navbar">
                <ul class="nav-links">
                    <li><a href="/login"><strong>Login</strong></a></li>
                    <li><a href="/register"><strong>Register</strong></a></li>
                    <li><a href="/docs"><strong>Documentation</strong></a></li>
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
                        <p class="lead">Spark provides the perfect starting point for your next big idea. Forget all the boilerplate and focus on what matters: <strong>your application.</strong></p>
                    </div>
                    <div class="main-cta">
                        <a class="get-started-cta" href="/home">
                            <div class="get-started-cta-btn"><strong>立即开始体验</strong></div>
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
                            Superhero Scaffolding.
                        </h2>
                        <p>
                            Spark is a Laravel package that provides scaffolding for all of the stuff you don't want to code. Subscription billing? We got that.
                            Invoices? No problem.
                        </p>
                        <p>
                            We even take care of authentication, password reset, team billing, two-factor authentication, profile
                            photos, and more. It's the perfect starting point for your next big idea.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="screenshot">
                            <img class="dashboard-screen" src="/images/home/spark-screen.png" width="560" height="438">
                        </div>
                    </div>
                </div>
            </div>
            <div class="save-costs">
                <div class="row">
                    <div class="col-md-9" style="padding-top: 9px;">
                        <div class="main-bene-text">
                            <p class="enough-features">Just $99 Per Site. $299 For Unlimited Sites.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="learn-more-cta">
                            <a class="learn-more-cta-btn" href="/register"><strong>Download For $99</strong></a>
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
                        Authentication
                    </h3>
                    <p>Authentication, registration, and password reset are ready out of the box. It’s never been faster to get started building your dreams.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>
                        <figure class="icon-2"></figure>
                        Subscriptions
                    </h3>
                    <p>Subscription billing without the hassle. Offer monthly and yearly plans with Stripe or Braintree. Define plans using expressive code and get started building what matters: your business.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>
                        <figure class="icon-3"></figure>
                        Teams
                    </h3>
                    <p>Allow your users to create, join, and invite other users to their teams without writing a single line of code. Spending weeks of writing boilerplate is so last year.</p>
                </div>
            </div>

        </div>

</section>


{{-- <section id="laravel">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 quote-centre">
                <div class="hand-built">
                    <h3 class="hand-built-title">
                        Hand Crafted By Laravel's Creator
                    </h3>
                    <div class="taylor-quote">
                        <p>I built Spark because I have a passion for building great web applications and helping others do the same. I've poured my heart into making sure Spark gives your next big idea the solid foundation it deserves.</p>
                    </div>
                    <div class="taylor-info clearfix">
                        <div class="taylor-avatar"></div>
                        <div class="taylor-name-title">
                            <div class="taylor-name">Taylor Otwell</div>
                            <div class="taylor-title">Creator of Laravel &amp; Spark</div>
                        </div>
                        <ul class="social">
                            <li><a href="http://twitter.com/laravelphp" class="social-link icon-twitter" target="_blank"><img height="24" src="/img/marketing/icon-twitter.png" alt="Twitter"></a></li>
                            <li><a href="http://github.com/laravel/laravel" class="social-link icon-github" target="_blank"><img height="24" src="/img/marketing/icon-github.png" alt="Github"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 ecosystem">
                <h3 class="ecosystem-title">
                    The Laravel Ecosystem
                </h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="eco-logos">
                            <a href="https://laravel.com">
                            <img class="laravel-logo eco-logo" src="/img/marketing/logo-laravel.png" width="200" height="60">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="eco-logos">
                            <a href="https://forge.laravel.com">
                            <img class="laravel-logo eco-logo" src="/img/marketing/logo-forge.png" width="200" height="60">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="eco-logos">
                            <a href="https://envoyer.io">
                            <img class="laravel-logo eco-logo" src="/img/marketing/logo-envoyer.png" width="200" height="60">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section id="footer"><p class="footer-text">Laravel is a trademark of Taylor Otwell. Copyright © Taylor Otwell. <br>Website design by <a class="taylor-name" href="http://www.steveschoger.com">Steve Schoger</a>.</p></section>

{{-- <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
<!-- JavaScripts -->
<script src="{{ elixir('js/all.js') }}"></script>

<script>
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);

        return false;
    });
</script>

{{-- <iframe id="rdbIndicator" width="100%" height="270" border="0" src="chrome-extension://oknpjjbmpnndlpmnhmekjpocelpnlfdi/indicator.html" style="display: none; border: 0; position: fixed; left: 0; top: 0; z-index: 2147483647"></iframe></body> --}}
