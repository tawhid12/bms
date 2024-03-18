@extends('layout.app')

@section('pageTitle', trans('Create Product'))
@section('pageSubTitle', trans('Create'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="{{ route(currentUser() . '.product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="title"><b>{{ __('Title') }}<span
                                                    class="text-danger">*</span></b></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" id="product_title" value="{{ old('product_title') }}"
                                            class="form-control" placeholder="Product title" name="product_title" required>
                                        @if ($errors->has('product_title'))
                                            <span class="text-danger"> {{ $errors->first('product_title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="title"><b>{{ __('Featured Image') }}<span class="text-danger">*</span></b></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="file" class="form-control" name="featured_image" required>
                                        @if ($errors->has('featured_image'))
                                            <span class="text-danger"> {{ $errors->first('featured_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="title"><b>{{ __('Featured Image Two') }}<span class="text-danger">*</span></b></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="file" class="form-control" name="featured_image_two" required>
                                        @if ($errors->has('featured_image_two'))
                                            <span class="text-danger"> {{ $errors->first('featured_image_two') }}</span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="published"><b>{{__('Select Category')}}<span class="text-danger">*</span></b></label>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-control form-select" value="{{ old('category_id')}}" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @forelse ($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                            @empty
                                                
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="details"><b>{{ __('Technical Specification') }}:</b></label>
                                    </div>
                                    <div class="col-12">
                                        <div id="toolbar-container"></div>
                                        <textarea class="form-control content" placeholder="Enter the Technical Specification" rows="5" name="tech_spec"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="details"><b>{{ __('Description') }}:</b></label>
                                    </div>
                                    <div class="col-12">
                                        <div id="toolbar-container"></div>
                                        <textarea class="form-control" id="" placeholder="Enter the Description" rows="5" name="product_des"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="details"><b>{{ __('Chemical Specification') }}:</b></label>
                                    </div>
                                    <div class="col-12">
                                        <div id="toolbar-container"></div>
                                        <textarea class="form-control content" placeholder="Enter the Chemical Specification" rows="5" name="che_res"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="details"><b>{{ __('Production Information') }}:</b></label>
                                    </div>
                                    <div class="col-12">
                                        <div id="toolbar-container"></div>
                                        <textarea class="form-control content" placeholder="Enter the Product Information" rows="5" name="pro_info"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="details"><b>{{ __('Product Feature') }}:</b></label>
                                    </div>
                                    <div class="col-12">
                                        <div id="toolbar-container"></div>
                                        <textarea class="form-control content" placeholder="Enter the Product Feature" rows="5" name="feature"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="details"><b>{{ __('Sisal Rope Breaking Strength chart') }}:</b></label>
                                    </div>
                                    <div class="col-12">
                                        <div id="toolbar-container"></div>
                                        <textarea class="form-control content" placeholder="Enter the Sisal Rope Breaking Strength chart" rows="5"
                                            name="srbsc"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="published"><b>{{__('Select Brochure')}}<span class="text-danger">*</span></b></label>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-control form-select" value="{{ old('ebrochure_id')}}" name="ebrochure_id">
                                            <option value="">Select Brochure</option>
                                            @forelse ($ebrochure as $e)
                                                <option value="{{$e->id}}">{{$e->title}}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="published"><b>{{__('Is Featured')}}<span class="text-danger">*</span></b></label>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-control form-select" name="is_featured">
                                            <option value="">Select Category</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="form-group">
                                        <label for="Serial">Serial</label>
                                        <input type="text" id="serial" class="form-control"
                                            placeholder="Serial" name="serial" value="{{old('serial')}}">
                                           
                                            @if($errors->has('serial'))
                                                <span class="text-danger"> {{ $errors->first('serial') }}</span>
                                            @endif
                                            
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
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
