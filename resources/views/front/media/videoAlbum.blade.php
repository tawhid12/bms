@extends('front.layout.front-layout')
@section('content')
<section class="about-support" style="margin-top:60px">
    <span class="shape"></span>
    <span class="shape2"></span>
    <span class="shape3"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-0">Video Gallery</h3>
            </div>
        </div>
    </div>
</section>
<div class="container py-4">
    <div class="row">
        <div class="col-lg-3 mobileview">
            <div class="sidebar-menu vue-affix affix-top ">
                <div class="leftside-menu">
                    <div class="card  pb-4 me-4 rounded-10 bg-light">
                        <span class="shape"></span>
                        <span class="shape2"></span>
                        <div class="card-header">
                            <h4>Media Center</h4>
                        </div>
                        <ul class="sideber-nav flex-culumn ps-3">
                            <li class="nav-item my-2"><i class="bi bi-chevron-double-right"></i><a class="nav-link" href="{{route('pGallery')}}">Photo Gallery</a></li>
                            <li class="nav-item my-2"><i class="bi bi-chevron-double-right"></i><a class="nav-link" href="{{route('vGallery')}}">Video Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 px-2 ">
            <div class="row gallery photo">
                @forelse ($vAlbum as $p)
                <div class="col-lg-4 text-center">
                    <a href="{{route('video',$p->id)}}">
                        <div class="card shadow-sm mb-3">
                            <div class="card-gallery">
                                <img class="img-fluid" src="{{asset('uploads/vgallerycat_image/'.$p->feature_img)}}" alt="">
                            </div>
                            <div class="card-body my-2">
                                <h4>{{$p->name}}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-lg-4 text-center">
                    <div class="text-center">
                        <h3 class="mt-5">There is no Video uploaded yet</h3>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="my-3">
                {!! $vAlbum->links()!!}
            </div>
        </div>
    </div>
</div>
@endsection