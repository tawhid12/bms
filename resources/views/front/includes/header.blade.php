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



            </nav>
        </div>
        </div>
    </header>
    {{-- {{ asset('assets/images/design-hero.jpg') }} --}}
