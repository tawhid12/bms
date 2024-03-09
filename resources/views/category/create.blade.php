@extends('layout.app')

@section('pageTitle', trans('Add Category'))
@section('pageSubTitle', trans('Create'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data"
                                action="{{ route(currentUser() . '.category.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="upload_file">Image</label>
                                            <input type="file" id="upload_file" class="form-control" placeholder="upload_file" name="upload_file">
                                            <span class="text-danger">(Max With/Height: 285px * 373px)</span>
                                            @if($errors->has('upload_file'))
                                            <span class="text-danger"> {{ $errors->first('upload_file') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="cat_name">Category Name</label>
                                            <input type="text" id="cat_name" class="form-control"
                                                value="{{ old('cat_name') }}" name="cat_name">
                                            @if ($errors->has('cat_name'))
                                                <span class="text-danger"> {{ $errors->first('cat_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary my-2">Save</button>
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
