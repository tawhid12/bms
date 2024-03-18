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

    <section class="all_part" style="margin-top: 60px">
        <div class="container product">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline simplefilter">
                        <!-- For filtering controls add -->
                        <li class="active" data-filter="*"> All items </li>
                        @forelse ($categories as $c)
                            <li data-filter=".{{ $c->id }}">{{ $c->cat_name }}</li>
                        @empty
                        @endforelse
                    </ul>
                </div>
                <div class="w-100">
                    <div class="" style="padding: 0px; position: relative;">
                        @forelse ($categories as $key => $category)
                            @forelse($category->products as $product)
                                <div class="col-12 col-md-3 {{$category->cat_name}}" data-category="{{$category->id}}" data-sort="value">
                                    <div class="latest-slider-img">
                                        <img src="{{ asset($product->featured_image) }}" alt="" class="img-fluid w-100 h-100 img-1">
                                        <img src="{{ asset($product->featured_image_two) }}" alt="" class="img-fluid w-100 h-100 img-2">
                                        <div class="ovr-top text-center">
                                            <h3>{{ $product->title }}</h3>
                                            <a href="{{route('singleproduct',$product->slug)}}">Product details<i class="fa fa-share-square-o"></i></a>
                                        </div>
                                    </div>
                                    <h4>{{ $product->title }}</h4>
                                </div>
                            @empty
                            @endforelse
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
<script src="{{ asset('frontend/js/isotopev3.0.6.pkgd.min.js')}}"></script>	
<script>
    $(document).ready(function($){
        "use strict";
        //To Initialize the ISO Tope
        $('.project-list').isotope();

        $('.project-titles li').on('click',function(){
            $('.project-titles li').removeClass('active');
            $(this).addClass('active');
            
            var selector = $(this).attr('data-filter');
            $('.project-list').isotope({
                filter:selector
            });
        });
    }(jQuery));
</script>
@endpush
