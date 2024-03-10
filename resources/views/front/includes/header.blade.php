<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marusan Group</title>

    <!-- Facebook -->
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">





    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/settings.css') }}" media="screen"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"> --}}


    <link rel="stylesheet" href="{{ asset('frontend/css/style2.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto+Condensed:300,400,700']
            }
        });
    </script>
    <link rel="shortcut icon" type="image/png" href="">
    @stack('styles')
</head>

<body>
    {{-- <header class="head-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center logo-text wow slideInLeft"
                    style="visibility: visible; animation-name: slideInLeft;">
                    <div class="logo d-flex align-items-center">
                        <a href=""><img src="{{asset('frontend/images/logo/bms-logo.png')}}" alt="logo"></a>
                        <div>
                            <h1>Marusan Group </h1>
                            <p>Strength in Every Strand, Excellence in Every Fiber</p>
                            <h3>BMS Co. LTD</h3>
                            <h3>BMS ROPE Co. LTD</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center d-flex justify-content-end head-right wow slideInRight"
                    style="visibility: visible; animation-name: slideInRight;">
                    <div class="col-sm-6 hd-r text-center">
                        <span id="iso">
                            <img src="{{asset('frontend/images/iso-9001-2008-certified.png')}}" alt="iso 9001:2008 certified company">
                        </span>
                    </div>
                    <div class="col-sm-6 hd-r text-center">
                        <span>
                            <h3>Get in Touch:</h3>
                            <i class="fa fa-mobile"></i><a href="tel:+8801717335758"
                                style="color:#FFF;">+88-02333342065</a><br>
                            <i class="fa fa-envelope"></i><a href="mailto:info@bms-japanbdrope.com"
                                style="color:#FFF;">info@bms-japanbdrope.com</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg custom-nav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div div class="navbar-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#edu_nav"
                    aria-controls="edu_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="edu_nav">
                <ul class="navbar-nav me-auto nav-left wow slideInLeft"
                    style="visibility: visible; animation-name: slideInLeft;">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="company-des.html">Company Description</a></li>
                            <li><a href="chairman-message.html">President Speech</a></li>
                            <li><a href="our-mission.html">Mission</a></li>
                            <li><a href="our-vission.html">Vission</a></li>
                        </ul>
                    </li>
                    <li><a href="all-products.html">All Products<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="">Specification</a></li>
                            <li><a href="">Rope</a></li>
                            <li><a href="">Twine</a></li>
                            <li><a href="">Hessian</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Gallery<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="photo-gallery.html">Photo</a></li>
                            <li><a href="video-gallery.html">Video</a></li>
                            <li><a href="achievement.html">Achievement</a></li>
                        </ul>
                    </li>
                    <li><a href="career.html">Career</a></li>
                    <li><a href="notice.html">Media Center</a></li>
                    <li><a href="#">Contact<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="bms-contact-us.html">BMS Company Limited</a></li>
                            <li><a href="bms-rope-contact-us.html">BMS Rope Company Limited</a></li>
                        </ul>
                    </li>
                    <li><a href="">Mother Comppany<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="company-profile.html">Company Profile</a></li>
                            <li><a href="company-history.html">History</a></li>
                        </ul>
                    </li>
                    <!--

          <li><a href="">Net and Twine<i class="fa fa-angle-down"></i></a>
            <ul>
              <li><a href="">Nets<i class="fa fa-angle-right"></i></a>
                <ul>
                  <li><a href="">Nylon/ Polyester Fishing Nets</a>
                  </li>
                  <li><a href="">HDPE Fishing Nets</a></li>
                  <li><a href="">Tyre Cord Nets</a></li>
                  <li><a href="">Fencing &amp; Agriculture Nets</a></li>
                  <li><a href="">Construction Safety Net</a></li>
                </ul>
              </li>

            </ul>
          </li> -->



                </ul>
                <!--social icon part start-->
                <ul class="d-flex social-icon  mo_icon wow slideInRight"
                    style="visibility: visible; animation-name: slideInRight;">
                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="" target="_blank"><i class="	fa fa-globe"></i></a></li>
                </ul>
            </div>
            <!--navbar-collapse -->
        </div>
        <!--container -->
    </nav> --}}

    <header>
        <!-- top header -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-inline text-lg-right text-center">
                            <li class="list-inline-item">
                                <img class="ico-img" src="{{ asset('frontend/images/iso-9001-2008-certified.png') }}"
                                    alt="iso 9001:2008 certified company">
                            </li>
                            <li class="list-inline-item">
                                <a href="callto:1234565523">Call Us Now:
                                    <span class="ml-2">+88-02333342065</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="mailto:info@companyname.com">info@bms-japanbdrope.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav bar -->
        @if (url('/') === request()->url())
            <div class="navigation">
            @else
                <div class="navigation custom-nav">
        @endif
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('front')}}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto bg-light bg-transparent-md">

                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('front')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('aboutus') }}">About Us</a>
                                <a class="dropdown-item" href="{{ route('companydes') }}">company Description</a>
                                <a class="dropdown-item" href="{{ route('presidentsp') }}">President Speech</a>
                                <a class="dropdown-item" href="{{ route('mission') }}">Mission</a>
                                <a class="dropdown-item" href="{{ route('vission') }}">Vission</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                All Products
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('allproducts') }}">All</a>
                                <a class="dropdown-item" href="">Rope</a>
                                <a class="dropdown-item" href="">Twin</a>
                                <a class="dropdown-item" href="">Hessian</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('pGallery')}}">Photo</a>
                                <a class="dropdown-item" href="">Video</a>
                                <a class="dropdown-item" href="">Achievement</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('career')}}">Career</a>
                        </li>
                        {{-- <li class="nav-item">
                                <a class="nav-link" href="contact.html">Media Center</a>
                            </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Contact
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('bmscompany')}}">BMS Company Limited</a>
                                <a class="dropdown-item" href="{{route('bmsrope')}}">BMS Rope Company Limited</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Mother company
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('companyprofile') }}">Company Profile</a>
                                <a class="dropdown-item" href="{{ route('companyhistory') }}">History</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Ebrochure
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('allbrochure') }}">All</a>
                                @foreach (\App\Models\Ebrochure::all() as $ebrochure)
                                    <a class="dropdown-item"
                                        href="{{ asset($ebrochure->upload_pdf) }}">{{ $ebrochure->title }}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </div>
    </header>
    {{-- {{ asset('assets/images/design-hero.jpg') }} --}}
