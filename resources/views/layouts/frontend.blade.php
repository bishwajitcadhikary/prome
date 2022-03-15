<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | {{ setting('website.title') }}</title>
    <link rel="icon" href="{{ asset('storage/uploads/images/'.setting('website.logo')) }}" type="image/gif">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Oswald:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>
<body>
<!--              Header Part Start
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
<Section id="header">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-6 col-lg-6">
                <div class="header_left">
                    <a href="tel:{{ setting('website.phone') }}"><i class="fa-solid fa-phone"></i><span> {{ setting('website.phone') }}</span></a>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6 text-end">
                <div class="header_right">
                    <ul>
                        @foreach(setting('website.social') as $key => $social)
                            <li><a href="{{ $social }}" target="_blank"><i class="fa-brands fa-{{ $key }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</Section>
<!--              Header Part End
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

<!--              Nav Part Start
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('storage/uploads/images/'.setting('website.logo')) }}" alt="logo"></a>
        <a class="btn btn-primary offcan_btn d-lg-none d-sm-block d-md-block" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars"></i>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">{{ trans('home_page') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.html">কোম্পানী প্রোফাইল</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.html">চাকরির আবেদন</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        আমা‌দের কার্যক্রম
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Photos gallery</a></li>
                        <li><a class="dropdown-item" href="#">Events</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">সেবা সমূহ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">অ্যাওয়ার্ড</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.form') }}">{{ trans_choice('general.contacts', 1) }}</a>
                </li>
            </ul>
            <div class="login_nav">
                <ul>
                    <li><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="#">লগইন</a> </button>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<!--                Nav Part End
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


@yield('content')


<!--                Footer Part Start
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
<section id="footer">
    <div class="container">
        <div class="footer_main">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="footer_1">
                        <h2>{{ trans('about_us') }}</h2>
                        {!! setting('website.about') !!}
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 text-center">
                    <div class="footer_2">
                        <h2>আমা‌দের কার্যক্রম</h2>
                        <ul>
                            <li><a href="#">আমাদের সম্পর্কে </a></li>
                            <li><a href="#">আমাদের সেবাসমূহ</a></li>
                            <li><a href="#">আমাদের পোর্টফোলিও</a> </li>
                            <li><a href="#">আমাদের টিম</a></li>
                            <li><a href="#">যোগাযোগ</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4">
                    <div class="footer_3">
                        <h2>{{ trans('head_office') }}</h2>
                        <h3>{{ setting('website.title') }}</h3>
                        {!! setting('website.address') !!}
                        <p>{{ trans('website_fax', ['number' => setting('website.fax')]) }} <br>
                            {{ trans('website_email', ['address' => setting('website.email')]) }}
                        </p>
                        <div class="footer_icon">
                            <ul>
                                @foreach(setting('website.social') as $key => $social)
                                    <li><a href="{{ $social }}" target="_blank"><i class="fa-brands fa-{{ $key }}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_last">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 text-center">
                    <h3>{{ setting('website.footer_text') }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--                Footer part End
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
<section>
    <div class="back2top">
        <div class="back2top_main">
            <i class="fa-solid fa-circle-chevron-up"></i>
        </div>
    </div>
</section>

<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.expander.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

@yield('scripts')

</body>
</html>
