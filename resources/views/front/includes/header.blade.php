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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                <a class="dropdown-item" href="{{ route('companydes') }}">Company Description</a>
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
                                @forelse ( \App\Models\Category::all() as $c )
                                <a class="dropdown-item category" href="{{ route('productbycat',$c->id) }}" style="text-transform: uppercase">{{$c->cat_name}}</a>
                                @empty
                                    
                                @endforelse
                               
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
                                @foreach (\App\Models\Ebrochure::orderBy('serial')->get() as $ebrochure)
                                    <a class="dropdown-item"
                                        href="{{ asset($ebrochure->upload_pdf) }}" target="_blank">{{ $ebrochure->title }}</a>
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
