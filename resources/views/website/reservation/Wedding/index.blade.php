@extends('website.layouts.app')
{{-- @extends('website.layouts.header') --}}


{{-- start ttitle page --}}
<title>Photography</title>
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
                    <h1 class="page-section-heading text-center  title_content mb-0 font_cherry"> Booking </h1>
                    <div class="divider-custom divider-light w-50">
                        <div class="divider-custom-icon ">
                            @foreach ($sections as $section)
                            <h5 class="font_cherry details_content">{{$section->name}}</h5>
                            @endforeach
                        </div>
                    </div>
                </div>
                <form action="{{ route('farah.booking.book',[$type_id,$orderBy_id+1,$id]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('post') }}

                <div class="col-12">
                    {{-- <form action="" method="post"> --}}
                    <ul class="autoplay_two  d-flex justify-content-around card-list">
                        {{-- Start product section --}}
                        @foreach ($sections as $section)
                        @foreach ($section->products as $product)
                        <li class="card col-sm-12 autoplay_two_m ">
                            <div>
                                <img class="w-100 "
                                    src="{{ $product->image_path}}"
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
                        @endforeach
                        @endforeach
                        {{----End product section --}}
                    </ul>
                    {{-- </form> --}}
                </div>
                <div class="col-12 d-flex text-end  justify-content-end">
                    {{-- URL suit page --}}
                    <input type="submit" value="التالي"
                        class='btn responsive_btn_book border w-25 text-center  p-3 h3 booking_btn'>
                </div>
            </form>
            </div>
        </div>
    </section>
@endsection
