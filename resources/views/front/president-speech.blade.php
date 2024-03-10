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

    <section class="all_part mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                    <div class="about-image">
                        <img src="https://placehold.co/416x640" alt="Chairman">
                    </div>
                </div>
                <div class="col-sm-6 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <p class="about-content about-bottom-content">
                    <h2>Chairman's Message</h2>
                    <p>Under our main theme of "Offering the best products for people working on this earth, and for
                        their sphere of activity", we zealously continue making effects to provide the highest quality
                        products possible. We are currently managing the production and sales of manufactured
                        goods for a variety of industries. These products include agricultural materials, gardening
                        materials and our specialities, the small winding rope for "Do-It-Yourself" rope. We are not
                        just limited to manufacturing these products.</p>
                    </p>
                    <p>We are a multinational business firm, always searching for new enterprises. The character of
                        our company prides itself on flexibility and friendly service.
                        The names of our products symbolize these characters: "A dokkiri binder twine", "A small
                        winding rope" "A palm peat", etc.</p>
                    <p> I feel strongly about competing on a global scale and continuously growing at a rapid pace. See
                        for yourself.
                        We are here to serve you.
                    </p>
                    <p>Chariman Name<br>Chairman, MARUSAN GROUP</p>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script></script>
@endpush
