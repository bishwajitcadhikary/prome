@extends('layouts.frontend')

@section('title', trans('home_page'))

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach($carousels as $key => $carousel)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : null }}" @if($key == 0 ? 'aria-current="true"' : null) @endif aria-label="{{ $carousel->id }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($carousels as $key => $carousel)
                <div class="carousel-item {{ $key == 0 ? 'active' : null }}">
                    <img src="{{ asset('storage/uploads/images/'. $carousel->image) }}" class="d-block w-100" alt="slider{{ $carousel->id }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
          <i class="fa-solid fa-chevron-left"></i>
        </span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
          <i class="fa-solid fa-angle-right"></i>
        </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--                OfCan part Start
        %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="{{ asset('storage/uploads/images/'.setting('website.logo')) }}" alt=""></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcan_menu">
                <ul>
                    <li><a href="#"><span><i class="fa-solid fa-house-user"></i></span> কোম্পানী প্রোফাইল</a></li>
                    <li><a href="#"><span><i class="fa-solid fa-registered"></i></span> আমা‌দের কার্যক্রম</a></li>
                    <li><a href="#"><span><i class="fa-solid fa-briefcase"></i></span> চাকরির আবেদন</a></li>
                    <li><a href="#"><span><i class="fa-solid fa-folder-open"></i></span>সেবা সমূহ</a></li>
                    <li><a href="#"><span><i class="fa-solid fa-briefcase"></i></span> অ্যাওয়ার্ড</a></li>
                    <li><a href="#"><span><i class="fa-solid fa-address-card"></i></span> যোগা‌যোগ</a></li>
                </ul>
            </div>
            <div class="login_nav">
                <ul>
                    <li><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#">Log In</a> </button>
                    </li>
                    <li><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <a href="#">Sign Up</a> </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--                OfCan part End
        %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->



    <!--                Service part start
        %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="service_header">
                        {!! trans('our_services') !!}
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
            <div class="service_text_item">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="accordion" id="accordionExample">
                            @foreach($our_services as $key => $our_service)
                                @if($our_service->is_accordion)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-{{ $key }}">
                                            <button class="accordion-button {{ $key !== 0 ? 'collapsed' : null }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse-{{ $key }}">
                                                {{ $our_service->title }}
                                            </button>
                                        </h2>
                                        <div id="collapse-{{ $key }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : null }}" aria-labelledby="heading-{{ $key }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $our_service->description !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>

            <div class="service_main">
                <div class="row justify-content-center">
                    @foreach($our_services as $our_service)
                        @unless($our_service->is_accordion)
                            <div class="col-lg-4 mt-5">
                                <div class="service_part">
                                    <div class="service_img">
                                        <img src="{{ asset('storage/uploads/images/'.$our_service->image) }}" alt="">
                                    </div>
                                    <div class="service_text">
                                        <h4>{{ $our_service->title }}</h4>
                                        {!! $our_service->description !!}
                                    </div>
                                </div>
                            </div>
                        @endunless
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="award">

        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class=" col-12 col-md-12 col-lg-6">
                    <div class="award_header">
                        {!! trans('our_achievements') !!}
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="container sliderr">
            @foreach($our_achievements->chunk(2) as $our_achievement)
                <div class="award_main">
                    <div class="row">
                        @foreach($our_achievement as $achievement)
                        <div class="col-12 col-md-12 col-lg-6  {{ $loop->odd ? 'blockk': null }}">
                            <div class="award_one">
                                <div class="award_text">
                                    <h3>{{ $achievement->title }}</h3>
                                    {!! $achievement->description !!}
                                </div>
                                <div class="award_img">
                                    <img src="{{ asset('storage/uploads/images/'.$achievement->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class=" col-12 col-md-12 col-lg-6">
                    <div class="work_header">
                        {!! trans('our_works') !!}
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="work_main">
                <div class="row work_slider">
                    @foreach($our_works as $our_work)
                        <div class="col-lg-4">
                            <div class="work_item">
                                <div class="work_img">
                                    <img src="{{ asset('storage/uploads/images/'.$our_work->image) }}" alt="">
                                </div>
                                <div class="work_text">
                                    <h4>{{ $our_work->title }}</h4>
                                    {!! $our_work->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="announce">
        <div class="container">
            <div class="row">
                <div class=" col-12 col-md-12 col-lg-12">
                    <div class="announce_main">
                        <div class="announce_img">
                            <img src="{{ asset('storage/uploads/images/'.setting('website.logo')) }}" alt="">
                        </div>
                        <div class="announs_text">
                            {!! setting('website.announcement') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class=" col-12 col-md-12 col-lg-6">
                    <div class="location_header">
                        {!! trans('our_address') !!}
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class=" col-12 col-md-12 col-lg-6 text-center">
                    <div class="location_left">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>{{ trans('head_office') }}</h4>
                        <h5>{{ setting('website.address') }}</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="location_right">
                        {!! setting('website.maps_embed') !!}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
