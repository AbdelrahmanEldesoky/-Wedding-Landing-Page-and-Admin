@extends('website.layouts.app')

{{-- start ttitle page --}}
<title>Suit and accessories</title>
{{-- end title page --}}


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="page-section-heading text-center  title_content mb-0 font_cherry"> Booking </h1>
                    <div class="divider-custom divider-light w-50">
                        <div class="divider-custom-icon ">
                            <h5 class="font_cherry details_content">Your Suit and accessories</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12">

                    {{-- <form action="" method="post"> --}}
                    <ul class="autoplay_two  d-flex justify-content-around card-list">
                        {{-- suit_A --}}
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 " src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    alt="">
                            </div>

                            <div class="card_about">
                                <h5 class=" font_cherry p-3  text-light">Photography inside the hall</h5>

                                <div class='p-3'>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <button data-state="1" name='suit_A' id="suit_A" type="submit"
                                            class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn"> Book
                                            Now </button>
                                </div>
                            </div>
                        </li>
                        {{-- suit_B --}}
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 " src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    alt="">
                            </div>

                            <div class="card_about">
                                <h5 class=" font_cherry p-3  text-light">Photography inside the hall</h5>

                                <div class='p-3'>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <button data-state="1" name='suit_B' id="suit_B" type="submit"
                                            class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn"> Book
                                            Now </button>
                                </div>

                            </div>
                        </li>
                        {{-- suit_C --}}
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 " src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    alt="">
                            </div>

                            <div class="card_about">
                                <h5 class="font_cherry p-3  text-light">Photography inside the hall</h5>

                                <div class='p-3'>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 500.00
                                        </h5>
                                        <button data-state="1" name='suit_C' id="suit_C" type="submit"
                                            class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn"> Book
                                            Now </button>
                                </div>

                            </div>
                        </li>
                        {{-- suit_D --}}
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 " src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card_about">
                                <h5 class="font_cherry p-3  text-light">Photography inside the hall</h5>

                                <div class='p-3'>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 150.00
                                        </h5>
                                        <button data-state="1" name='suit_D' id="suit_D" type="submit"
                                            class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn"> Book
                                            Now </button>
                                </div>

                            </div>
                        </li>
                        {{-- suit_E --}}
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 " src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    </div>
                                <div class="card_about">
                                    <h5 class="font_cherry p-3  text-light">Photography inside the hall</h5>

                                    <div class='p-3'>
                                        <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                        <hr>
                                        <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                        <hr>
                                        <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                        <hr>
                                        <h3 class='text-light price'>
                                            $ 300.00
                                            </h5>
                                            <button data-state="1" name='suit_E' id="suit_E" type="submit"
                                                class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn">
                                                Book Now </button>
                                    </div>

                                </div>
                        </li>
                        {{-- suit_F --}}
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 " src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    alt="">
                            </div>

                            <div class="card_about">
                                <h5 class="font_cherry p-3  text-light">Photography inside the hall</h5>

                                <div class='p-3' >
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 500.00
                                        </h5>
                                        <button data-state="1" name='suit_F' id="suit_F" type="submit"
                                            class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn"> Book
                                            Now </button>
                                </div>

                            </div>
                        </li>
                        {{-- suit_G --}}
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 " src="{{ asset('website/images/image_categories/accessories_no_border.jpg') }}"
                                    alt="">
                            </div>

                            <div class="card_about">
                                <h5 class="font_cherry p-3  text-light">Photography inside the hall</h5>

                                <div class='p-3'>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h5 class='text_gray  font_cherry  text_book'>Photography inside the hall</h5>
                                    <hr>
                                    <h3 class='text-light price'>
                                        $ 300.00
                                        </h5>
                                        <button data-state="1" name='suit_G' id="suit_G" type="submit"
                                            class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn"> Book
                                            Now </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    {{-- </form> --}}
                </div>

                <div class="col-12 d-flex text-end  justify-content-end">
                    {{-- URL decorations page --}}
                    <a href="{{ route('farah.reservation.wedding.shopping') }}"
                    class='btn responsive_btn_book border w-25 text-center  p-3 h3 booking_btn'>Next </a>
                </div>
            </div>

        </div>
     @endsection
