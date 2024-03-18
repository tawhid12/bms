
@extends('layout.app')

@section('pageTitle',trans('Edit Ebrochure'))
@section('pageSubTitle',trans('Edit'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.ebrochure.update',encryptor('encrypt',$ebrochure->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$ebrochure->id)}}">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="link">Title</label>
                                            <input type="text" id="title" class="form-control" value="{{ old('title',$ebrochure->title)}}" name="title">
                                            @if($errors->has('title'))
                                                <span class="text-danger"> {{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="picture">Image</label>
                                            <input type="file" id="picture" class="form-control" placeholder="picture" name="picture">
                                            <span class="text-danger">(Max With/Height: 256x423px)</span>
                                            <img width="100px" src="{{asset($ebrochure->image)}}" alt="" class="d-block">
                                            @if($errors->has('picture'))
                                                <span class="text-danger"> {{ $errors->first('picture') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class=" col-12">
                                        <div class="form-group">
                                            <label for="picture">Upload PDF</label>
                                            <input type="file" id="upload_pdf" class="form-control"
                                                placeholder="Picture" name="upload_pdf">
                                                <span class="text-danger">Upload PDF File</span>
                                                @if($errors->has('upload_pdf'))
                                                    <span class="text-danger"> {{ $errors->first('upload_pdf') }}</span>
                                                @endif
                                                <a href="{{$ebrochure->upload_pdf}}">View PDF</a>
                                        </div>
                                    </div>
                                    <div class=" col-12">
                                        <div class="form-group">
                                            <label for="Serial">Serial</label>
                                            <input type="text" id="serial" class="form-control"
                                                placeholder="Serial" name="serial" value="{{old('serial',$ebrochure->serial)}}">
                                               
                                                @if($errors->has('serial'))
                                                    <span class="text-danger"> {{ $errors->first('serial') }}</span>
                                                @endif
                                                
                                        </div>
                                    </div>
                                   
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>

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
