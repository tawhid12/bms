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
    <div class="container">
        <section class="all_part" style="margin-top:70px">
            <div class="container-product-full">
                <div class="row">
    
                    <div class="col-md-3 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="left-sidebar">
                            <div class="container">
    
                                <h3>Other Products</h3>
                                <ul>
                                    <li>
                                        <div class="column">
                                            <a href=""><img src="{{asset('frontend/images/twine-bg.png')}}" alt=""
                                                    class="img-3"></a>
                                            <h4>Twine</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="column">
                                            <a href=""><img src="{{asset('frontend/images/hessian-cloth.jpg')}}"
                                                    alt="" class="img-3"></a>
                                            <h4>Hessian Cloth</h4>
                                        </div>
                                    </li>
    
    
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-9 specification wow slideInRight"
                        style="visibility: visible; animation-name: slideInRight;">
                        <h2>Polyester Rope</h2>
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="specification-img ">
                                    <a href=""><img src="{{asset('frontend/images/product/rope-feature.jpg')}}"
                                            alt=""></a>
                                </div>
                                <p>Our rope stands out for its exceptional tensile strength, engineered from
                                    high-density polyethyene (HDPE), ensuring reliable performance in the toughest
                                    conditions. Its weather-resistant design makes it impervious to UV rays, moisture,
                                    and extreme temperatures, guaranteeing longevity and consistency. The rugged
                                    construction provides excellent abrasion resistance, making it a go-to choice for
                                    heavy-duty applications. From marine endeavours to construction sites, camping, and
                                    more, our versatile PE Rope is a dependable solution. Its smooth texture ensures
                                    easy handling, catering to both professionals and enthusiasts.</p>
                                <div class="table-cont">
                                    <h3>Chemical Resistance</h3>
                                    <table class="table table-bordered table-sm" style="font-size: 14px !important;">
                                        <tbody>
                                            <tr>
                                                <td>Acids</td>
                                                <td>Excellent</td>
                                            </tr>
                                            <tr>
                                                <td>Alkalis</td>
                                                <td>Excellent</td>
                                            </tr>
                                            <tr>
                                                <td>Oil/ Gas</td>
                                                <td>Very Good</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h3>Production information</h3>
                                    <table class="table table-bordered table-sm" style="font-size: 14px !important;">
                                        <tbody>
                                            <tr>
                                                <td>Brand</td>
                                                <td>BMS and BMS Rope</td>
                                            </tr>
                                            <tr>
                                                <td>Certification</td>
                                                <td>ISO 9001:2015</td>
                                            </tr>
                                            <tr>
                                                <td>Manufactured by</td>
                                                <td>BMS and BMS Rope Co., Ltd</td>
                                            </tr>
                                            <tr>
                                                <td>Daily production capacity</td>
                                                <td>19 Tons</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h3>Feature</h3>
                                    <table class="table table-bordered table-sm" style="font-size: 14px !important;">
                                        <tbody>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Natural Appearance</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Biodegradable</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Soft and Pliable</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Good Tensile Strength</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Versatility</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Knot Holding Capacity</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Absorbent</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Limited UV Resistance</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Pet-Friendly</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Bundling and Packaging</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Crafting and Décor</td>
                                            </tr>
                                            <tr>
                                                <td><i class=" px-2 fa fa-check"></i>Comfortable Handling</td>
                                            </tr>
                                        </tbody>
                                    </table>
    
                                    <button class="btn btn-sm btn-secondary d-block my-2"><i class="px-2 fa fa-file-pdf-o"
                                            aria-hidden="true"></i>Download Details</button>
                                    <h3>Get In Touch</h3>
                                </div>
    
    
                            </div>
                            <div class="col-md-6">
                                <div class="table-cont">
                                    <h3>Technical Specification</h3>
    
                                    <table class="table table-bordered table-sm" style="font-size: 14px !important;">
                                        <tbody>
                                            <tr>
                                                <td>Material</td>
                                                <td>100 % Sisal</td>
                                            </tr>
                                            <tr>
                                                <td>Size (Dia)</td>
                                                <td>1.5mm - 30mm</td>
                                            </tr>
                                            <tr>
                                                <td>Lentgh</td>
                                                <td>10 - 800m</td>
                                            </tr>
                                            <tr>
                                                <td>Strength</td>
                                                <td>wet/dry 100%</td>
                                            </tr>
                                            <tr>
                                                <td>Specific gravity</td>
                                                <td>1.33-1.35</td>
                                            </tr>
                                            <tr>
                                                <td>Floats/ Sinks</td>
                                                <td>Floats</td>
                                            </tr>
                                            <tr>
                                                <td>Water absorption</td>
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                <td>Absorption Resistance</td>
                                                <td>Avarage</td>
                                            </tr>
                                            <tr>
                                                <td>Melting Point</td>
                                                <td>160° C</td>
                                            </tr>
                                            <tr>
                                                <td>Friction</td>
                                                <td>High</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>Natural </td>
                                            </tr>
                                        </tbody>
                                    </table>
    
                                </div>
                                <h3>Product Photos</h3>
                                <div class="row">
                                    <div class="gallary">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div id="images">
                                                    <div class="item">
                                                        <a href=""
                                                            ><img
                                                                src="{{asset('frontend/images/product/polyster-rope/1.jpg')}}"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href=""
                                                            ><img
                                                                src="{{asset('frontend/images/product/polyster-rope/2.jpg')}}"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href=""
                                                                ><img
                                                                src="{{asset('frontend/images/product/polyster-rope/3.jpg')}}"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href=""
                                                            ><img
                                                                src="{{asset('frontend/images/product/polyster-rope/4.jpg')}}"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href=""
                                                            ><img
                                                                src="{{asset('frontend/images/product/polyster-rope/5.jpg')}}"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href=""
                                                            ><img
                                                                src="{{asset('frontend/images/product/polyster-rope/6.jpg')}}"></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href=""
                                                            ><img
                                                                src="{{asset('frontend/images/product/polyster-rope/7.jpg')}}"></a>
                                                    </div>
    
                                                </div>
                                            </div>
    
    
    
                                        </div>
    
                                    </div>
                                    <h3>Sisal Rope Breaking Strength chart</h3>
                                    <table class="table table-bordered table-sm text-center" style="font-size: 14px !important;">
                                        <tr>
                                            <td colspan="3">Rope Size</td>
                                            <td rowspan="2">Breaking strength / MT</td>
                                        </tr>
                                        <tr>
                                            <td>Dia (mm)</td>
                                            <td>Dia (inchi)</td>
                                            <td>Circm(Inch)</td>
                                        </tr>
                                        <tr>
                                            <td>1.5</td>
                                            <td>1/17</td>
                                            <td>1/91</td>
                                            <td>2.25</td>
                                        </tr>
                                    </table>
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
