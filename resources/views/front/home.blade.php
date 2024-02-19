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

    {{-- <section class="hidden-xs">
        <div class="fullscreenbanner">
            <div class="banner">
                <ul>
                    @forelse ($slider as $slide)
                    <li data-transition="curtain-3" data-slotamount="15" data-masterspeed="500">
                        <img src="{{asset($slide->image)}}" alt="{{$loop->index}}" data-bgfit="cover"class="img-responsive">
                    </li>
                    @empty
                    @endforelse
                </ul>
            </div>

        </div>
    </section>

    <section class="icon-bar icon-bar-right" id="overlay-icon">
        <div class="row wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
            <ul>
                <li><a href="">Twine<img src="https://dummyimage.com/105x105/2f9e7d/fff"></a></li>

                <li><a href="">Rope<img src="https://dummyimage.com/105x105/2f9e7d/fff"></a></li>
                <li><a href="">Hessian Cloth<img src="https://dummyimage.com/105x105/2f9e7d/fff"></a></li>
            </ul>
        </div>
    </section>
    <section class="all_part about-bg" id="overview">
        <div class="container text-center">
            <div class="row about-text">
                <div class="banner-overlay-text">
                    <h1></h1>
                </div>
                <h2>Marusan Group</h2>
                <p class="mx-0">30 years of experience in Rope, Twine, and Hessian Cloth-making</p>
                <p class="mx-0">100% Japanese-owned company that is a subsidiary of Marusan Sangyo Co., Ltd, Japan.
                </p>
                <p>
                    Marusan Sangyo Company Limited is the mother company of BMS and BMS Rope which is located in Tochigi
                    City,
                    Japan. BMS and BMS Rope are leading manufacturers and exporters of high-quality rope, twine and
                    hessian cloth
                    for a wide range of industries and applications. With over 30 years of experience in the industry,
                    we have
                    established ourselves as a trusted name in rope manufacturing, known for our commitment to
                    excellence and
                    customer satisfaction.</p>
                <p>We specialise in producing various types of ropes, twine, and hessian cloths for a wide range of
                    applications.
                    These products are typically made by twisting or braiding strands of fibres together to create a
                    strong and
                    durable product. We use different materials such as natural fibres (like jute, cotton and sisal),
                    synthetic
                    fibres (like PE, PP, nylon, polyester etc.), or a combination.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row about-text" id="features">
                <div class="specification-img" id="feature-image">
                    <!--background image will be here--><img src="" alt="">
                </div>
                <div class=" col-sm-6 about-part">
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/1.png')}}">30 years of experience in Rope, Twine, and
                            Hessian Cloth Making.
                        </p>
                    </div>
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/2.png')}}">100% product supply in Asia, Europe, and America
                        </p>
                    </div>
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/3.png')}}">Two factories with top-tier production
                            capabilities.</p>
                    </div>
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/4.png')}}">Producing 19 tons of ropes, twine and hessian
                            cloths daily for
                            consistent supply.</p>
                    </div>
                </div>
                <div class=" col-sm-6 about-part">
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/5.png')}}">Employing advanced Japanese and Chinese
                            technology with highly
                            efficient machinery.</p>
                    </div>
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/6.png')}}">ISO 9001:2015 certification attests to our
                            commitment to quality
                            management standards.</p>
                    </div>
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/7.png')}}">Sustainable and environmentally conscious
                            natural products</p>
                    </div>
                    <div class="feature-icon">
                        <p class="bol"><img src="{{asset('frontend/images/icn/8.png')}}">Strategic partner actively contributing to the
                            fulfilment of
                            Sustainable Development Goals (SDG) targets.</p>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <section class="about-company">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-1 px-0">
                            <div style="border:2px solid #0d1f41;"></div>
                        </div>
                        <div class="col-md-11">
                            <h4 class="m-0" style="color: #0d1f41;font-weight:bolder">Marusan Group</h4>
                        </div>
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
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/design-1.jpg') }}" class="w-100 img-fluid">
                </div>
            </div>
        </div>

    </section>
    <section class="my-5">
        <div class="container-fluid">
            <div class="row about-text" id="features">
                <div class="" id="feature-image">
                    <!--background image will be here--><img src="" alt="">
                </div>
                <div class=" col-md-6 about-part">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/1.png') }}">30 years of experience
                                    in
                                    Rope, Twine, and
                                    Hessian Cloth Making.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/2.png') }}">100% product supply in
                                    Asia, Europe, and America
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/3.png') }}">Two factories with
                                    top-tier production
                                    capabilities.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/4.png') }}">Producing 19 tons of
                                    ropes, twine and hessian
                                    cloths daily for
                                    consistent supply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 about-part">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/5.png') }}">Employing advanced
                                    Japanese and Chinese
                                    technology with highly
                                    efficient machinery.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/6.png') }}">ISO 9001:2015
                                    certification attests to our
                                    commitment to quality
                                    management standards.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-icon">
                                <p class="bol"><img src="{{ asset('frontend/images/icn/7.png') }}">Sustainable and
                                    environmentally conscious
                                    natural products</p>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                <div class="col-md-3 wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <a href=""><img src="{{ asset('frontend/images/product/p1.jpg') }}" alt="rope"
                            class="img-thumbnail h-100"></a>
                    <h4>Rope</h4>
                </div>
                <div class="col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                    <a href=""><img src="https://placehold.co/306x410" alt=""
                            class="img-thumbnail h-100"></a>
                    <h4>Twin</h4>
                </div>
                <div class="col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                    <a href=""><img src="https://placehold.co/306x410" alt=""
                            class="img-thumbnail h-100"></a>
                    <h4>Hessian</h4>
                </div>
                <div class="col-md-3 wow zoomIn" style="visibility: hidden; animation-name: none;">
                    <a href=""><img src="https://placehold.co/306x410" alt=""
                            class="img-thumbnail h-100"></a>
                    <h4>Hessian</h4>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <a href="" class="pro-btn d-flex justify-content-center">View all products</a>
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
                <div class="col-sm-6 wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <div class="about-image-dl">
                        <a href="single-product.html">
                            <img src="{{ asset('frontend/images/product/rope-feature.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 wow slideInRight" style="visibility: hidden; animation-name: none;">
                    <div class="about-content-dl">
                        <h2>Nylon Rope</h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa excepturi voluptates voluptas
                            maiores
                            nostrum? Voluptates modi magnam reiciendis! Deserunt consequuntur laboriosam, dolores velit
                            inventore qui
                            quisquam unde amet totam ipsam.</p>
                        <div><a href="single-product.html" class="pro-btn ">View details</a></div>
                    </div>
                </div>
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
                <div class="col-sm-6 wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <div class="about-image-dl">
                        <a href="images/nylon-polyester-gill-net2.jpg">
                            <img src="{{ asset('frontend/images/product/jute-twin.jpg') }}" alt="Multifilament gill net">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 wow slideInRight" style="visibility: hidden; animation-name: none;">
                    <div class="about-content-dl">
                        <h2>Jute Twin</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa excepturi voluptates voluptas
                            maiores
                            nostrum? Voluptates modi magnam reiciendis! Deserunt consequuntur laboriosam, dolores velit
                            inventore qui
                            quisquam unde amet totam ipsam.
                        </p>
                        <div><a href="single-product.html" class="pro-btn ">View details</a></div>
                    </div>
                </div>
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
                <div class="col-sm-6 wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <div class="about-image-dl">
                        <a href="images/nylon-polyester-gill-net2.jpg">
                            <img
                                src="{{ asset('frontend/images/product/hesian-cloth.jpg') }}" alt="Multifilament gill net">
                            </a>
                    </div>
                </div>
                <div class="col-sm-6 wow slideInRight" style="visibility: hidden; animation-name: none;">
                    <div class="about-content-dl">
                        <h2>Hessian Cloth</h2>
                        <p>Hessian cloth, made from coarse jute fibers, is a versatile material known for its natural
                            tan color and
                            rustic texture. Widely used in packaging, construction, crafts, and agriculture, hessian is
                            appreciated
                            for its breathability and biodegradability. Its applications range from sturdy packaging to
                            decorative DIY
                            projects and temporary construction solutions. Hessian cloth's distinctive characteristics
                            make it a
                            popular choice in various industries for both practical and aesthetic purposes.</p>
                        <div><a href="" class="pro-btn ">View details</a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer id="top-footer"> <a class="bc2top" style="display: none;"><i class="fa fa-arrow-up"
                aria-hidden="true"></i></a>
        <div class="container">

            <div class="row">
                <div class="  col-sm-3 footer-left wow slideInUp" id="company-list"
                    style="visibility: hidden; animation-name: none;">
                    <h2>Our Concerns</h2>
                    <ul>
                        <li><a href=""><i class="fa fa-angle-right"></i>Bms Company Limited</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i>Bms Rope Company Limited</a></li>
                    </ul>
                </div>
                <div class="  col-sm-3 footer-left wow slideInRight" style="visibility: hidden; animation-name: none;">
                    <h2>Head Office</h2><br>
                    <p>Marusan Sangyo Co. Ltd.</p>
                    <p><i class="fa fa-home"></i>912-nonaka cho, tochigi city, Tochigi prefecture, japan.</p>
                    <!-- <a href=""><i class="fa fa-envelope-o"></i></a> -->
                    <p><i class="fa fa-mobile-phone"></i>0282-24-8803 | <i class="fa fa-fax"></i>0282-24-8803</p>
                </div>
                <div class=" col-sm-3  footer-left wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    <h2>BMS Company Limited</h2>
                    <p></p>
                    <p><i class="fa fa-home"></i>Plot No. 1~ 6. Sector -4, C.E.P.Z. Chittagong, Bangladesh.</p>
                    <!-- <a href=""><i class="fa fa-envelope-o"></i>info@bms-rope.com</a><br><br> -->
                    <p><i class="fa fa-mobile-phone"></i>88-02333341010 | <i class="fa fa-fax"></i>88-02333340067 </p>
                </div>
                <div class=" col-sm-3  footer-left wow slideInLeft" style="visibility: hidden; animation-name: none;">

                    <h2>BMS Rope Company. Ltd.</h2>
                    <p><i class="fa fa-home"></i>Plot No. 54~ 55. Sector -7, C.E.P.Z. Chittagong, Bangladesh.</p>
                    <!-- <a href=""><i class="fa fa-envelope-o"></i></a> -->
                    <p><i class="fa fa-mobile-phone"></i>88-02333342065 | <i class="fa fa-fax"></i>88-02333342064</p>
                </div>




            </div>
        </div>
    </footer>
    <footer id="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <p>Copyright © 2023 || BMS Rope</p>
                </div>
            </div>
        </div>
    </footer>

@endsection
@push('scripts')
    <script></script>
@endpush
