
@extends('layout.app')

@section('pageTitle',trans('Create Ebrochure'))
@section('pageSubTitle',trans('Create'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.ebrochure.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="link">Title</label>
                                            <input type="text" id="title" class="form-control" value="{{ old('title')}}" name="title">
                                            @if($errors->has('title'))
                                                <span class="text-danger"> {{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="picture">Image</label>
                                            <input type="file" id="picture" class="form-control"
                                                placeholder="Picture" name="picture">
                                                <span class="text-danger">(Max With/Height: 256x423px)</span>
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
                                        </div>
                                    </div>
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
