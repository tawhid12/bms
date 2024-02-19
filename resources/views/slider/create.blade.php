
@extends('layout.app')

@section('pageTitle',trans('Create Slide'))
@section('pageSubTitle',trans('Create'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.slider.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="picture">Image</label>
                                            <input type="file" id="picture" class="form-control"
                                                placeholder="Picture" name="picture">
                                                <span class="text-danger">(Max With/Height: 900px * 600px)</span>
                                                @if($errors->has('picture'))
                                                    <span class="text-danger"> {{ $errors->first('picture') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="link">link</label>
                                            <input type="text" id="link" class="form-control" value="{{ old('link')}}" name="link">
                                            @if($errors->has('link'))
                                                <span class="text-danger"> {{ $errors->first('link') }}</span>
                                            @endif
                                        </div>
                                    </div>--}}

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="short_title">Tranisition Type</label>
                                            <select class="form-control" name="short_title">
                                                <option value="">Select</option>
                                                <option value="curtain-3">curtain-3</option>
                                                <option value="3dcurtain-horizontal">3dcurtain-horizontal</option>
                                                <option value="slotslide-horizontal">slotslide-horizontal</option>
                                                <option value="cube">cube</option>
                                                <option value="incube">incube</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--<div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="long_title">Long Title:</label>
                                            <textarea  class="form-control" id="long_title"
                                                placeholder="Long Title" name="LongTitle" rows="3">{{ old('long_title')}}</textarea>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
