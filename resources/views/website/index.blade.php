@extends('website.layouts.app')

{{-- start ttitle page --}}
<title>Home page</title>
{{-- end title page --}}


@section('home_page_header')
    <header class="masthead_two  text-white text-center">
        <div class="container d-flex align-items-center flex-column p-5">
            <div class="header_home">
                <h1 class="masthead-heading text-uppercase mb-0   font_cherry title_header_home">{{$home->txt1}}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light my-lg-4 w-100 w-lg-75">
                    <div class="divider-custom-icon title_header_p">
                        <h5 class="font_cherry">{{$home->txt2}}</h5>
                    </div>
                </div>
                <!-- Masthead Subheading-->
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 col-7">
                            <a class=" text-light text-decoration-none" href="{{ route('farah.booking.reservation') }}">
                                <button type="button" class="btn w-100 btn_header btn-cherry font_cherry btn_book">حجز الأن</button> </a>
                        </div>
                        <div class="col-lg-6 col-5">
                            <a class="text-dark text-decoration-none " href="{{ route('farah.service.index') }}"> <button type="button"
                                    class="btn_book btn w-100  btn_header btn_header_two btn-details font_cherry">تفاصيل
                                </button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
{{-- start header --}}

{{-- end header --}}



{{-- start content --}}
@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h2 class="page-section-heading text-center h1 text-dark mb-0 font_cherry">Let’s
                        تفاصيل حجز قاعة الافراح </h2>
                </div>

                <div class="col-12">
                    <ul class="autoplay d-flex justify-content-around card-list">
                        <li class="card col-sm-12 autoplay_m">
                            <img class="w-100" src="{{ asset('website/images/image_categories/Photography.jpg') }}"
                                alt="">
                            <h4 class="p-lg-4 font_cherry">wedding</h4>
                            <a class="text-light text-decoration-none"
                                href="{{ route('farah.browse.wedding.browse_index') }}"> <button type="button"
                                    class="btn btn_header btn-cherry font_cherry btn_book"> Details </button> </a>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <img class="w-100" src="{{ asset('website/images/image_categories/BirthDay.png') }}"
                                alt="">
                            <h4 class="p-lg-4 font_cherry">BirthDay</h4>
                            <a class="text-light text-decoration-none"
                                href="{{ route('farah.browse.wedding.browse_index') }}"> <button type="button"
                                    class="btn btn_header btn-cherry font_cherry btn_book"> Details </button> </a>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <img class="w-100" src="{{ asset('website/images/image_categories/Photography.jpg') }}"
                                alt="">
                            <h4 class="p-lg-4 font_cherry">Conferences</h4>
                            <a class="text-light text-decoration-none"
                                href="{{ route('farah.browse.wedding.browse_index') }}"> <button type="button"
                                    class="btn btn_header btn-cherry font_cherry btn_book"> Details </button> </a>
                        </li>

                    </ul>
                </div>

                <div class="col-4 m-auto p-lg-5">
                    <h2 class="page-section-heading text-center h1  mb-0 font_cherry text-dark">
                        Booking </h2>
                    <h4 class="font_cherry text-secondary text_right">your wedding</h4>
                </div>

            </div>
        </div>
    </section>
    <div class="container p-5">
        <div class="row">
            <div class="col-6">
                <img class="w-100 h-lg-100 h-75 image_con" src="{{ asset('website/images/image_content/image_con.jpg') }}"
                    alt="">
            </div>
            <div class="col-6 ">
                <div class="text-small ">
                    <h2 class="text_15 bold">PREP TECHNIQUES COFFEE </h2>
                </div>
                <div class="text-small">
                    <h3 class="text-secondary text_15">
                        distracted by the readable content of a page when looking at its layout. The point of using Lorem
                        Ipsum is that it has a moredistracted by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more
                    </h3>
                </div>
                <div class="part_button">
                    <a href="#"> <button type="button" class="float-right btn part_button_link">Book Now</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
{{-- end content --}}
