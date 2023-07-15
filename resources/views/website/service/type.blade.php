@extends('website.layouts.app')
@extends('website.layouts.header')
{{-- start ttitle page --}}
<title>Service</title>
{{-- end title page --}}

{{-- start content --}}

{{-- end content --}}

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 p-lg-5">
                    <h1 class="page-section-heading text-center  title_content mb-0 font_cherry Booking"> Let’s plane your wedding
                    </h1>
                    {{-- <div class="divider-custom divider-light w-50">
                        <div class="divider-custom-icon ">
                            <h5 class="font_cherry details_content">Your Suit and accessories</h5>
                        </div>
                    </div> --}}
                </div>


                <div class="col-12">
                    <ul class="autoplay d-flex justify-content-around card-list">
                       @foreach ($reservations as $reservation)
                        <li class="card col-sm-12">
                            <img class="w-100" src="{{ asset('website/images/image_categories/Photography.jpg') }}"
                                alt="">
                            <h4 class="p-lg-4 font_cherry">{{$reservation->name}}</h4>
                            <a class="text-light text-decoration-none"
                                href="{{route('farah.service.section',$reservation->id)}}"> <button type="button"
                                    class="btn btn_header btn-cherry font_cherry btn_book"> تفاصيل </button> </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </section>
@endsection
