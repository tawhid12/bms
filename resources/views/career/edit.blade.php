
@extends('layout.app')

@section('pageTitle',trans('Edit Career'))
@section('pageSubTitle',trans('Edit'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.car.update',$career->id)}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{$career->id}}">
                                <div class="row">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="car_title"><b>{{ __('Title') }}<span
                                                        class="text-danger">*</span></b></label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" id="title" value="{{ old('car_title',$career->car_title) }}"
                                                class="form-control" placeholder="Title" name="car_title">
                                            @if ($errors->has('car_title'))
                                                <span class="text-danger"> {{ $errors->first('car_title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="details"><b>{{ __('Description') }}:</b></label>
                                    </div>
                                    <div class="col-12">
                                        <div id="toolbar-container"></div>
                                        <textarea class="form-control content" placeholder="Enter the Description" rows="5" name="car_des">{!! $career->car_des !!}</textarea>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="upload_file">Attachment</label>
                                            <input type="file" id="upload_file" class="form-control"
                                                placeholder="upload_file" name="upload_file">
                                            <span class="text-danger">(Attachments PDF Only)</span>
                                            <a href="{{$career->upload_file}}">View Attachments</a>
                                            @if ($errors->has('upload_file'))
                                                <span class="text-danger"> {{ $errors->first('upload_file') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="unpulished_date">Unpublished Date</label>
                                            <input type="date" id="unpulished_date" class="form-control"
                                                name="unpulished_date" value="{{$career->unpulished_date}}">
                                            
                                            @if ($errors->has('unpulished_date'))
                                                <span class="text-danger"> {{ $errors->first('unpulished_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary my-2">Update</button>
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
@push('scripts')
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>


    <script>
        // Select all textarea elements with the specified class name
        const textareas = document.querySelectorAll('.content');

        // Loop through each textarea element
        textareas.forEach(textarea => {
            // Apply ClassicEditor.create to each textarea
            ClassicEditor.create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endpush