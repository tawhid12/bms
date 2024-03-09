@extends('layout.app')
@section('pageTitle',trans('Eborchure List'))
@section('pageSubTitle',trans('List'))

@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                <a class="float-end" href="{{route(currentUser().'.ebrochure.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">

                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Title')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('PDF')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ebrochures as $e)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$e->title}}</td>
                                <td><img width="100px" src="{{asset($e->image)}}" alt=""></td>
                                <td><a href="{{asset($e->upload_pdf)}}">View PDF</a></td>
                                <td>{{ $e->status == 1?"Active":"Inactive" }}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.ebrochure.edit',encryptor('encrypt',$e->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$e->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$e->id}}" action="{{route(currentUser().'.ebrochure.destroy',encryptor('encrypt',$e->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="my-3">
                        {!! $ebrochures->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
