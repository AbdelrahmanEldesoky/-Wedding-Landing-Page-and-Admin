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
            <div class="demo-card demo-card--step1">
                <a href="#">
                    <div class="head">
                        <div class="number-box">
                            <span>03</span>
                        </div>
                        <h2 class="font_cherry"><span class="small">Subtitle</span> Decorations</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis
                            deserunt doloribus
                            consequatur, laudantium odio dolorum laboriosam.</p>
                        <img src="{{ asset('website/images/image_categories/new/Decorations_no_border.jpg') }}"
                            alt="Graphic">
                    </div>
                </a>
            </div>
            {{-- !-------------------------------------------------------------------------------- --}}
            {{-- ! Suit and accessorie --}}
            {{-- !-------------------------------------------------------------------------------- --}}
            <div class="demo-card demo-card--step2">
                <a href="#">
                    <div class="head">
                        <div class="number-box">
                            <span>02</span>
                        </div>
                        <h2><span class="small">Subtitle</span> Suit and accessorie</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis
                            deserunt doloribus
                            consequatur, laudantium odio dolorum laboriosam.</p>
                        <img src="{{ asset('website/images/image_categories/new/accessories_no_border.jpg') }}"
                            alt="Graphic">
                    </div>
                </a>
            </div>
            {{-- !-------------------------------------------------------------------------------- --}}
            {{-- !                                   Decorations                                  --}}
            {{-- !-------------------------------------------------------------------------------- --}}
            <div class="demo-card demo-card--step3">
                <a href="#">
                    <div class="head">
                        <div class="number-box">
                            <span>05</span>
                        </div>
                        <h2><span class="small">Subtitle</span> Food and drinks</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis
                            deserunt doloribus
                            consequatur, laudantium odio dolorum laboriosam.</p>
                        <img src="{{ asset('website/images/image_categories/new/food_no_border.jpg') }}" alt="Graphic">
                    </div>
                </a>
            </div>
            {{-- !-------------------------------------------------------------------------------- --}}
            {{-- !                                Chair and tables                                --}}
            {{-- !-------------------------------------------------------------------------------- --}}
            <div class="demo-card demo-card--step4">
                <a href="#">
                    <div class="head">
                        <div class="number-box">
                            <span>04</span>
                        </div>
                        <h2><span class="small">Subtitle</span> Chair and tables</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis
                            deserunt doloribus
                            consequatur, laudantium odio dolorum laboriosam.</p>
                        <img src="{{ asset('website/images/image_categories/new/tables_no_border.jpg') }}" alt="Graphic">
                    </div>
                </a>
            </div>
            {{-- !-------------------------------------------------------------------------------- --}}
            {{-- !                                 Food and drinks                                --}}
            {{-- !-------------------------------------------------------------------------------- --}}
            <div class="demo-card demo-card--step5">
                <a href="#">
                    <div class="head">
                        <div class="number-box">
                            <span>07</span>
                        </div>
                        <h2><span class="small">Subtitle</span> DJ and fireworks</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis
                            deserunt doloribus
                            consequatur, laudantium odio dolorum laboriosam.</p>
                        <img src="{{ asset('website/images/image_categories/new/fireworks_no_border.jpg') }}"
                            alt="Graphic">
                    </div>
                </a>
            </div>
            {{-- !-------------------------------------------------------------------------------- --}}
            {{-- !                                     Guests                                       }}
            {{-- !-------------------------------------------------------------------------------- --}}
            <div class="demo-card demo-card--step1">
                <a href="#">
                    <div class="head">
                        <div class="number-box">
                            <span>06</span>
                        </div>
                        <h2><span class="small">Subtitle</span> Guests</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis
                            deserunt doloribus
                            consequatur, laudantium odio dolorum laboriosam.</p>
                        <img src="{{ asset('website/images/image_categories/new/guests_no_border.jpg') }}" alt="Graphic">
                    </div>
                </a>
            </div>
            {{-- !-------------------------------------------------------------------------------- --}}
            {{-- !                                DJ and fireworks                                  }}
            {{-- !-------------------------------------------------------------------------------- --}}
            <div class="demo-card demo-card--step3">
                <a href="{{ route('farah.browse.wedding.browse_photography') }}">
                    <div class="head">
                        <div class="number-box">
                            <span>01</span>
                        </div>
                        <h2><span class="small">Subtitle</span> Photography</h2>
                    </div>
                    <div class="body">
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis
                            deserunt doloribus
                            consequatur, laudantium odio dolorum laboriosam.</p>
                        <img src="{{ asset('website/images/image_categories/new/Photography_no_border.jpg') }}"
                            alt="Graphic">
                    </div>
                </a>
            </div>

        </div>
    </section>
 @endsection

