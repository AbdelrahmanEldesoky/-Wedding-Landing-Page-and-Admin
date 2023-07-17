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
                    <h2 class="page-section-heading text-center h1 text-dark mb-0 font_cherry">تفاصيل حجز قاعة الافراح</h2>
                </div>

                <div class="col-12">
                    <ul class="autoplay d-flex justify-content-around card-list">
                       @foreach ($reservations as $reservation)
                        <li class="card col-sm-12 autoplay_m">
                            <img class="w-100" style="width: 418px ; height: 315px" src="{{$reservation->image_path}}"
                                alt="">
                            <h4 class="p-lg-4 font_cherry">{{$reservation->name}}</h4>
                            <a class="text-light text-decoration-none"
                                href="{{route('farah.service.section',$reservation->id)}}"> <button type="button"
                                    class="btn btn_header btn-cherry font_cherry btn_book"> تفاصيل </button> </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <section class="contact_us">
                    <div style="text-align: center;">
                        <div class="row">
                        <div class="col-12">
                            <h1 class="Booking">تواصل معنا</h1>
                        </div>
                        <div class="col-12">
                            <h4 style="text-align:center">يمكنك تواصل معنا عبر الهاتف او ترك رسالتك وسوف يتم التوصل معك</h4>
                        </div>
                        <div class="col-12 col-lg-7">
                        <form action="{{ route('farah.contacts.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('post') }}
                            <div class="row input-container p-2 m-auto">
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <input type="text" name="name" required />
                                        <label>الاسم</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="styled-input">
                                        <input type="email" name="email" required />
                                        <label>الاميل</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="styled-input" style="float:right;">
                                        <input type="number" name="phone" required />
                                        <label>رقم  الهاتف</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <textarea  name="note" required></textarea>
                                        <label>رساله</label>
                                    </div>
                                </div>
                                <div class="col-xs-24 text-center">
                                    <input type="submit" value="ارسال رساله" class="w-75 text-center btn-lrg submit-btn" >
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="col-lg-5 col-12 p-2 p-lg-0 m-auto">
                            <div class="wow slideInUp" data-wow-delay="0.6s">
                                <iframe class="position-relative rounded w-100 h-100"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13602.775242825512!2d35.09982600000001!3d31.53256855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1502e427ecc463fb%3A0xbe464d5c6a2f134c!2z2KfZhNiu2YTZitmE!5e0!3m2!1sar!2seg!4v1687474193270!5m2!1sar!2seg"
                                    frameborder="0" style="min-height: 475px; border:0; margin-bottom: 46px" allowfullscreen="" aria-hidden="false"
                                    tabindex="0">
                                </iframe>
                            </div>
                        </div>

                    </div>

                </section>


                <div class="col-4 m-auto p-lg-5">
                    <h2 class="page-section-heading text-center h1  mb-0 font_cherry text-dark">
                         من نحن</h2>
                    <h4 class="font_cherry text-secondary text_right">قاعة المرج يا من افضل القاعات</h4></h4>
                </div>

            </div>
        </div>
    </section>
    <div class="container p-5" style="text-align: right;">
        <div class="row" style="text-align: right;">
            <div class="col-6">
                <img class="w-100 h-lg-100 h-75 image_con" src="{{$about->image_path}}"
                    alt="">
            </div>
            <div class="col-6 " style="text-align: right;">
                <div class="text-small ">
                    <h2 class="text_15 bold">{{$about->txt1}}</h2>
                </div>
                <div class="text-small">
                    <h3 class="text-secondary text_15 " style="text-align: right;" >
                       {{$about->txt2}}
                    </h3>
                </div>
                <div class="part_button">
                    <a href="{{route('farah.booking.reservation')}}"> <button type="button" class="float-right btn part_button_link">حجز الان</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
{{-- end content --}}
