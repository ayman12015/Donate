<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <meta name="keywords" content="جمعية-رعاية-طبية-صدقة-شفاء-أطفال-فقراء-مساعدة-كشف كربة">
    <meta name="description" content="جمعية الرعاية الصحية للأطفال بمنطقة مكة المكرمة، جمعية تطوعية أهلية رائدة مرخصة من وزارة العمل والتنمية الاجتماعية برقم (830)" />
    <meta name="author" content="Ayman-Osman"> 
    <title>SADAKAT</title>

    <link rel="icon" 
      type="image/png" 
      href="{{url('/')}}/assets/images/{{$settings[0]->favicon}}">

    <!-- Bootstrap Core CSS -->
    

    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-ar.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/slicknav.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/genius-slider.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css//slick-theme.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/font-awesome-rtl.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/intlTelInput.css')}}" rel="stylesheet">

    <style>
        .mainmenu ul {
            line-height: 36px;
            font-size: 16px;
        }
        .login-area {
    padding: 100px 0;
    background: #fff;
        }
        .owl-carousel .owl-item img {
    transform-style: preserve-3d;
    width: 366px;
    height: 301px;
}
    </style>
    
</head>

<body>
    <div id="cover"></div>

    <!-- Starting of header area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="top-column-left">
                        <ul>
                            <li><a href="{{url('/cart')}}" title="سلة التبرعات"><i
                                        class="fa fa-shopping-cart"></i> <span style="font-weight: bold;" class="hidden-xs hidden-sm hidden-md">سلة
                                        التبرعات (<span id="cart_quentity"> 0 </span>)</span></a></li>
                            <li><a href="{{url('/zakat')}}" style="font-weight: bold;">حاسبة الزكاة</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="top-column-right">
                        <ul class="top-social-links">

                            <li>
                                <!-- <a href="" class="header-buttons">دخول</a></li>
                                <li><a href="" class="header-buttons">تسجيل جديد</a></li> -->
                            <li class="dropdown">
                                <a href="" title="حسابي" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="fa fa-user"></i>
                                    <span class="hidden-xs hidden-sm hidden-md">
                                        حسابي </span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                        <a href="{{url('user/login')}}">
                                            تسجيل الدخول </a>
                                    </li>
                                    <li>
                                        <a href="{{url('user/registration')}}">
                                            تسجيل جديد </a>
                                    </li>
                                    

                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                    <a href="{{url('/')}}">
                            <img src="{{ URL::asset('assets/images/logo')}}/{{$settings[0]->logo}}" alt="{{$settings[0]->title}}">
                        </a>
                    </div>
                    <div id="mobile-menu-wrap"></div>
                </div>
                <div class="col-md-10 col-sm-10">
                    <div class="mainmenu">
                        <ul id="menuResponsive">
                            <i><button class="btn btn-success" style="color: #030613;
                                background-color: #fff;
                                border-color: #030613; margin-left: 7px;"> <i class="fa fa-heart-o"></i>
                                    <strong>تبرع</strong></button></i>

                            <li><a href="{{url('/faq')}}" class="">إهداء</a></li>
                            <li><a href="{{url('/contact')}}" class="">تواصل معنا</a></li>
                            <li><a href="{{url('/about')}}" class="">من نحن</a></li>
                            <li><a href="" class="">البرامج</a></li>

                            <li><a href="{{url('/')}}" class="">الصفحه الرئيسيه</a></li>




                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="section-padding footer-area-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-area">
                        <div class="footer-title">
                            <div class="footer-title">
                                عن صدقات
                            </div>
                        </div>
                        <div class="footer-content">
                            <p style=" font-weight: 600;display: -webkit-box;-webkit-box-orient: vertical;">جمعية صحية
                                تطوعية أهلية رائدة مرخصة من وزارة العمل والتنمية الاجتماعية برقم (830 ) تهتم
                                بتوفير الرعاية الصحية الطارئة والمتقدمة للأطفال&nbsp;</p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-area">
                        <div class="footer-title">
                            Footer Links
                        </div>
                        <div class="footer-content">
                            <ul class="about-footer">
                                <li><a href=""><i class="fa fa-caret-right"></i>مشاريع الدعم</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i> الحاسبات البنكيه</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i> حاسبه الذكاة</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i>إتصل بنا</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer-area">
                        <div class="footer-title">
                            مساعدة
                        </div>
                        <div class="footer-content">
                            <ul class="latest-tweet">
                                <li><a href=""><i class="fa fa-caret-right"></i> من نحن</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i> إتصل بنا</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">
                    <div class="single-footer-area">
                        <div class="footer-title">
                            إتصل بنا
                        </div>
                        <div class="footer-content">
                            <div class="contact-info">
                                <p class="contact-info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    ٍSudia Arabia, Jeddah
                                </p>
                                <p class="contact-info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:00 000 000 000">+249929318793</a><br />
                                </p>
                                <p class="contact-info">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                    <a href="tel:00 000 000 000">00 000 000 000</a><br />
                                </p>
                                <p class="contact-info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="mailto:admin@geniusocean.com">admin@ayman4work44@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="copy-right-side">
                            COPYRIGHT 2020 <a href="http://geniusocean.com">SADAKAT<br></a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-social-links">
                            <ul>
                                <li>
                                    <a class="facebook" href="http://facebook.com/ebangladesh">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google" href="http://google.com/">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" href="http://twitter.com/">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="tumblr" href="http://linkedin.com/">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/wow.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/genius-slider.js')}}"></script>
    <script src="{{ URL::asset('assets/js/main.js')}}"></script>

    <script type="text/javascript">

        $(window).load(function () {
            setTimeout(function () {
                $('#cover').fadeOut(1000);
            }, 1000)
        });

    </script>

</body>

</html>