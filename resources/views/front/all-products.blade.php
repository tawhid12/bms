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

    {{-- <section class="head-bread">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">About Us</a></li>
                        </ol>
                    </nav>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="all_part" style="margin-top: 60px">
        <div class="container product">
            <div class="row ">
                <div class="col-md-12 ">
                    <ul class="list-inline simplefilter">
                        <!-- For filtering controls add -->
                        <li class="active" data-filter="all"> All items </li>
                        @forelse ($categories as $c)
                            <li data-filter="{{ $c->id }}">{{ $c->cat_name }}</li>
                        @empty
                        @endforelse
                    </ul>
                </div>
                <div class="mt-5">
                    <div class="filtr-container" style="padding: 0px; position: relative; height: 912px;">
                        <div class="text-center">
                            @forelse ($categories as $key => $category)
                                <div class="col-12 col-md-3 filtr-item" data-category="{{$category->id}}" data-sort="value"
                                    style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms; pointer-events: auto;">
                                    @forelse($category->products as $product)
                                        <div class="latest-slider-img w-100">
                                            <img src="{{ asset('frontend/images/products/braid-rop/1.jpg') }}"
                                                alt="" class="img-fluid w-100 h-100 img-1">
                                            <img src="{{ asset('frontend/images/products/braid-rop/2.jpg') }}"
                                                alt="" class="img-fluid w-100 h-100 img-2">
                                            <div class="ovr-top text-center">
                                                <h3>{{ $product->title }}</h3>
                                                <a href="{{route('singleproduct',$product->slug)}}">Product details<i class="fa fa-share-square-o"></i></a>
                                            </div>
                                        </div>
                                        <h4>{{ $product->title }}</h4>
                                    @empty
                                    @endforelse
                                </div>
                            @empty
                            <h4>No Product Found</h4>
                            @endforelse
                            {{-- <div class="col-12 col-md-3 filtr-item" data-category="1" data-sort="value"
                                style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms; pointer-events: auto;">
                                <div class="latest-slider-img">
                                    <img src="{{ asset('frontend/images/products/braid-rop/1.jpg') }}" alt=""
                                        class="img-fluid w-100 h-100 img-1">
                                    <img src="{{ asset('frontend/images/products/braid-rop/2.jpg') }}" alt=""
                                        class="img-fluid w-100 h-100 img-2">
                                    <div class="ovr-top text-center">
                                        <h3>Braid Rope</h3>
                                        <a href=""><i class="fa fa-eye"></i> </a>
                                        <a href="">Product details<i class="fa fa-share-square-o"></i></a>
                                    </div>
                                </div>
                                <h4>Braid Rope</h4>
                            </div>
                            <div class="col-12 col-md-3 filtr-item" data-category="2" data-sort="value"
                                style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms; pointer-events: auto;">
                                <div class="latest-slider-img">
                                    <img src="{{ asset('frontend/images/products/pp-twine/1.jpg') }}" alt=""
                                        class="img-fluid w-100 h-100 img-1">
                                    <img src="{{ asset('frontend/images/products/pp-twine/2.jpg') }}" alt=""
                                        class="img-fluid w-100 h-100 img-2">
                                    <div class="ovr-top text-center">
                                        <h3>PP Twine</h3>
                                        <a href=""><i class="fa fa-eye"></i> </a>
                                        <a href="">Product details<i class="fa fa-share-square-o"></i></a>
                                    </div>
                                </div>
                                <h4>PP Twine</h4>
                            </div> --}}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        var filterizd = $('.filtr-container').filterizr({
            //options object
        });
    </script>
@endpush
