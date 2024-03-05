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
                            <li class="breadcrumb-item active" aria-current="page"><a href="">Company Description</a>
                            </li>
                        </ol>
                    </nav>
                    <h2>Company Description</h2>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="all_part about-bg mt-5">
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
                    <div class="about-content about-bottom-content" id="name-list">
                        <h2>Company History</h2>
                        <p>
                            1943 April 18 Establishment<br>
                            1950 October 25 Nakajima Kihei Appointed representatives<br>
                            1975 January Head office relocation<br>
                            1982 October Nakajima Kikuo appointed representatives<br>
                            1993 December BMS Co., Ltd. Establishment<br>
                            2000 December BMS Rope Co., Ltd. Establishment<br>
                            2006 January Nakajima Kiyonori appointed representative<br>
                            2007 July Kyushu Branch office opened<br>
                        </p>

                    </div>
                </div>



            </div>
        </div>
    </section>


@endsection
@push('scripts')
    <script></script>
@endpush
