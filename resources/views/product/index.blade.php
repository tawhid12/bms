@extends('layout.app')
@section('pageTitle',trans('Products List'))
@section('pageSubTitle',trans('List'))
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <div class="float-end">
                            <a class="float-end" href="{{route(currentUser().'.product.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                        </div>
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">{{__('#SL')}}</th>
                                    <th scope="col">{{__('Title')}}</th>
                                    <th scope="col">{{__('Category')}}</th>
                                    <th scope="col">{{__('Is Featured')}}</th>
                                    <th scope="col">{{__('Serial')}}</th>
                                    <th class="white-space-nowrap">{{__('ACTION')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $p)
                                <tr class="text-center">
                                <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{$p->title}}</td>
                                    <td>{{$p->category?->cat_name}}</td>
                                    <td>@if($p->is_featured==1) Featured @else - @endif</td>
                                    <td>{{$p->serial}}</td>
                                    <td class="white-space-nowrap">
                                        <a class="btn btn-sm btn-primary" href="{{route(currentUser().'.product.show',$p)}}">Show</a>
                                        <a class="btn btn-sm btn-success" href="{{route(currentUser().'.product.edit',$p)}}">Edit</a>
                                        <a class="" href="{{route(currentUser().'.product_photo_show',encryptor('encrypt',$p->id))}}"><i class="bi bi-upload"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="5" class="text-center">No Data Found</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="my-3">
                            {!! $products->links()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection