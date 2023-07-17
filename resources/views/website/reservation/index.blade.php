@extends('website.layouts.app')

<title>Reservation</title>
{{-- end title page --}}


{{-- start header --}}
@section('other_page_header')
    <header class="masthead_two  reservation text-white text-center">
        <div class="container d-flex align-items-center flex-column p-5">
            <div class="p-5 my-5">
                <h1 class="  mb-0  title_header font_cherry Booking">
                    BOOKING
                </h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div id="content" style="padding: 5px"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 p-5">
                            <h2 class="new_book page-section-heading text-center h1 text-dark mb-0 font_cherry">
                                اختر نوع الحجز </h2>
                        </div>
                        <div class="col-12">
                            <ul class="autoplay d-flex justify-content-around card-list">
                                 @foreach ($reservations as $reservation)
                                <li class="card col-sm-12 autoplay_m">
                                    <img  style="width: 418px; height: 315px" src="{{$reservation->image_path}}"
                                        alt="">
                                    <h4 class="new_book p-lg-4 font_cherry">{{$reservation->name}}</h4>
                                    <a class="new_book text-light text-decoration-none"
                                        href="{{ route('farah.booking.section',[$reservation->id,1,0]) }}"> <button type="button"
                                            class=" new_book btn btn_header btn-cherry font_cherry btn_book"> حجز </button> </a>
                                </li>
                                @endforeach





                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
