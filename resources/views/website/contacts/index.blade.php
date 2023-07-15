@extends('website.layouts.app')
@extends('website.layouts.header')

{{-- start ttitle page --}}
<title>تواصل معنا</title>
{{-- end title page --}}


{{-- start header --}}
{{-- @section('other_page_header')
    <header class="masthead_two  contact text-white text-center">
        <div class="container d-flex align-items-center flex-column p-5">
            <div class="p-5 my-5"> --}}
{{-- <h1 class="  mb-0  title_header font_cherry">
                    contact us
                </h1> --}}
{{-- </div>
        </div>
    </header>
@endsection --}}
{{-- start header --}}

@section('title_header')
    تواصل معنا
@endsection


{{-- end header --}}

{{-- start content --}}





@section('content')
    <section class="contact_us">
        <div class="container ">
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
                    <div class="col-xs-12 text-center">
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
        </div>
    </section>
@endsection




{{-- end content --}}
