<!doctype html>
<html class="no-js" lang="en">
@include('includes.home_css')

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bitazza INVEST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src=" {{ asset('assets/particles.js') }}"></script>
    <script src=" {{ asset('assets/app.js') }}"></script>




</head>
@include('includes.home_header')

<body>

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Certification of Incoporation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 ">
                        <div style="">
                            <img style="width:70%;object-fit:contain;margin:3px auto;display:block;"
                                src="{{ asset('assets/images/cert5.jpg') }}" alt="About" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 ">
                        <div style="margin-top: 50px ">
                            <img style="width:70%;object-fit:contain;margin:3px auto;display:block;"
                                src="{{ asset('assets/images/just3.jpg') }}" alt="About" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="slide-area fix" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell" id="particles-js">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slide-content text-center">
                                <h4 class="title2">Freedom Begins Here</h4>
                                <div class="layer-1-3">
                                    <a href="{{ route('user.login') }}" class="ready-btn left-btn">Get started</a>
                                    <div class="video-content">
                                        <a href="https://youtu.be/SKlduIEsp9c" class="video-play vid-zone">
                                            <i class="fa fa-play"></i>
                                            <span>watch video</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="particles-js">
        <h1 id="caption">Particle.js</h1>
    </div>

    <div class="counter-area fix area-padding-2">
        <div class="container">
            <!-- Start counter Area -->
            <div class="row">
                <div class="fun-content">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-035-savings"></i></span>
                            <span class="counter">$5974544</span>
                            <h4>Total Deposited</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <span class="counter">2209</span>
                            <h4>Total Members</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-016-graph"></i></span>
                            <span class="counter">$3974544</span>
                            <h4>Total Payments</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-043-world"></i></span>
                            <span class="counter">80</span>
                            <h4>World Country</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline">
                            <h3>Investment planS</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="invest-area bg-color page-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
            <div class="row">
                <div class="pricing-content">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <span class="base">BASIC</span>
                                <div class="rates">
                                    <span class="prices">14%</span><span class="users"></span>
                                </div>
                                <span class="per-day">7 days</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimum : $50</li>
                                <li class="check">Maximum : $500</li>
                                <li class="check">Daily Commision : 2% </li>
                                <li class="check">ROI : 14% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="{{ route('user.register') }}">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <span class="base">STANDARD</span>
                                <div class="rates">
                                    <span class="prices">28%</span><span class="users"></span>
                                </div>
                                <span class="per-day">7 days</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimum : $1,000</li>
                                <li class="check">Maximum : $5,000</li>
                                <li class="check">Daily Commision : 4% </li>
                                <li class="check">ROI : 28% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="{{ route('user.register') }}">GET STARTED</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <span class="base">VIP</span>
                                <div class="rates">
                                    <span class="prices">35%</span><span class="users">Daily</span>
                                </div>
                                <span class="per-day">7 days</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimum : $5,500</li>
                                <li class="check">Maximum : $10,000</li>
                                <li class="check">Daily Commision : 5% </li>
                                <li class="check">ROI : 35% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="{{ route('user.register') }}">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <span class="base">PREMIUM</span>
                                <div class="rates">
                                    <span class="prices">70%</span><span class="users"></span>
                                </div>
                                <span class="per-day">10 days</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimum : $10,500</li>
                                <li class="check">Maximum : $24,999</li>
                                <li class="check">Daily Commision : 7% </li>
                                <li class="check">ROI : 70% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="{{ route('user.register') }}">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <span class="base">PROFESSIONAL</span>
                                <div class="rates">
                                    <span class="prices">150%</span><span class="users"></span>
                                </div>
                                <span class="per-day">15 days</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimum : $25,000</li>
                                <li class="check">Maximum : $100,000</li>
                                <li class="check">Daily Commision : 10% </li>
                                <li class="check">ROI : 150% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="{{ route('user.register') }}">GET STARTED</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <span class="base">ULTRA</span>
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">300%</span><span class="users"></span>
                                </div>
                                <span class="per-day">15 days</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimum : $120,000</li>
                                <li class="check">Maximum : $100,000,000</li>
                                <li class="check">Daily Commision : 20% </li>
                                <li class="check">ROI : 300% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="{{ route('user.register') }}">GET STARTED</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    <section>
        <div class="container" style="overflow: scroll;">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="margin:auto;">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a
                        href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                        target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView
                </div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                    {
                        "width": "100%",
                        "height": "400px",
                        "defaultColumn": "overview",
                        "screener_type": "crypto_mkt",
                        "displayCurrency": "BTC",
                        "colorTheme": "light",
                        "locale": "en",
                        "isTransparent": true
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </section>
    <!-- End Invest area -->
    <div class="col-lg-12 text-center mt-4">

        {{-- <h2 style="margin-top: 10px;">Our <span> Certifications</span></h2> --}}
    </div>
    <div class="col-lg-12">
        <div class="about-img">
            <div class="row align-items-end">
                <div class="col-lg-12 ">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="{{ asset('assets/videos/nh.mp4') }}" {{-- poster="{{ asset('assets/images/blog/Bristle Assets-01.png') }}" --}} type="video/mp4">
                            </source>
                        </video>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Support-service Area -->
    <div class="support-service-area fix area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Why choose investment plan</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="support-all">
                    <!-- Start About -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services wow ">
                            <a class="support-images" href="#"><i class="flaticon-023-management"></i></a>
                            <div class="support-content">
                                <h4>Expert management</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start About -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-036-security"></i></a>
                            <div class="support-content">
                                <h4>Secure investment</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-003-approve"></i></a>
                            <div class="support-content">
                                <h4>Registered company</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><i class="flaticon-042-wallet"></i></a>
                            <div class="support-content">
                                <h4>Instant withdrawal</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-032-report"></i></a>
                            <div class="support-content">
                                <h4>Verified security</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><i class="flaticon-024-megaphone"></i></a>
                            <div class="support-content">
                                <h4>Live customer support</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Support-service Area -->
    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
    <div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,2010,3408" currency="USD" theme="light"
        transparent="true" show-symbol-logo="true"></div>
    <!-- Start Self-area -->
    <div class="self-area area-padding">
        <div class="container">
            <div class="row">
                <!-- column end -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="self-content">
                        <h4>An investment multi-national where you invest money for experts to trade and handle your
                            profits
                            , We help you save for your future. Grow Money speedly
                            without any risk. </h4>
                        <span class="talk-text"></span>
                    </div>
                </div>
                <!-- column end -->
            </div>
        </div>
    </div>
    <!-- End Self-area -->
    <!-- Start Work proses Area -->
    <div class="work-proses fix bg-color area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Referral bonus level</h3>
                        Bonus referral program by Bitazza Invest is provided for those who invate clients. If you
                        telling
                        about advantages of our company,
                        then it is possible not only to help them to receive financial benefit, but also to receive
                        additional percent.

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="work-proses-inner text-center">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-proses">
                                    <div class="proses-content">
                                        <div class="proses-icon point-blue">
                                            <span class="point-view">5%</span>
                                            <a href="#"><i class="ti-briefcase"></i></a>
                                        </div>
                                        <div class="proses-text">
                                            <h4>Refferal bonus of 5% on each refferal</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End column -->
                            {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-proses">
                                    <div class="proses-content">
                                        <div class="proses-icon point-orange">
                                            <span class="point-view">02</span>
                                            <a href="#"><i class="ti-layers"></i></a>
                                        </div>
                                        <div class="proses-text">
                                            <h4>Level 02 instant 20% commission</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-proses last-item">
                                    <div class="proses-content">
                                        <div class="proses-icon point-green">
                                            <span class="point-view">03</span>
                                            <a href="#"><i class="ti-bar-chart-alt"></i></a>
                                        </div>
                                        <div class="proses-text">
                                            <h4>Level 03 instant 10% commission</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- End column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work proses Area -->
    <!--Start payment-history area -->
    <div class="payment-history-area bg-color fix area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Recent Deposit and withdrawals</h3>
                        <p>Few Highlights of recent deposit and withdrawal</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="deposite-content">
                        <div class="diposite-box">
                            <h4>Last deposit</h4>
                            <span><i class="flaticon-005-savings"></i></span>
                            <div class="deposite-table">
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                    </tr>
                                    <tr>
                                        <td id="j1"></td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>Bitcoin</td>
                                    </tr>
                                    <tr>
                                        <td id="j2">Jonshon</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td id="j3">Hopper</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>Ripple</td>
                                    </tr>
                                    <tr>
                                        <td id="j4">Admond sayhel</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>Bitcoin</td>
                                    </tr>
                                    <tr>
                                        <td id="j5">Anjel july</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td id="j6">Lagisha</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>Bitcoin</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="deposite-content">
                        <div class="diposite-box">
                            <h4>Last withdrawals</h4>
                            <span><i class="flaticon-042-wallet"></i></span>
                            <div class="deposite-table">
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                    </tr>
                                    <tr>
                                        <td id="j7">Arnold</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td id="j8">Jhon Abra</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td id="j9">Lanisha</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td id="j10">Gongales</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td id="j11">Admond sayhel</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td id="j12">Remond</td>
                                        <td><?php echo date('d F, Y (l)'); ?></td>
                                        <td>$<?php echo rand(50, 100) * 1000; ?></td>
                                        <td>USD</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End payment-history area -->
    <!-- End payment-history area -->
    <!-- Start Banner Area -->
    <div class="banner-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-all area-80 text-center">
                        <div class="banner-content">
                            <h3>Our investment plans reaches out to any one world wide </h3>
                            <a class="banner-btn" href="{{ route('user.register') }}">Sign up now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Start Blog Area-->
    <div class="blog-area fix bg-color area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>SERVICES</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-grid home-blog">
                    <!-- Start single blog -->
                    {{-- {{asset('assets/')}} --}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">

                                    <img src="{{ asset('assets/img/blog/b1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="#">
                                    <h3>Our Professional</h3>
                                    <p>There are many ways in which our investment experts can help invest your funds
                                        for
                                        maximum returns</p>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <!-- Start single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-content">

                            <a href="#">
                                <h3>Business Consulting</h3>
                                <p>At Bitazza Invest we are on daily standby for Business Consulting</p>

                            </a>
                        </div>
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="{{ asset('assets/img/blog/b2.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- End single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-content">

                            <a href="#">
                                <h3>Financial Analysis</h3>
                                <p>Our experts at Bitazza Invest make proper market analysis before investing funds </p>

                            </a>
                        </div>
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="{{ asset('assets/img/blog/b4.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->

                <!-- End single blog -->

                <!-- End single blog -->
            </div>
        </div>
        <!-- End row -->
    </div>
    </div>
    <!-- End Blog Area-->
    <!-- Start reviews Area -->
    <div class="reviews-area fix area-padding">
        <div class="container">
            <div class="row">
                <div class="reviews-top">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="testimonial-inner">
                            <div class="review-head">
                                <h3>We Can Help With Your Business Today...</h3>
                                <p>Huge community of Consult, Advisor and Acountant ready for your project. Bring to the
                                    table
                                    win-win survival strategies to ensure proactive domination going forward.</p>

                                <a class="reviews-btn" href="{{ route('user.register') }}">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reviews-content">
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel item-indicator">
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>The past couple of months I have invested with Bitazza invest I have been
                                                very pleased with their superb investment model and their professional &
                                                outstanding staff.</p>

                                        </div>
                                        <div class="testi-img ">
                                            <img src="{{ asset('assets/img/review/1.jpg') }}" alt="">
                                            <div class="guest-details">
                                                <h4>Hamilton</h4>
                                                <span class="guest-rev">Client <a href="#">
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p> I have been investing in Bitazza Invest since July 2021, They are truly
                                                amazing and are a key to me being able to retire from my job! I love
                                                their professionalism and responsiveness.</p>
                                        </div>
                                        <div class="testi-img ">
                                            <img src="{{ asset('assets/img/review/2.jpg') }}" alt="">
                                            <div class="guest-details">
                                                <h4>Angel lima</h4>
                                                <span class="guest-rev">Client <a href="#">
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>Bitazza Invest offers excellent customer service and passive income
                                                products that perform well even when the markets are crazy. I’ve been
                                                investing with them for 10 months and it’s been a great experience so
                                                far.</p>


                                        </div>
                                        <div class="testi-img ">
                                            <img src="{{ asset('assets/img/review/3.jpg') }}" alt="">
                                            <div class="guest-details">
                                                <h4>Arthur Doil</h4>
                                                <span class="guest-rev">Client <a href="#">
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>Bitazza INVEST will help you manage your crypto portfolio... i can attest
                                                to that </p>
                                        </div>
                                        <div class="testi-img ">
                                            <img src="{{ asset('assets/img/review/4.jpg') }}" alt="">
                                            <div class="guest-details">
                                                <h4>Gabriel Hank</h4>
                                                <span class="guest-rev">Client- <a href="#">
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End reviews Area -->
    <!-- Start FAQ area -->
    <div class="faq-area bg-color page-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Some important FAQ</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Column Start -->
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="company-faq">
                        <div class="faq-full">
                            <div class="faq-details">
                                <div class="panel-group" id="accordion">
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" class="active"
                                                    data-parent="#accordion" href="#check1">
                                                    <span class="acc-icons"></span>HOW CAN I INVEST WITH Bitazza
                                                    INVEST?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>
                                                    To make a investment you must first become a member of Bitazza
                                                    invest
                                                    . Once you are signed up, you can make your first deposit. All
                                                    deposits must be made through the Members Area. You can login using
                                                    the member username and password you receive when signup.</p>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                    <span class="acc-icons"></span>I WISH TO INVEST WITH Bitazza
                                                    INVEST BUT I DON'T HAVE AN ANY ECURRENCY ACCOUNT. WHAT SHOULD I DO
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    We accept: Perfect Money, Payeer, Bitcoin, Litecoin, Bitcoin Cash,
                                                    Ethereum. <br>
                                                    You can open a free Perfect Money account here: www.perfectmoney.is
                                                    <br>
                                                    You can open a free Payeer account here: www.payeer.com <br>
                                                    You can open a free Bitcoin, Litecoin, Bitcoin Cash, Ethereum
                                                    account here: www.coinpayments.net
                                                </p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                    <span class="acc-icons"></span>HOW DO I OPEN MY Bitazza INVEST
                                                    ACCOUNT?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check3" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                <p>It's quite easy and convenient. Follow this link,
                                                    fill in the registration form and then press "Register".</p>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                    <span class="acc-icons"></span>HOW CAN I WITHDRAW FUNDS?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check4" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                    Login to your account using your username and password and check the
                                                    Withdraw section.</p>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                    <span class="acc-icons"></span>AFTER I MAKE A WITHDRAWAL
                                                    REQUEST, WHEN WILL THE FUNDS BE AVAILABLE ON MY ECURRENCY ACCOUNT?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    Funds are usually available within 24 business hours.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                    <span class="acc-icons"></span>HOW WILL BE ADD REFERRAL
                                                    COMMISSION FOR DEPOSIT?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    Referral commission will be added to upline only when user make
                                                    deposit from wallet.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                    <span class="acc-icons"></span>HOW LONG DOES IT TAKE FOR MY
                                                    DEPOSIT TO BE ADDED TO MY ACCOUNT?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    Your account will be updated as fast, as you deposit
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                </div>
                <!-- End Column -->
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="faq-content">
                        <h4>Have a any question?</h4>
                        <div class="faq-quote">
                            <div class="row">
                                <form id="contactForm" method="POST"
                                    action="http://rockstheme.com/rocks/aievari-live/contact.php"
                                    class="contact-form">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required
                                            data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                        <input type="email" class="email form-control" id="email" placeholder="Email"
                                            required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                        <input type="text" id="msg_subject" class="form-control"
                                            placeholder="Subject" required=""
                                            data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                        <button type="submit" id="submit" class="quote-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Column -->
            </div>
        </div>
    </div>
    <!-- End Column -->
    </div>
    </div>
    </div>
    <!-- End FAQ area -->
    <!-- Start Footer Area -->

    <!-- End Footer area -->

    @include('includes.home_footer')
</body>

@include('includes.home_script')
<!-- Mirrored from rockstheme.com/rocks/aievari-live/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2022 18:29:30 GMT -->

</html>
