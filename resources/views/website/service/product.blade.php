@extends('website.layouts.app')
@extends('website.layouts.header')


{{-- start ttitle page --}}
<title>Browse Photography</title>
{{-- end title page --}}



{{-- start header --}}

@section('title_header')
    Photography
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="page-section-heading text-center  title_content mb-0 font_cherry"> {{$section->name}} </h1>
                    <div class="divider-custom divider-light w-50">
                        <div class="divider-custom-icon ">
                            <h5 class="font_cherry details_content">{{$type->name}}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    {{-- <form action="" method="post"> --}}
                        <ul class="autoplay_two  d-flex justify-content-around card-list">
                            @foreach ($products as $product)
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 " src="{{ asset('website/images/image_categories/Photography_no_border.jpg') }}"
                                        alt="">
                                </div>

                                <div class="card_about">
                                    <h5 class=" font_cherry p-3  text-light">{{$product->name}}</h5>

                                    <div class='p-3'>
                                        <h5 class='text_gray  font_cherry  text_book'>{{$product->description}}</h5>
                                        <hr>
                                        <h3 class='text-light price'>
                                            $ 300.00
                                            </h5>

                                    </div>

                                </div>
                            </li>
                            @endforeach




                            <div class="col-12">
                                <ul class="autoplay d-flex justify-content-around card-list">
                            <li class="card col-sm-12 autoplay_two_m ">
                                <div>
                                    <img class="w-100 "
                                        src="{{ asset('website/images/image_categories/Photography_no_border.jpg') }}"
                                        alt="">
                                </div>

                                <div class="card_about">
                                    <h5 class=" font_cherry p-3  text-light">{{$product->name}}</h5>

                                    <div class='p-3'>
                                        <h5 class='text_gray  font_cherry  text_book'>{{$product->description}}</h5>
                                        <hr>
                                        <h3 class='text-light price'>
                                            {{$product->total_price}}
                                            </h5>
                                            <input name="product_id" readonly value="{{$product->id}}"  id="photography_A"
                                                class="book btn btn-outline-light text-light w-75 p-3 h3 booking_btn photography_btn">
                                                حجز الان
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
