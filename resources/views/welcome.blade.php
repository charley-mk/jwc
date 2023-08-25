<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'jwc') }}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('dist/img/favicon.ico')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

{{--    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{URL::asset('/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/scrolltop.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/wedget.css')}}">
{{--    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">--}}
    <link rel="stylesheet" href="https://jwc.co.ke/public/css/style.css">
    <link rel="stylesheet" href="{{URL::asset('/css/responsive.css')}}">
</head>

<body class="">

    <!-- preloaders start -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloaders end -->
    <!-- header area start -->
    <header>
        <!-- header top area start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-address-lang-area">
                            <ul class="header-short-info">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <div class="short-info">
                                        phone
                                        <span>+254780183848</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-at"></i>
                                    <div class="short-info">
                                        email
                                        <span>info@jwc.co.ke</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <div class="short-info">
                                        address
                                        <span>Changamwe - Chaani, Mlolongo along Moi Airport Road</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end -->
    </header>
    <!-- header area end -->
    <!-- main area start -->
    <main>
        <div class="ul-nav-area">
            <div class="container">
                <div class="row">
                    <!-- logo start -->
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3">
                        <div class="header-logo">
{{--                            <a href="/"><img src="asset{{'dist/img/logo-1.svg'}} " alt="logo" class="img-fluid"></a>--}}
                            <a href="/"><img src="{{URL::asset('dist/img/logo-1.jpg')}} " alt="logo" class="rounded" style="height: 8%"></a>

                        </div>
                    </div>
                    <!-- main menu area start -->
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">

                        <!-- Header Social Start -->
                        <div class="header-top-right float-right">
                            <ul class="header-search-social">
                                <li><a id="search-btn" href="#"><i class="fa fa-search"></i></a></li>
{{--                                <li><a id="social-pop-btn" href="#"><i class="fa fa-align-left"></i></a></li>--}}
                                <li><a id="social-pop-btn" href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Social End -->

                        <div class="main-menu-area text-center">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="/">home</a>
{{--                                            <ul class="sub-menu text-left">--}}
{{--                                                <li><a href="index.html">home lite</a></li>--}}
{{--                                                <li><a href="index2.html">home dark</a></li>--}}
{{--                                            </ul>--}}
                                        </li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="services.html">Devotionals</a></li>
                                        <li><a href="#">Ministries</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="team.html">Pastoral Team</a></li>
                                                <li><a href="testimonial.html">Prayer Department</a></li>
                                                <li><a href="error.html">Children Ministry</a></li>
                                                <li><a href="#">Praise and Worship Ministry</a>
                                                    <ul class="sub-menu text-left">
                                                        <li><a href="team.html">Praise and Worship Team</a></li>
                                                        <li><a href="testimonial.html">Instrumentalist</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
{{--                                        <li><a href="services.html">Devotionals</a></li>--}}
                                        <li><a href="#">Home Based Bible Study</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="blog-list.html">About HBC's</a></li>
                                                <li><a href="blog-list.html">Chaani HBC</a></li>
                                                <li><a href="blog-list.html">Magongo HBC</a></li>
                                                <li><a href="blog-list.html">Changamwe HBC</a></li>
                                                <li><a href="blog-list.html">Dispora HBC</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                    <!-- main menu area end -->
                </div>
            </div>
        </div>
        <!-- search form start -->
        <div class="search-form-area" id="search-overlay">
            <div class="search-form-centered">
                <div id="search-box">
                    <i id="close-btn" class="fa fa-times fa-2x"></i>
                    <form class="search-form">
                        <input class="form-control" placeholder="Type your text" type="text">
                        <button type="submit">
                            <span>Search</span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
        <!-- search form end -->
        <!-- social popup area start -->
        <div id="ul-social-popup-overlay" class="ul-social-popup-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <i id="popup-close-btn" class="fa fa-times fa-2x"></i>
                        <div class="ul-social-popup">
                            <ul class="ul-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- social popup area end -->
        <!-- ul slider area start -->
        <div id="ul-slider-area" class="ul-slider-area slider-area-bg">
            <div class="ul-main-slider owl-carousel owl-theme">

                <div class="ul-single-slider">
                    <div class="slid-bg-1"></div>
                    <div class="ul-single-table">
                        <div class="ul-single-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-10 col-md-12">
                                        <div class="ul-slider-area-content">
                                            <h4><span></span>exclusive product</h4>
                                            <h2>we are here to make <br />your business dream true</h2>
                                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
                                                used in laying out print, graphic or web designs.</p>
                                            <div class="slider-area-btn">
                                                <a href="#" class="btn btn-type-1">more <i class="fa fa-long-arrow-right"></i> </a>
                                                <a href="https://www.youtube.com/watch?v=snvzakfcTmY" class="btn btn-type-2 slider-popup"><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="ul-single-slider">
                    <div class="slid-bg-1"></div>
                    <div class="ul-single-table">
                        <div class="ul-single-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-10 col-md-12">
                                        <div class="ul-slider-area-content">
                                            <h4><span></span>exclusive product</h4>
                                            <h2>we are here to make <br />your business dream true</h2>
                                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
                                                used in laying out print, graphic or web designs.</p>
                                            <div class="slider-area-btn">
                                                <a href="#" class="btn btn-type-1">more <i class="fa fa-long-arrow-right"></i> </a>
                                                <a href="https://www.youtube.com/watch?v=snvzakfcTmY" class="btn btn-type-2 slider-popup"><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="ul-single-slider">
                    <div class="slid-bg-1"></div>
                    <div class="ul-single-table">
                        <div class="ul-single-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-10 col-md-12">
                                        <div class="ul-slider-area-content">
                                            <h4><span></span>exclusive product</h4>
                                            <h2>we are here to make <br />your business dream true</h2>
                                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text
                                                used in laying out print, graphic or web designs.</p>
                                            <div class="slider-area-btn">
                                                <a href="#" class="btn btn-type-1">more <i class="fa fa-long-arrow-right"></i> </a>
                                                <a href="https://www.youtube.com/watch?v=snvzakfcTmY" class="btn btn-type-2 slider-popup"><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ul slider area end -->
        <!-- ul about area start -->
        <div id="ul-about-area" class="ul-about-area mt-100 mb-100 wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="section-title">
                            <h4>about company</h4>
                            <h3>our company details</h3>
                            <p>There are many variations of passages of Lorem Ipsum but the majority have suffered alteration in some form, by injected</p>
                        </div>

                    </div>
                </div>
                <div class="about-slider-area owl-carousel owl-theme">
                    <div class="about-single-slider">
                        <div class="container">
                            <div class="row">

                                <div class="about-bg-img">
                                    <div class="about-img">
                                        <img src="dist/img/about/b-1.jpg" alt="img" />
                                    </div>
                                    <div class="offset-xl-6 col-xl-6 offset-lg-6 col-lg-6 offset-md-4 col-md-8 col-sm-12">
                                        <div class="about-content-area">
                                            <h3>about 01</h3>
                                            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                            <a href="#" class="btn btn-type-3">about us</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="about-single-slider">
                        <div class="container">
                            <div class="row">

                                <div class="about-bg-img">
                                    <div class="about-img">
                                        <img src="dist/img/about/b-1.jpg" alt="img" />
                                    </div>
                                    <div class="offset-xl-6 col-xl-6 offset-lg-6 col-lg-6 offset-md-4 col-md-8 col-sm-12">
                                        <div class="about-content-area">
                                            <h3>about 01</h3>
                                            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                            <a href="#" class="btn btn-type-3">about us</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ul about area end -->
        <!-- ul services area start -->
        <div class="ul-services-area wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title text-center">
                            <h4>our services</h4>
                            <h3>explore services</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container services-bg">
                <div class="row border-b">
                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay=".1s">
                        <div class="single-services border-r">
                            <img src="dist/img/services/1.png" alt="img" />
                            <h3>seo customize services</h3>
                            <p>lorem ipsum, or lipsum as it some times known, is dummy text used in laying out print, graphic or web designs. the passage</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="single-services border-r">
                            <img src="dist/img/services/2.png" alt="img" />
                            <h3>business groth plan</h3>
                            <p>lorem ipsum, or lipsum as it some times known, is dummy text used in laying out print, graphic or web designs. the passage</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="single-services">
                            <img src="dist/img/services/3.png" alt="" />
                            <h3>cloud services policy</h3>
                            <p>lorem ipsum, or lipsum as it some times known, is dummy text used in laying out print, graphic or web designs. the passage</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".1s">
                        <div class="single-services border-r">
                            <img src="dist/img/services/4.png" alt="img" />
                            <h3>seo customize services</h3>
                            <p>lorem ipsum, or lipsum as it some times known, is dummy text used in laying out print, graphic or web designs. the passage</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                        <div class="single-services border-r">
                            <img src="dist/img/services/5.png" alt="img" />
                            <h3>business groth plan</h3>
                            <p>lorem ipsum, or lipsum as it some times known, is dummy text used in laying out print, graphic or web designs. the passage</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".3s">
                        <div class="single-services">
                            <img src="dist/img/services/6.png" alt="img" />
                            <h3>cloud services policy</h3>
                            <p>lorem ipsum, or lipsum as it some times known, is dummy text used in laying out print, graphic or web designs. the passage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ul services area end -->
        <!-- ul videos area start -->
        <div id="ul-videos-area" class="ul-videos-area mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-title wow fadeInRight">
                            <h4>our videos</h4>
                            <h3>best video guide</h3>
                            <p>There are many variations of passages of Lorem Ipsum but the majority have suffered alteration in some form, by injected</p>
                        </div>

                    </div>
                </div>
                <div class="videos-wraper-area">
                    <div class="videos-single-box">
                        <div class="container">
                            <div class="row">
                                <div class="videos-bg-img">
                                    <div class="videos-img wow fadeInLeft">
                                        <div class="videos-icon">
                                            <a class="popup-video" href="https://www.youtube.com/watch?v=snvzakfcTmY"><i class="fa fa-play"></i></a>
                                        </div>
                                        <img src="dist/img/video/video-1.jpg" alt="" />
                                    </div>
                                    <div class="offset-xl-6 col-xl-6 offset-lg-6 col-lg-6 offset-md-6 col-md-6 wow fadeInRight">
                                        <div class="videos-content-area">
                                            <h3>videos 01</h3>
                                            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                            <ul class="videos-social">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- ul videos area end -->
        <!-- ul counter area start -->
        <div id="ul-counter-area" class="ul-counter-area mt-80 mb-85">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".2s">
                        <div class="single-counter">
                            <div class="counter-box">
                                <span class="counter">560</span>
                                <span>+</span>
                            </div>
                            <h4>total projects</h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".3s">
                        <div class="single-counter">
                            <div class="counter-box">
                                <span class="counter">878</span>
                                <span>%</span>
                            </div>
                            <h4>transparency</h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".4s">
                        <div class="single-counter">
                            <div class="counter-box">
                                <span class="counter">123</span>
                                <span>+</span>
                            </div>
                            <h4>projects done</h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".5s">
                        <div class="single-counter">
                            <div class="counter-box">
                                <span class="counter">59</span>
                                <span>+</span>
                            </div>
                            <h4>coffe cup</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ul counter area end -->
        <!-- ul team area start -->
        <div id="ul-team-area" class="ul-team-area mt-100 mb-70 wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title">
                            <h4>our team</h4>
                            <h3>experience team</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ul-all-team-wraper owl-carousel owl-theme">

                            <div class="single-team-wrapper text-center">
                                <div class="team-img">
                                    <img src="dist/img/team/1.jpg" alt="team" />
                                    <div class="team-hover"><a href="#" class=""><i class="fa fa-link"></i></a></div>
                                </div>
                                <div class="team-content">
                                    <h4>david walillams</h4>
                                    <span>consultant</span>
                                </div>
                            </div>

                            <div class="single-team-wrapper text-center">
                                <div class="team-img">
                                    <img src="dist/img/team/2.jpg" alt="team" />
                                    <div class="team-hover"><a href="#" class=""><i class="fa fa-link"></i></a></div>
                                </div>
                                <div class="team-content">
                                    <h4>benjamin mark</h4>
                                    <span>director</span>
                                </div>
                            </div>


                            <div class="single-team-wrapper text-center">
                                <div class="team-img">
                                    <img src="dist/img/team/3.jpg" alt="team" />
                                    <div class="team-hover"><a href="#" class=""><i class="fa fa-link"></i></a></div>
                                </div>
                                <div class="team-content">
                                    <h4>steve louis</h4>
                                    <span>developer</span>
                                </div>
                            </div>

                            <div class="single-team-wrapper text-center">
                                <div class="team-img">
                                    <img src="dist/img/team/4.jpg" alt="team" />
                                    <div class="team-hover"><a href="#" class=""><i class="fa fa-link"></i></a></div>
                                </div>
                                <div class="team-content">
                                    <h4>shawn philip</h4>
                                    <span>designer</span>
                                </div>
                            </div>

                            <div class="single-team-wrapper text-center">
                                <div class="team-img">
                                    <img src="dist/img/team/1.jpg" alt="team" />
                                    <div class="team-hover"><a href="#" class=""><i class="fa fa-link"></i></a></div>
                                </div>
                                <div class="team-content">
                                    <h4>shawn philip</h4>
                                    <span>designer</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ul team area end -->
        <!-- ul cta area start -->
        <div id="ul-cta-area" class="ul-cta-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="cta-content-box-wraper">
                            <div class="cta-content-box wow fadeInLeft">
                                <p>do you have any project ?</p>
                                <h2 class="">let's change your business <br /> growth with us</h2>
                            </div>
                            <div class="cta-btn">
                                <a href="#" class="btn btn-type-4">contact</a>
                            </div>
                            <div class="cta-img"><img src="dist/img/cta/cta-1.png" alt="img" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ul cta area end -->
        <!-- ul testimonial area start -->
        <div id="ul-testimonial-area" class="ul-testimonial-area mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInRight">
                        <div class="section-title">
                            <h4>testimonials</h4>
                            <h3>client’s say</h3>
                        </div>
                        <div class="testimonial-wraper  owl-carousel owl-theme">

                            <div class="single-testimonial">
                                <div class="testimonial-content">
                                    <div class="testimonial-title-img">
                                        <div class="testimonial-img">
                                            <img src="dist/img/testimonial/client-1.png" class="img-fluid" alt="testimonial-img">
                                        </div>

                                        <div class="title-desig">
                                            <h3>mark man</h3>
                                            <h4>designer</h4>
                                        </div>
                                    </div>
                                    <ul class="client-rating float-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-full"></i></li>
                                    </ul>
                                </div>
                                <p>dummy text of the printing and type setting and industry. rem Ipsum has been the Lorem ipsum, or lipsum as it some times known, is dummy text used in laying print</p>
                            </div>

                            <div class="single-testimonial">
                                <div class="testimonial-content">
                                    <div class="testimonial-title-img">
                                        <div class="testimonial-img">
                                            <img src="dist/img/testimonial/client-2.png" class="img-fluid" alt="testimonial-img">
                                        </div>

                                        <div class="title-desig">
                                            <h3>Daniel Wells</h3>
                                            <h4>Developer</h4>
                                        </div>
                                    </div>
                                    <ul class="client-rating float-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-full"></i></li>
                                    </ul>
                                </div>
                                <p>dummy text of the printing and type setting and industry. rem Ipsum has been the Lorem ipsum, or lipsum as it some times known, is dummy text used in laying print</p>
                            </div>

                            <div class="single-testimonial">
                                <div class="testimonial-content">
                                    <div class="testimonial-title-img">
                                        <div class="testimonial-img">
                                            <img src="dist/img/testimonial/client-3.png" class="img-fluid" alt="testimonial-img">
                                        </div>

                                        <div class="title-desig">
                                            <h3>robul islam</h3>
                                            <h4>Ux/Ui</h4>
                                        </div>
                                    </div>
                                    <ul class="client-rating float-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-full"></i></li>
                                    </ul>
                                </div>
                                <p>dummy text of the printing and type setting and industry. rem Ipsum has been the Lorem ipsum, or lipsum as it some times known, is dummy text used in laying print</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ul testimonial area end -->
        <!-- ul blog area start -->
        <div id="ul-blog-area" class="ul-blog-area blog-bg mt-100 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title wow fadeInRight lite">
                            <h4>recent news</h4>
                            <h3>news & articles</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                        <div class="single-blog-wraper mb-30">
                            <div class="blog-img">
                                <img src="dist/img/blog/1.jpg" alt="blog-img">
                            </div>

                            <div class="single-blog-content">
                                <div class="blog-post-comment">
                                    <div class="blog-post-admininfo">
                                        <span><a href="#">14 NOV 2019</a></span>
                                        <span><a href="#">By: Admin</a></span>
                                    </div>
                                    <div class="blog-post-comment float-right">
                                        <span><i class="fa fa-comments-o"></i><a href="#">0 comments</a></span>
                                    </div>

                                </div>
                                <h4><a href="#" class="post-title">in spring dumont opens mixed reality on belief</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered teration some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <a href="#" class="mt-15 btn btn-type-3">more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                        <div class="single-blog-wraper mb-30">
                            <div class="blog-img-slider owl-carousel owl-theme">
                                <img src="dist/img/blog/2.jpg" alt="blog-img" />
                                <img src="dist/img/blog/1.jpg" alt="blog-img" />
                            </div>

                            <div class="single-blog-content">
                                <div class="blog-post-comment">
                                    <div class="blog-post-admininfo">
                                        <span><a href="#">14 NOV 2019</a></span>
                                        <span><a href="#">By: Admin</a></span>
                                    </div>
                                    <div class="blog-post-comment float-right">
                                        <span><i class="fa fa-comments-o"></i><a href="#">0 comments</a></span>
                                    </div>

                                </div>
                                <h4><a href="#" class="post-title">contrary to popular belief, lorem
                                        sims ply random</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered teration some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <a href="#" class="mt-15 btn btn-type-3">more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ul blog area end -->
        <div class="spacer"></div>
        <!-- ul footer area start -->
        <footer>
            <div id="ul-footer-area" class="ul-footer-area mt-100 pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".4s">
                            <div class="footer-single-wedget">
                                <div class="custom-html-widget">
                                    <h3>contact us</h3>
                                    <ul class="contact-details">
                                        <li><i class="fa fa-map-marker"></i> address: 679 grand avenu, central parl, nyc, ny</li>
                                        <li><i class="fa fa-headphones"></i> custom support & sale: +012-345-678</li>
                                        <li><i class="fa fa-clock-o"></i> working time: mon-sat: 9 am – 5 pm</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".2s">
                            <div class="footer-single-wedget">
                                <div class="widget_nav_menu">
                                    <h3>quick link</h3>
                                    <ul class="menu">
                                        <li><a href="#">help center </a></li>
                                        <li><a href="#">privicey police</a></li>
                                        <li><a href="#">support policy</a></li>
                                        <li><a href="#">terms & max</a></li>
                                        <li><a href="#">about us</a></li>
                                        <li><a href="#">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".3s">
                            <div class="footer-single-wedget">
                                <div class="widget_recent_entries">
                                    <h3>latest news</h3>
                                    <ul>
                                        <li>
                                            <div class="footer-post-img">
                                                <a href="#">
                                                    <img src="dist/img/wdg/wdg-img-1.jpg" alt="blog thumbnail" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="footer-post-content">

                                                <a href="#">latest news here</a>
                                                <span>Sep 30, 2019</span>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="footer-post-img">
                                                <a href="#">
                                                    <img src="dist/img/wdg/wdg-img-2.jpg" alt="blog thumbnail" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="footer-post-content">

                                                <a href="#">latest news here</a>
                                                <span>Sep 30, 2019</span>
                                            </div>

                                        </li>

                                        <li>
                                            <div class="footer-post-img">
                                                <a href="#">
                                                    <img src="dist/img/wdg/wdg-img-3.jpg" alt="blog thumbnail" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="footer-post-content">

                                                <a href="#">latest news here</a>
                                                <span>Sep 30, 2019</span>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay=".5s">
                            <div class="footer-single-wedget">
                                <div class="custom-html-widget">
                                    <h3>newsletter</h3>
                                    <p>But I must explain to you how all
                                        this mistaken idea of denouncing asure and praising pain was
                                        born and I will give you a</p>
                                    <div class="footer-subscribe-form-box">
                                        <input class="form-control" placeholder="Email" name="email" type="email">
                                        <button class="footer-btn" type="submit"><i class="fa fa-angle-double-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- ul footer copyright area start -->
            <div class="ul-copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                          <div class="footer-copyright text-center d-flex align-items-center">
                            <p>&copy; 2020 All Right Reserved by <a href="https://ui-lib.com/" target="_blank">UI Lib</a></p>
                            <div class="flex-grow-1"></div>
                            <a href="" class="btn btn-type-1">Download for Free</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ul footer copyright area end -->
        </footer>
        <!-- ul footer area end -->

    </main>
    <!-- main area end -->

    <!-- scrolltop button -->
    <div class="material-scrolltop"></div>

    <!-- js here -->
    <script src="dist/js/modernizr-3.5.0.min.js"></script>
    <script src="dist/js/jquery-1.12.4.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/meanmenu.min.js"></script>
    <script src="dist/js/magnific-popup.min.js"></script>
    <script src="dist/js/owl.carousel.min.js"></script>
    <script src="dist/js/waypoints.min.js"></script>
    <script src="dist/js/counterup.min.js"></script>
    <script src="dist/js/scrolltop.js"></script>
    <script src="dist/js/ajax-form.js"></script>
    <script src="dist/js/wow.min.js"></script>
    <script src="dist/js/plugins.js"></script>
    <script src="dist/js/main.js"></script>
</body>

</html>
