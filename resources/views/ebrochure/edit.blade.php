
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
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.slider.update',encryptor('encrypt',$slider->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$slider->id)}}">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="picture">Image</label>
                                            <input type="file" id="picture" class="form-control" placeholder="picture" name="picture">
                                            <img width="50px" src="{{asset($slider->image)}}" alt="">
                                            @if($errors->has('picture'))
                                                <span class="text-danger"> {{ $errors->first('picture') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="short_title">Tranisition Type</label>
                                            <select class="form-control" name="short_title">
                                                <option value="">Select</option>
                                                <option value="curtain-3" @if($slider->short_title== 'curtain-3') selected @endif>curtain-3</option>
                                                <option value="3dcurtain-horizontal" @if($slider->short_title== '3dcurtain-horizontal') selected @endif>3dcurtain-horizontal</option>
                                                <option value="slotslide-horizontal" @if($slider->short_title== 'slotslide-horizontal') selected @endif>slotslide-horizontal</option>
                                                <option value="cube" @if($slider->short_title== 'cube') selected @endif>cube</option>
                                                <option value="incube" @if($slider->short_title== 'incube') selected @endif>incube</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Link">link</label>
                                            <input type="text" id="Link" class="form-control" value="{{ old('Link',$slider->link)}}" name="Link">
                                            @if($errors->has('Link'))
                                                <span class="text-danger"> {{ $errors->first('Link') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="ShortTitle">Short Title</label>
                                            <input type="text" id="ShortTitle" class="form-control" value="{{ old('ShortTitle',$slider->short_title)}}" name="ShortTitle">
                                            @if($errors->has('ShortTitle'))
                                                <span class="text-danger"> {{ $errors->first('ShortTitle') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="LongTitle">Long Title:</label>
                                            <textarea  class="form-control" id="LongTitle"
                                                placeholder="Long Title" name="LongTitle" rows="3">{{ old('LongTitle',$slider->long_title)}}</textarea>
                                        </div>
                                    </div>
                                </div>--}}
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
