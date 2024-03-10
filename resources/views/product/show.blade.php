@extends('layout.app')

@section('pageTitle', trans('Show Product'))
@section('pageSubTitle', trans('Show'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4>{{$product->title}}</h4>
                            <img src="{{asset($product->featured_image)}}" class="img=fluid">
                            <div class="row">
                                <div class="col-md-12 my-2">
                                    <strong>Product Description</strong>
                                    <p style="text-align: justify;line-heigt:1.5">{!!$product->product_des!!}</p>
                                </div>
                                <div class="col-md-4">
                                    <h6>Technical Specification</h6>
                                    {!!$product->tech_spec!!}
                                </div>
                                <div class="col-md-4">
                                    <h6>Technical Specification</h6>
                                    {!!$product->che_res!!}
                                </div>
                                <div class="col-md-4">
                                    <h6>Technical Specification</h6>
                                    {!!$product->pro_info!!}
                                </div>
                                <div class="col-md-12">
                                    <h6>Technical Specification</h6>
                                    {!!$product->srbsc!!}
                                </div>
                                <div class="col-md-12">
                                    <h6>Image Gallery</h6>
                                </div>
                                @if ($product->ebrochure)
                                <div class="col-md-2">
                                    <a class="btn btn-secondary d-inline" href="{{asset($product->ebrochure->upload_pdf)}}">View PDF</a>
                                </div>   
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

