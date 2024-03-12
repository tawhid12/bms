@extends('front.layout.front-layout')
@section('pageTitle', 'Marusan Group')
@section('meta')
@endsection
@section('pageSubTitle', ' Career')
@push('styles')
    <style>
        .table table {
            font-size: 14px;
        }

        .table table,
        .table tr,
        .table td {
            border: 1px solid #dee2e6;
        }

        .table td {
            padding: 0.25rem !important;
        }
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
    <div class="container">
        <section class="all_part" style="margin-top:70px">
            <div class="container-product-full">
                <div class="row">

                    {{-- <div class="col-md-3 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="left-sidebar">
                            <div class="container">

                                <h3>Other Products</h3>
                                <ul>
                                    <li>
                                        <div class="column">
                                            <a href=""><img src="{{ asset('frontend/images/twine-bg.png') }}"
                                                    alt="" class="img-3"></a>
                                            <h4>Twine</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="column">
                                            <a href=""><img src="{{ asset('frontend/images/hessian-cloth.jpg') }}"
                                                    alt="" class="img-3"></a>
                                            <h4>Hessian Cloth</h4>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-12 specification wow slideInRight"
                        style="visibility: visible; animation-name: slideInRight;">
                        <h2>{{$product->title}}</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="specification-img ">
                                    <a href=""><img src="{{ asset('frontend/images/product/rope-feature.jpg') }}"
                                            alt=""></a>
                                </div>
                                <p>{!! html_entity_decode($product->product_des) !!}</p>
                                <div class="table-cont">
                                    <h3>Chemical Resistance</h3>
                                    {!! html_entity_decode($product->che_res) !!}
                                    <h3>Production information</h3>
                                    {!! html_entity_decode($product->pro_info) !!}
                                    <h3>Feature</h3>
                                    {!! html_entity_decode($product->feature) !!}
                                    <button class="btn btn-sm btn-secondary d-block my-2"><i class="px-2 fa fa-file-pdf-o"
                                            aria-hidden="true"></i>Download Details</button>
                                    <h3>Get In Touch</h3>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="table-cont">
                                    <h3>Technical Specification</h3>
                                    {!! html_entity_decode($product->tech_spec) !!}
                                </div>
                                <h3>Product Photos</h3>
                                <div class="row">
                                    <div class="gallary">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div id="images">
                                                    @forelse ($product->product_images as $p)
                                                    <div class="item">
                                                        <a href=""><img
                                                                src="{{ asset($p->image) }}"></a>
                                                    </div>
                                                    @empty
                                                        <h4>No Image found</h4>
                                                    @endforelse
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                    <h3>Sisal Rope Breaking Strength chart</h3>
                                    {!! html_entity_decode($product->srbsc) !!}
                                </div>
                            </div>
                        </div>









                    </div>

                </div>
            </div>
        </section>
    </div>


@endsection
@push('scripts')
@endpush
