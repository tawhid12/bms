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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Career</h2>
                </div>
                @forelse ($careers as $c)
                <div class="col-md-12 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            {{-- <strong class="d-inline-block mb-2 text-primary">World</strong> --}}
                            <h3 class="mb-0">{{$c->car_title}}</h3>
                            <div class="mb-1 text-muted">{{ $c->created_at->diffForHumans() }}</div>
                            <p class="card-text mb-auto">{!! $c->car_des !!}</p>
                            {{-- <a href="#" class="stretched-link">Continue reading</a> --}}
                        </div>
                        {{-- <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div> --}}
                    </div>
                </div>
                @empty
                    <h4>No Career Post Found</h4>
                @endforelse
               
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script></script>
@endpush
