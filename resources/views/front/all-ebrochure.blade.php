@extends('front.layout.front-layout')
@section('pageTitle', 'Marusan Group')
@section('meta')
@endsection
@section('pageSubTitle', ' Ebrochure')
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ebrochure</h2>
                </div>
                @forelse($ebrochures as $e)
                    <div class="col-12 col-md-3">
                        <img src="{{ asset('frontend/images/products/braid-rop/1.jpg') }}" class="img-fluid">
                        <h3><a href="{{ asset($e->upload_pdf) ?? '' }}">{{ $e->title }}<i
                                    class="fa fa-share-square-o"></i></a></h3>
                    </div>
                @empty
                    <div class="col-md-12 my-3">
                        <h4>No Brochure Found</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection