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
            <div class="specification-img" style="max-height:800px"><img src="{{asset('frontend/images/about-us/1.jpg')}}"
                alt=""></div>
          </div>
    
        </div>
      </section>
    <section class="all_part mt-5">
        <div class="container">
          <div class="row">
    
            <div class="col-sm-12 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
              <h2>Company Profile</h2>
              <p>Company Established: 1943
                Foundation: OCT 3,1950<br>
                Initial Capital: JPY 50,000,000<br>
                President : Kiyonori Nakajima<br>
                Employee: 100+<br>
                Detail of the work: Producing and selling DIY rope, materials for industry,<br>
                agricultural goods, landscape, gardening goods and products for daily use.<br>
                Head Office: 912 Nonaka Cho, Tochigi City, Tochigi Prefecture, Japan.<br>
                Kyusyu Branch Office: 500 Tsutsumi, Asakura City, Fukuoka Prefecture, Japan.<br>
                Factory-1: BMS Co.,Ltd. (Bangladesh)<br>
                Factory-2: BMS Rope Co.,Ltd. (Bangladesh)<br>
                Trade Connection: Homecenter JA, Agricultural Co-op, Gardening Union,<br>
                Trading companies.<br>
                Overseas Cooperator: Bangladesh, Thailand, Sri Lanka and Korea, etc.<br>
              </p>
            </div>
    
    
    
    
          </div>
        </div>
      </section>
    
@endsection
@push('scripts')
    <script></script>
@endpush
