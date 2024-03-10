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
    <section class="all_part about-bg mt-5 py-5">
        <div class="container text-center">
            <div class="row about-text">
                <div class="specification-img" style="max-height:800px"><img
                        src="{{ asset('frontend/images/about-us/1.jpg') }}" alt=""></div>
            </div>

        </div>
    </section>
    <section class="all_part">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <h2>Background</h2>
                    <p style="line-height: 1.5; text-align:justify;">Marusan Sangyo Company Limited is the mother company of BMS and BMS Rope which is located in Tochigi
                        City,
                        Japan. BMS and BMS Rope are leading manufacturers and exporters of high-quality rope, twine and
                        hessian
                        cloth for a wide range of industries and applications. With over 30 years of experience in the
                        industry, we
                        have established ourselves as a trusted name in rope manufacturing, known for our commitment to
                        excellence
                        and customer satisfaction.
                        We specialise in producing various types of ropes, twine, and hessian cloths for a wide range of
                        applications. These products are typically made by twisting or braiding strands of fibres together
                        to create
                        a strong and durable product. We use different materials such as natural fibres (like jute, cotton
                        and
                        sisal), synthetic fibres (like PE, PP, nylon, polyester etc.), or a combination.
                    </p>
                </div>




            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script></script>
@endpush
