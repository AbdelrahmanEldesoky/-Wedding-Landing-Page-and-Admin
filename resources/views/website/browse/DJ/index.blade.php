@extends('website.layouts.app')
@extends('website.layouts.header')


{{-- start ttitle page --}}
<title>Browse DJ and fireworks</title>
{{-- end title page --}}



{{-- start header --}}

@section('title_header')
    DJ and fireworks
@endsection



@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="page-section-heading text-center  title_content mb-0 font_cherry">  DJ and fireworks </h1>
                    {{-- <div class="divider-custom divider-light w-50">
                        <div class="divider-custom-icon ">
                            <h5 class="font_cherry details_content">Your Suit and accessories</h5>
                        </div>
                    </div> --}}
                </div>

                <div class="col-12">
                    {{-- <form action="" method="post"> --}}
                        <ul class="autoplay_two  d-flex justify-content-around card-list">
                            {{-- DJ_A --}}
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
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

                                    </div>

                                </div>
                            </li>
                            {{-- DJ_B --}}
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
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

                                    </div>

                                </div>
                            </li>
                            {{-- DJ_C --}}
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
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

                                    </div>

                                </div>
                            </li>
                            {{-- DJ_D --}}
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
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

                                    </div>

                                </div>
                            </li>
                            {{-- DJ_F --}}
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
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

                                        </div>

                                    </div>
                            </li>
                            {{-- DJ_G --}}
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
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

                                    </div>

                                </div>
                            </li>
                            {{-- DJ_H --}}
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/fireworks_no_border.jpg') }}"
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

                                    </div>
                                </div>
                            </li>

                        </ul>
                    {{-- </form> --}}
                </div>

            </div>
        </div>
    </section>
@endsection
