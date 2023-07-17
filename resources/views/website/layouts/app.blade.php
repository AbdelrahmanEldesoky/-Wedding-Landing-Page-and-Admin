<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <meta name="author" content="TemplateMo">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- start style page --}}
    @include('website.layouts.head')
    {{-- end style page --}}


    {{-- start title page --}}
    @yield('title')
    {{-- end title page --}}

</head>

<body>

    {{-- <div class="loading open">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
</div> --}}
    {{--
<script>
    window.onload = function()
    {
        setTimeout(() => {
            document.querySelector(".loading").classList.remove("open")
        }, 1500);
    }
</script> --}}

    {{-- start sub Header --}}
    <div class="container">
        <div class="row row_header">
            <div class="col-4 col-lg-4 p-lg-3 my-2 m-lg-0">
                <div class="row">
                    <div class="col-2 p-0">
                        <img class="w-75 mx-3  my-lg-0 my-2 mx-lg-5" src="{{ asset('website/images/phone.png ') }}"
                            alt="">
                    </div>
                    <div class="col-8 col-lg-6">
                        <p class="call">
                           تواصل معنا
                        </p>
                        <p class=" call margin_16">
                            {{$home->phone}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-4 m-auto">
                <img class=" image_icon" src="{{$home->image_pathlogo}}" alt="">
            </div>
            <div class="col-4 col-lg-4 p-lg-3 my-2 m-lg-0">
                <div class="row m-auto">
                    <div class="col-2 p-0">
                        <img class="w-75 mx-3  my-lg-0 my-2 mx-lg-4" src="{{ asset('website/images/clender.png ') }}"
                            alt="">
                    </div>
                    <div class="col-6">
                        <p class="call">
                            تاريخ
                        </p>
                        <p class="call margin_16">
                            <script>
                                var today = new Date();
                                var dd = String(today.getDate()).padStart(2, '0');
                                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                var yyyy = today.getFullYear();

                                today = mm + '/' + dd + '/' + yyyy;
                                document.write(today);
                            </script>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end sub Header --}}




    {{-- start nav bar --}}
    {{-- <div class="nav_bar">
        <div class="container">
            <div class="row">
                <div class="col-2"><a class="nav_link" href="{{ route('farah.index') }}"> Home </a></div>
                <div class="col-2  m-auto"><a class="nav_link" href="{{ route('farah.reservation') }}"> Reservation </a>
                </div>
                <div class="col-2 m-auto"><a class="nav_link" href="{{ route('farah.service') }}"> Service </a></div>
                <div class="col-2"><a class="nav_link" href="{{ route('farah.about') }}"> About </a></div>
                <div class="col-2"><a class="nav_link" href="{{ route('farah.contacts') }}"> Contacts </a></div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>

        <div class="">
          <a href="{{ route('farah.index') }}" target="_blank">Home</a>
          <a href="{{ route('farah.reservation') }}" target="_blank">Reservation</a>
          <a href="{{ route('farah.service') }}" target="_blank">Service</a>
          <a href="{{ route('farah.about') }}" target="_blank">About</a>
          <a href="{{ route('farah.contacts') }}" target="_blank">Contacts</a>
        </div>
      </div> --}}

      <div class="nav">
        <input type="checkbox" id="nav-check">

        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <a href="{{ route('farah.contacts') }}">تواصل معانا</a>
            <a href="{{ route('farah.booking.reservation') }}">حجز قاعة</a>
            <a href="{{ route('farah.service.index') }}">ماذا نقدم</a>
            <a href="{{ route('farah.about') }}">من نحن</a>
            <a href="{{ route('farah.index') }}">الصفحة  الرئسية</a>
        </div>


    </div>

    <script>
        const navbar = document.querySelector('.nav');
        const navbarHeight = navbar.offsetHeight;
        let isFixed = false;

        window.addEventListener('scroll', () => {
            const scrollPos = window.pageYOffset;

            if (scrollPos >= navbarHeight && !isFixed) {
                navbar.classList.add('nav-fixed');
                isFixed = true;
            } else if (scrollPos < navbarHeight && isFixed) {
                navbar.classList.remove('nav-fixed');
                isFixed = false;
            }
        });

    </script>
    {{-- end nav bar --}}

    {{-- start header --}}
    @yield('home_page_header')

    @yield('other_page_header')

    {{-- <header class="masthead  text-white text-center">
    <div class="container d-flex align-items-center flex-column p-5">
        @yield('title_header')
    </div>
</header> --}}
    {{-- end header --}}


    {{-- start content --}}
    @yield('content')
    <script src="{{ asset('website/my_script/new.js') }}"></script>

    {{-- end content --}}


    {{-- start footer --}}

    <footer class="footer text-center ">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col p-lg-3 border-end border-2">
                    <h4 class="text-light font_cherry">قاعة المرج</h4>
                    <ul>
                        <li><a class="text-light font_lato text-decoration-none" href={{ route('farah.booking.reservation') }}>حجز</a>
                        </li>
                        <li><a class="text-light font_lato text-decoration-none" href="{{ route('farah.service.index') }}">ماذا نقدم</a></li>
                        <li><a class="text-light font_lato text-decoration-none" href="{{ route('farah.about') }}">من نحن</a></li>
                        <li><a class="text-light font_lato text-decoration-none" href="{{ route('farah.contacts') }}">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <!-- Footer Social Icons-->
                <div class="col p-lg-3 border-end border-2">
                    <h4 class="text-light font_cherry">تواصل معنا</h4>
                    <ul>
                        <li class="font_lato text-light"><i class="fa-solid fa-location-dot"></i>  {{$home->address}}  </li>
                        <li class="font_lato text-light"><i class="fa-solid fa-phone"></i>  {{$home->phone}}  </li>
                        <li class="font_lato text-light the_email"><i class="fa-solid fa-envelope"></i>  {{$home->email}}  </li>

                    </ul>

                    <div class="container">
                        <div class="row">
                            <div class="col-2 m-auto">
                                <a class="h4 text-decoration-none text-light" href="{{$home->facebook}}"><i
                                        class="fa-brands fa-facebook"></i></a>
                            </div>
                            <div class="col-2 m-auto">
                                <a class="h4 text-decoration-none text-light" href="{{$home->instagram}}"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer About Text-->
                <div class="col p-lg-3">
                    <h4 class="text-light font_cherry">قاعة المرج</h4>
                    <ul>
                        <li class="text-light font_lato">حجز فرح </li>
                        <li class="text-light font_lato">حجز عيد ميلاد</li>
                        <li class="text-light font_lato">حجز مؤتمر</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{-- end footer --}}


    <script>
        const buttons = document.querySelectorAll(".book");

        // Add click event listener to each button
        buttons.forEach(function(button) {
            button.addEventListener("click", function() {
                // Remove the class from all buttons
                buttons.forEach(function(btn) {
                    btn.classList.remove("mystyle");
                    btn.textContent = 'Book Now';
                });

                // Add the class to the clicked button
                button.classList.add("mystyle");
                button.textContent = 'Confirm';
            });
        });
    </script>

    </script>



    <script src="{{ asset('website/js/isotope.min.js') }}"></script>
    <script src="{{ asset('website/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('website/js/lightbox.js') }}"></script>
    <script src="{{ asset('website/js/tabs.js') }}"></script>
    <script src="{{ asset('website/js/video.js') }}"></script>
    <script src="{{ asset('website/js/slick-slider.js') }}"></script>
    <script src="{{ asset('website/my_script/script.js') }}"></script>

    {{-- end script --}}
    @include('website.layouts.script')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
</body>
