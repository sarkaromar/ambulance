<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Texicab is a modern presentation HTML5 Car Rent template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Car Rent" />
    <meta name="author" content="">
    <title>{{$title}}</title>
    <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto+Slab:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300&amp;subset=bengali" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/icons.min.css') }} ">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }} ">
    <link rel="stylesheet" href="{{ URL::to('assets/css/color-schemer.css') }} ">
    <script>
        var BASE_URL = '{{ url('/') }}';
    </script>
</head>
<body class="theme-blue">
    <header class="header-area header-two blue-theme">
        <div class="container header-top-block">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-7">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{ URL::to('assets/images/logo.png') }}" alt="header-logo" /></a>
                    </div><!-- /.logo -->
                </div><!-- /.col-md-5 -->
                <!-- PC Top Right Content -->
                <div class="col-md-8 hidden-xs hidden-sm">
                    <div class="header-content-right">
                        <ul>
                            <li>
                                <div class="icon-block">
                                    <i class="fa fa-phone"></i>
                                </div><!-- /.icon-block -->
                                <div class="menu-info">                                
                                    <a href="#">ফোন - ০১৮৮৫০৯০০০০</a>
                                    <a href="#">maamonics@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon-block">
                                    <i class="fa fa-map-marker"></i>
                                </div><!-- /.icon-block -->
                                <div class="menu-info">                                
                                    যোগাযোগ: হাসপাতাল রোড,
                                    <br> মাইজদী, নোয়াখালী।
                                </div>
                            </li>
                            <li>
                                <div class="icon-block">
                                    <i class="fa fa-user-circle"></i>
                                </div><!-- /.icon-block -->
                                <div class="social-icon">
                                    <span class="content-title">সাথে থাকুন:</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div><!-- /.social-icon -->
                            </li>
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-7 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="container header-bottom-block">        
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-1">
                    <nav id="main-nav" class="site-navigation top-navigation">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
                                    <li><a href="{{ url('/') }}">হোম</a></li>
                                    <li><a href="{{ url('about-us') }}">আমাদের সম্পর্কে</a></li>
                                    <li>
                                        <a href="#">আমাদের সেবাসমূহ</a>
                                        <ul class="sub-menu"> 
                                            <li><a href="{{ url('non-ac-ambulance') }}">নন এসি অ্যাম্বুলেন্স </a></li>                                         
                                            <li><a href="{{ url('ac-ambulance') }}">এসি অ্যাম্বুলেন্স </a></li>                                         
                                            <li><a href="{{ url('icu-ambulance') }}">আই সি ইউ অ্যাম্বুলেন্স</a></li>                                         
                                            <li><a href="{{ url('freezer-van') }}">ফ্রীজার ভ্যান</a></li>                                         
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('rants') }}">ভাড়া তালিকা</a></li>
                                    <li><a href="{{ url('news') }}">খবর</a></li>
                                    <li><a href="{{ url('faq') }}">প্রশ্নাবলী</a></li>
                                    <li><a href="{{ url('terms_and_conditions') }}">শর্ত</a></li>
                                    <li><a href="{{ url('contact-us') }}">যোগাযোগ</a></li>
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav><!-- /.site-navigation -->
                    <!--Mobile Main Menu-->
                    <div class="mobile-menu-main hidden-md hidden-lg">
                        <div class="menucontent overlaybg"> </div>
                        <div class="menuexpandermain slideRight">
                            <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                <span></span>
                            </a>
                        </div><!--/.menuexpandermain-->
                        <div id="mobile-main-nav" class="mb-navigation slideLeft">
                            <div class="menu-wrapper">
                                <div id="main-mobile-container" class="menu-content clearfix"></div>
                            </div>
                        </div><!--/#mobile-main-nav-->
                    </div><!--/.mobile-menu-main-->
                </div><!-- /.col-md-10 -->
                <div class="col-md-2 col-sm-2 col-xs-11">
                    <div class="nav-right-content">
                        <div class="lang">    
                            <i class="fa fa-language"></i>
                            <span>ভাষা</span>
                            <a href="{{ url('en') }}"><img src="{{ URL::to('assets/images/lang/en.png') }}" alt=""></a>
                            <a href="{{ url('/') }}"><img src="{{ URL::to('assets/images/lang/bn.png') }}" alt=""></a>
                        </div>
                    </div><!-- /.nav-right-content -->
                </div><!-- /.col-md-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->
    @yield('content')
    <!-- ======footer area======= -->
    <!-- ====== Section divider ====== --> 
    <div class="vehicle-section-divider night-rider no-border">
        <div class="contoiner-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-divider-content ambulance">
                        <div class="vehicle-border">
                            <img src="{{ URL::to('assets/images/block-car02.png') }}" alt="car-item" />
                        </div><!-- /.car-border -->
                    </div><!-- /.section-divider-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.section-divider -->
    <footer class="footer-block bg-black blue-theme" style="background-image: url(assets/images/footer-bg.png);">
        <div class="container">
                <!-- footer-top-block -->
                <div class="footer-top-block">            
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_about">    
                                <h3 class="widget-title">
                                    আমাদের সম্পর্কে
                                </h3><!-- /.widget-title -->
                                <div class="widget-about-content">
                                    <img src="{{ URL::to('assets/images/logo.png') }}" alt="logo" />
                                    <p>We Provide develo gped in a way so that the clients find  Support. Themes are developed in a way so that  the clients find.</p>
                                    <a href="#" class="button">আরো</a>
                                </div><!-- /.widget-content -->
                            </div><!-- /.widget widget_about -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_menu">
                                <h3 class="widget-title">
                                    দরকারী লিংক
                                </h3><!-- /.widget-title -->
                                <ul>
                                    <li><a href="about.html">আমাদের সম্পর্কে</a></li>
                                    <li><a href="rants.html">ভাড়া তালিকা</a></li>
                                    <li><a href="news.html">খবর</a></li>
                                    <li><a href="faq.html">প্রশ্নাবলী</a></li>
                                    <li><a href="tnc.html">শর্ত</a></li>
                                    <li><a href="contact.html">যোগাযোগ</a></li>
                                </ul> 
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-3 -->
    
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_menu">
                                <h3 class="widget-title">
                                    আমাদের সেবাসমূহ
                                </h3><!-- /.widget-title -->
                                <ul>
                                    <li><a href="non-ac-ambulance.html">নন এসি অ্যাম্বুলেন্স </a></li>                                         
                                    <li><a href="ac-ambulance.html">এসি অ্যাম্বুলেন্স </a></li>                                         
                                    <li><a href="icu-ambulance.html">আই সি ইউ অ্যাম্বুলেন্স</a></li>                                         
                                    <li><a href="freezer-van.html">ফ্রীজার ভ্যান</a></li> 
                                </ul>
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_hot_contact">
                                <h3 class="widget-title">
                                    যোগাযোগ 
                                </h3><!-- /.widget-title -->
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i>maamonics@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>(+880)1885-090000</a></li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i>Hospital Road, Maijdee, Noakhali.</a></li>
                                </ul> 
                            </div><!-- /.widget -->
                            <div class="widget widget_newsletter">
                                <h3 class="widget-title">সদস্যতা</h3>
                                <form action="#" class="subscribes-newsletter" method="get">
                                    <label>আমাদের নিউজলেটার সদস্যতা</label>
                                    <div class="input-group">
                                        <input type="search" name="s" placeholder="Your email" class="form-controller">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary">
                                                    <span class="fa fa-paper-plane"></span>
                                            </button>
                                        </span>
                                    </div><!-- /. input-group -->
                                </form><!-- /.subscribes-newsletter -->
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.footer-top-block -->
            <!-- footer-bottom-block -->
            <div class="footer-bottom-block">            
                <div class="row">
                     <div class="col-md-9">
                        <div class="bottom-content-left">
                            <p class="copyright">Copyright &copy; 2017 <a href="{{ url('') }}">MaaMoniAmbulance.com</a>  -  All Right Reserved</p>
                        </div><!-- /.bottom-top-content -->
                     </div><!-- /.col-md-9 -->
                     <div class="col-md-3">
                        <div class="bottom-content-right">
                            <div class="social-profile">
                                <span class="social-profole-title">Follow Us:</span>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div><!-- /.social-profile -->
                        </div><!-- /.bottom-content-right -->
                     </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.footer-bottom-block -->
        </div><!-- /.container -->
    </footer><!-- /.footer-block -->

    <!-- java script -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{ URL::to('assets/js/plugins.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ URL::to('assets/js/carrent.min.js') }}"></script>
    <script>
        $( function() {
            $( "#jquery_datepicker" ).datepicker({
                minDate: 0,
                dateFormat: 'yy-mm-dd'
            });
        } );
    </script>
    <script>
        $('.carousel').carousel();
    </script>
</body>
</html>