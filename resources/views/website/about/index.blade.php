@extends('website.layouts.app')
{{-- start ttitle page --}}
<title>About Us</title>
{{-- end title page --}}



{{-- start content --}}

@section('content')
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class='container container_device'>
                        <div class='device desktop'>
                          <img src="{{$about->image_path}}">
                        </div>
                      </div>
                </div>
                <div class="col-12 col-lg-6" style="text-align: right;">
                    <div class="row text-right">
                        <h2 class="about_title text-dark">
                            {{$about->txt1}}
                        </h2>
                        <hr>
                        <h3 class="about_details">
                            {{$about->txt2}}
                        </h3>
                        <div class="row text-center">
                            <div class="col-6 p-1 m-auto">
                                <button type="button" class="btn btn_about text-light"><h3>{{$client}} عميل</ا></button>
                            </div>

                            <div class="col-6 p-1 m-auto">
                                <button type="button" class="btn btn_about text-light"><h3>{{$order}} حجز</h3></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400");
.device {
  border-radius: 20px;
  position: relative;
  box-sizing: border-box;
  background: #fff;
  box-shadow: inset 0 4px 7px 1px #fff, inset 0 -5px 20px rgba(173, 186, 204, 0.25), 0 2px 6px rgba(0, 21, 64, 0.14), 0 10px 20px rgba(0, 21, 64, 0.05);
}

.device img {
  width: 100%;
  border-radius: 4px;
  border: 1px solid rgba(0, 0, 0, 0.24);
}

.device::before,
.device::after {
  content: "";
  display: block;
  position: absolute;
  background: #fff;
  box-shadow: inset 0 4px 7px 1px #fff, inset 0 -5px 20px rgba(173, 186, 204, 0.25), 0 2px 6px rgba(0, 21, 64, 0.14), 0 10px 20px rgba(0, 21, 64, 0.05);
border: 1px solid #000 ;
}
.desktop {
  margin-bottom: 11%;
  border-radius: 1vw;
  padding: 1.5%;
  border: 1px solid #000 ;

}

.desktop::before {
  margin: 0 auto;
  left: 0;
  right: 0;
  bottom: -18%;
  width: 20%;
  height: 20%;
  background: #fafafa;
  z-index: -1;
  border: 1px solid #000 ;

}

.desktop::after {
  border-radius: 4px 4px 24px 24px;
  margin: 0 auto;
  left: 0;
  right: 0;
  bottom: -19.5%;
  width: 34%;
  height: 2%;
}
@media (max-width: 800px) {
  .device-collection .device {
    border-radius: 1vw;
  }
}
.container_device {
  max-width: 100%;
  margin: 40px;
}
</style>
