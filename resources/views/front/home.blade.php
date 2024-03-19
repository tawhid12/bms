@extends('front.layout.front-layout')
@section('pageTitle', 'Marusan Group')
@section('meta')
@endsection
@section('pageSubTitle', ' Career')
@push('styles')
    <style>
    </style>
@endpush
@section('content')
    <section>
        <div class="hero-slider position-relative">
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('frontend/images/slide/1.png') }});" data-icon="ti-comments"
                data-text="Consultation">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".1"></h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".5">
                                </h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".9">
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about.html" class="btn btn-outline text-uppercase"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('frontend/images/slide/2.png') }});" data-icon="ti-bar-chart"
                data-text="Marketting">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".1"></h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".5">
                                </h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".9">
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about.html" class="btn btn-outline text-uppercase"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('frontend/images/slide/3.png') }});" data-icon="ti-money"
                data-text="Finance">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".1"></h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".5">
                                </h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".9">
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about.html" class="btn btn-outline text-uppercase"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('frontend/images/slide/4.png') }});" data-icon="ti-package"
                data-text="Human Resources">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".1"></h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".5">
                                </h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".9">
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about.html" class="btn btn-outline text-uppercase"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('frontend/images/slide/5.png') }});" data-icon="ti-package"
                data-text="Human Resources">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".1"></h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".5">
                                </h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".9">
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about.html" class="btn btn-outline text-uppercase"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('frontend/images/slide/6.png') }});" data-icon="ti-package"
                data-text="Human Resources">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".1"></h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5"
                                    data-animation-in="fadeInLeft" data-delay-in=".5">
                                </h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".9">
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about.html" class="btn btn-outline text-uppercase"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-company">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="col-3 col-md-2">
                            <div style="border:2px solid #0d1f41;"></div>
                        </div>
                        <div class="col-9 col-md-10 ">
                            <h4 class="m-0" style="color: #0d1f41;font-weight:bolder">Marusan Group</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <p class="my-2">
                            30 years of experience in Rope, Twine, and Hessian Cloth-making
                        </p>
                        <p class="my-2">
                            100% Japanese-owned company that is a subsidiary of Marusan Sangyo Co., Ltd, Japan.
                        </p>
                        <p class="my-2">
                            Marusan Sangyo Company Limited is the mother company of BMS and BMS Rope which is located in
                            Tochigi
                            City, Japan. BMS and BMS Rope are leading manufacturers and exporters of high-quality rope,
                            twine
                            and
                            hessian cloth for a wide range of industries and applications.
                        </p>
                        <a href="" class="mt-5 btn btn-primary px-5 rounded" style="background-color: #0d1f41">Read
                            More</a>
                    </div>
                </div>
                <div class="col-md-6 mt-2 mt-md-0">
                    {{-- {{ asset('assets/images/design-1.jpg') }} --}}
                    <img src="{{ asset('frontend/images/Jute.png') }}" class="img-thumbnail">
                </div>
            </div>
        </div>

    </section>
    <section class="mb-3">
        <div class="container-fluid">
            <div class="row about-text" id="features">
                <div class="" id="feature-image">
                    <!--background image will be here--><img src="" alt="">
                </div>
                <div class="col-12 col-md-6 about-part">
                    <div class="row">
                        <div class="col-12 col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/1.png') }}">30 years of experience
                                    in
                                    Rope, Twine, and
                                    Hessian Cloth Making.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/2.png') }}">100% product supply in
                                    Asia, Europe, and America
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/3.png') }}">Two factories with
                                    top-tier production
                                    capabilities.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/4.png') }}">Producing 19 tons of
                                    ropes, twine and hessian
                                    cloths daily for
                                    consistent supply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 about-part wow zoomIn" style="visibility: hidden; animation-name: none;">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/5.png') }}">Employing advanced
                                    Japanese and Chinese
                                    technology with highly
                                    efficient machinery.</p>
                            </div>
                        </div>
                        <div class="col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/6.png') }}">ISO 9001:2015
                                    certification attests to our
                                    commitment to quality
                                    management standards.</p>
                            </div>
                        </div>
                        <div class="col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/7.png') }}">Sustainable and
                                    environmentally conscious
                                    natural products</p>
                            </div>
                        </div>
                        <div class="col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/8.png') }}">Strategic partner
                                    actively
                                    contributing to the
                                    fulfilment of
                                    Sustainable Development Goals (SDG) targets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe width="100%" height="500"
                        src="https://www.youtube.com/embed/KLuTLF3x9sA?si=hDqN-swbXBCwdiMP" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="product-section p-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all_part">
                        <h2 class="text-center">Our Products</h2>
                        <p class="text-center">Quality is our first priority. Our products are known for their high quality
                            and maximum
                            usability</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($all_categories as $cat)
                <div class="col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                    <a href="">
                        @if ($cat->upload_file)
                        <img src="{{asset($cat->upload_file)}}" alt=""
                            class="img-thumbnail h-100">
                        @else
                        <img src="https://placehold.co/306x410" alt=""
                            class="img-thumbnail h-100">
                        @endif
                        </a>
                    <h4>{{$cat->cat_name}}</h4>
                </div>
                @empty
                @endforelse
            </div>
            <div class="row d-flex justify-content-center">
                <a href="{{route('allproducts')}}" class="pro-btn d-flex justify-content-center">View all products</a>
            </div>
        </div>
    </section>
    <section class="featured-product p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cover-title">
                        <h1>Our Natural and Synthetic Rope</h1>
                    </div>
                    <div class="specification-img">
                        <img src="{{ asset('frontend/images/rope-bg.jpg') }}" class="" alt="fishing net items">
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($rope_products as $product)
                <div class="col-sm-6 wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <div class="about-image-dl">
                        <a href="{{route('singleproduct',$product->slug)}}">
                            <img src="{{ asset($product->featured_image) }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 wow slideInRight" style="visibility: hidden; animation-name: none;">
                    <div class="about-content-dl">
                        <h2><a href="{{route('singleproduct',$product->slug)}}">{{$product->title}}</a></h2>
                        <p>{{$product->product_des}}</p>
                        <div><a href="{{route('singleproduct',$product->slug)}}" class="pro-btn">View details</a></div>
                    </div>
                </div>
                @empty
                    
                @endforelse

            </div>

            <div class="row">
                <div class="cover-title">
                    <h1>Our TWINE PRODUCTS</h1>
                </div>
                <div class="specification-img ">
                    <img src="{{ asset('frontend/images/twine-bg.png') }}" alt="fishing net items">
                </div>
            </div>
            <div class="row">
                @forelse ($twin_products as $product)
                <div class="col-sm-6 wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <div class="about-image-dl">
                        <a href="{{route('singleproduct',$product->slug)}}">
                            <img src="{{ asset($product->featured_image) }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 wow slideInRight" style="visibility: hidden; animation-name: none;">
                    <div class="about-content-dl">
                        <h2><a href="{{route('singleproduct',$product->slug)}}">{{$product->title}}</a></h2>
                        <p>{{$product->product_des}}</p>
                        <div><a href="{{route('singleproduct',$product->slug)}}" class="pro-btn">View details</a></div>
                    </div>
                </div>
                @empty
                    
                @endforelse
            </div>
            <div class="row">
                <div class="cover-title">
                    <h1>Our Hessian Cloth PRODUCTS</h1>
                </div>
                <div class="specification-img ">
                    <img src="{{ asset('frontend/images/hessian-cloth.jpg') }}" alt="fishing net items">
                </div>
            </div>
            <div class="row">
                @forelse ($hessian_products as $product)
                <div class="col-sm-6 wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <div class="about-image-dl">
                        <a href="{{route('singleproduct',$product->slug)}}">
                            <img src="{{ asset($product->featured_image) }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 wow slideInRight" style="visibility: hidden; animation-name: none;">
                    <div class="about-content-dl">
                        <h2><a href="{{route('singleproduct',$product->slug)}}">{{$product->title}}</a></h2>
                        <p>{{$product->product_des}}</p>
                        <div><a href="{{route('singleproduct',$product->slug)}}" class="pro-btn">View details</a></div>
                    </div>
                </div>
                @empty
                    
                @endforelse

            </div>
        </div>
    </section>


@endsection
@push('scripts')
    <script></script>
@endpush
