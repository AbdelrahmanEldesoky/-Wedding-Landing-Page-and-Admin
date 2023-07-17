@extends('website.layouts.app')
@extends('website.layouts.header')


{{-- start ttitle page --}}
<title>Browse Booking Wedding</title>
{{-- end title page --}}
<style>
    .meme{
        height: 1139px !important;
    }
</style>
{{-- start header --}}
@section('other_page_header')
    <header class="masthead_two  Wedding text-white text-center">
        <div class="container d-flex align-items-center flex-column p-5">
            <div class="p-5 my-5">
                <h1 class="  mb-0  title_header font_cherry">
                    Browse Booking Wedding
                </h1>
            </div>
        </div>
    </header>
@endsection

{{-- start header --}}
{{-- @section('title_header')
    Wedding
@endsection --}}

@section('content')
    <section id=timeline>
        {{-- <h1>You can view the booking details</h1> --}}
        {{-- <p class="leader"></p> --}}
        <div class="demo-card-wrapper">
            {{-- !----------------------------------------------------------------------------------}}
            {{-- ! Photography                                                                    --}}
            {{-- !----------------------------------------------------------------------------------}}
            @foreach ($sections as $index=>$section)
            <div class="demo-card demo-card--step{{$index+1}}">
                <a href="{{route('farah.service.product',$section->id)}}">
                    <div class="head">
                        <div class="number-box">
                            <span>{{$index+1}}</span>
                        </div>
                        <h2 class="font_cherry"></span>{{$section->name}}</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">{{$section->description}}</p>
                        <img src="{{ $section->image_path }}"
                            alt="Graphic">
                    </div>
                </a>
            </div>
            @endforeach
            {{-- !-------------------------------------------------------------------------------- --}}
            {{-- ! Suit and accessorie --}}
            {{-- !-------------------------------------------------------------------------------- --}}


        </div>
    </section>
 @endsection

