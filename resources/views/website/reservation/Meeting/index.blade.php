@extends('website.layouts.app')

{{-- start ttitle page --}}
<title>Meeting</title>
{{-- end title page --}}


{{-- start header --}}


@section('other_page_header')
    <header class="masthead_two  meeting text-white text-center">
        <div class="container d-flex align-items-center flex-column p-5">
            <div class="p-5 my-5">
                <h1 class="  mb-0  title_header font_cherry">
                    BOOKING
                </h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light w-75">
                    <div class="divider-custom-icon ">
                        <h5 class="font_cherry title_header_p">
                            Your Meeting
                        </h5>
                    </div>
                </div>
                <!-- Masthead Subheading-->

            </div>
        </div>
    </header>
@endsection


{{-- end header --}}



@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="page-section-heading text-center  title_content mb-0 font_cherry"> Booking </h1>
                    <div class="divider-custom divider-light w-50">
                        <div class="divider-custom-icon ">
                            <h5 class="font_cherry details_content">Your Meeting</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="autoplay d-flex justify-content-around card-list">
                        <li class="card col-sm-12 autoplay_m">
                            <div>
                                <img class="w-100 booking_image"
                                    src="{{ asset('website/images/image_categories/Photography_no_border.jpg') }}"
                                    alt="">
                            </div>

                            <div class="details_booking">
                                <h4>Photography</h4>
                            </div>
                            <br>
                            <div class="card_about">
                                <h5 class="p-lg-4 font_cherry  text-light">Photography inside the hall</h5>

                                <div>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <a href="{{ route('farah.reservation.wedding.photography_index') }}">
                                            <button type="button"
                                            class="btn btn-outline-light text-light w-lg-50 w-sm-75 h3 booking_btn">Book Now</button>
                                        </a>
                                </div>

                            </div>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <div>
                                <img class="w-100 booking_image"
                                    src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    alt="">
                            </div>
                            <div class="details_booking">
                                <h4>Suit and accessories</h4>
                            </div>
                            <br>
                            <div class="card_about">
                                <h5 class="p-lg-4 font_cherry  text-light">Photography inside the hall</h5>

                                <div>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <a href="{{ route('farah.reservation.wedding.Suit_index') }}">
                                            <button type="button"
                                            class="btn btn-outline-light text-light w-lg-50 w-sm-75 h3 booking_btn">Book Now</button>
                                        </a>
                                </div>

                            </div>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <div>
                                <img class="w-100 booking_image"
                                    src="{{ asset('website/images/image_categories/Decorations_no_border.jpg') }}"
                                    alt="">
                            </div>
                            <div class="details_booking">
                                <h4>Decorations</h4>
                            </div>
                            <br>
                            <div class="card_about">
                                <h5 class="p-lg-4 font_cherry  text-light">Photography inside the hall</h5>

                                <div>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <a href="{{ route('farah.reservation.wedding.decorations_index') }}">
                                            <button type="button"
                                            class="btn btn-outline-light text-light w-lg-50 w-sm-75 h3 booking_btn">Book Now</button>
                                        </a>
                                </div>

                            </div>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <div>
                                <img class="w-100 booking_image"
                                    src="{{ asset('website/images/image_categories/tables_no_border.jpg') }}"
                                    alt="">
                            </div>
                            <div class="details_booking">
                                <h4>
                                    Chair and tables
                                </h4>
                            </div>
                            <br>
                            <div class="card_about">
                                <h5 class="p-lg-4 font_cherry  text-light">Photography inside the hall</h5>

                                <div>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <a href="{{ route('farah.reservation.wedding.chair_index')}}">
                                            <button type="button"
                                            class="btn btn-outline-light text-light w-lg-50 w-sm-75 h3 booking_btn">Book Now</button>
                                        </a>
                                </div>

                            </div>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <div>
                                <img class="w-100 booking_image"
                                    src="{{ asset('website/images/image_categories/food_no_border.jpg') }}" alt="">
                            </div>
                            <div class="details_booking">
                                <h4>
                                    Food and drinks
                                </h4>
                            </div>
                            <br>
                            <div class="card_about">
                                <h5 class="p-lg-4 font_cherry  text-light">Photography inside the hall</h5>

                                <div>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <a href="{{ route('farah.reservation.wedding.food_index' )}}">
                                            <button type="button"
                                            class="btn btn-outline-light text-light w-lg-50 w-sm-75 h3 booking_btn">Book Now</button>
                                        </a>
                                </div>

                            </div>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <div>
                                <img class="w-100 booking_image"
                                    src="{{ asset('website/images/image_categories/Decorations_no_border.jpg') }}"
                                    alt="">
                            </div>
                            <div class="details_booking">
                                <h4>
                                    Guests
                                </h4>
                            </div>
                            <br>
                            <div class="card_about">
                                <h5 class="p-lg-4 font_cherry  text-light">Photography inside the hall</h5>

                                <div>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <a href="{{ route('farah.reservation.wedding.guests_index') }}">
                                        <button type="button"
                                        class="btn btn-outline-light text-light w-lg-50 w-sm-75 h3 booking_btn">Book Now</button>
                                       </a>
                                </div>

                            </div>
                        </li>
                        <li class="card col-sm-12 autoplay_m">
                            <div>
                                <img class="w-100 booking_image"
                                    src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
                                    alt="">
                            </div>
                            <div class="details_booking">
                                <h4>
                                    DJ and fireworks
                                </h4>
                            </div>
                            <br>
                            <div class="card_about">
                                <h5 class="p-lg-4 font_cherry  text-light">Photography inside the hall</h5>
                                <div>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_15 text_gray'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                    <a href="{{ route('farah.reservation.wedding.dj_index') }}">
                                        <button type="button"
                                        class="btn btn-outline-light text-light w-lg-50 w-sm-75 h3 booking_btn">Book Now</button>
                                    </a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class='responsive_btn slick-arrow w-100'>
                    @yield('link_next_page')
                </div>
                <script>
                    const reservation = document.querySelectorAll(".book");
                    reservation.forEach(function(button) {
                        button.addEventListener('click', function() {
                            const Content = 'Book Now';
                            if (button.textContent.toLowerCase().includes(Content.toLowerCase())) {
                                button.textContent  = 'Confirm';
                                button.classList.toggle("mystyle");
                            } else {
                                button.textContent = 'Book Now';
                                button.classList.remove("mystyle");
                            }
                        });
                    });
               </script>
            </div>
        </div>
    </section>





@endsection








