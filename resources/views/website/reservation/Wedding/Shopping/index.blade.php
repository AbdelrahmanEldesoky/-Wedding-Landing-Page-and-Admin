@extends('website.layouts.app')
@extends('website.layouts.header')



{{-- start ttitle page --}}
<title>Shopping Cart</title>
{{-- end title page --}}


{{-- start header --}}


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="page-section-heading text-center  title_content mb-0 font_cherry"> Shopping Cart </h1>
                </div>






                <div class="col-12">
                    <div class="row">
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <img class="w-50 p-2" src="{{ asset('website/images/image_content/image_con.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h5 class=' font_cherry'>
                                Photography inside the hall
                                </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h3 class='  text-danger'> $500.00 </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <button class='btn responsive_btn_book border w-50 text-center  p-3 h3 booking_btn'>
                                Delete</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <img class="w-50 p-2" src="{{ asset('website/images/image_content/image_con.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h5 class=' font_cherry'>
                                Photography inside the hall
                                </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h3 class='  text-danger'> $500.00 </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <button class='btn responsive_btn_book border w-50 text-center  p-3 h3 booking_btn'>
                                Delete</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <img class="w-50 p-2" src="{{ asset('website/images/image_content/image_con.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h5 class=' font_cherry'>
                                Photography inside the hall
                                </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h3 class='  text-danger'> $500.00 </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <button class='btn responsive_btn_book border w-50 text-center  p-3 h3 booking_btn'>
                                Delete</button>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <img class="w-50 p-2" src="{{ asset('website/images/image_content/image_con.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h5 class=' font_cherry'>
                                Photography inside the hall
                                </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <h3 class='  text-danger'> $500.00 </p>
                        </div>
                        <div class="col-3 d-flex  justify-content-center align-items-center">
                            <button class='btn responsive_btn_book border w-50 text-center  p-3 h3 booking_btn'>
                                Delete</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-12">
                    <h3 class="text-end p-2 text-danger">
                        Total : $1500.00
                    </h3>
                </div>
                <div class="col-12 p-5">
                    <h1 class="page-section-heading text-center  title_content mb-0"> Send Your Data </h1>
                </div>
                <div class="col-12">
                    <div class="w-100 row input-container p-2 m-auto">
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input wide w-100">
                                <input type="text" required />
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input wide w-100">
                                <input type="text" required />
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input w-100">
                                <input type="text" required />
                                <label>Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input w-100" style="float:right;">
                                <input type="text" required />
                                <label>Confirm Phone Number</label>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <label for="date_wedding" class="h5 text-dark ">Your Wedding (date and time):</label>
                            <div class="styled-input w-100" style="float:right;">
                                <input type="datetime-local" id="date_wedding" name="date_wedding"
                                    class="h2 form-control contacts_input date_wedding">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input w-100" style="float:right;">
                                <div class="row">
                                    <div class="form-check col-3">
                                        <input class="p-lg-2 p-0 form-check-input" type="radio" name="exampleRadios"
                                            id="cash" value="cash">
                                        <label class=" form-check-label h4 text-dark font_cherry p-2" for="cash">
                                            cash
                                        </label>
                                    </div>

                                    <div class="form-check col-3">
                                        <input class="p-lg-2 p-0 form-check-input" type="radio" name="exampleRadios"
                                            id="visa" value="visa">
                                        <label class="form-check-label label_visa h4 text-dark font_cherry p-2"
                                            for="visa">
                                            visa
                                        </label>
                                    </div>

                                    <div class="row  d-none" id="neno">
                                        <div class="col-md-12 p-2 col-sm-12">

                                            <input id="cc-number" name="cc-number" type="tel"
                                                class="orm-check-input form-control visa cc-number identified "
                                                value="" data-val="true"
                                                data-val-required="Please enter the card number"
                                                data-val-cc-number="Please enter a valid card number"
                                                autocomplete="cc-number" placeholder="Card Number">
                                            <span class="help-block " data-valmsg-for="cc-number"
                                                data-valmsg-replace="true"></span>

                                        </div>

                                        <div class="col-md-12 p-2 col-sm-12">
                                            <label class="h6  text-light" for="card_holders">Card Holders</label>
                                            <input type="number" class="form-control " id="card_holders"
                                                placeholder="Card Holders" required="">

                                        </div>

                                        <div class="col-4">
                                            <label class="label_visa label_visa_select" for="expiration_date">Expiration
                                                Date</label>
                                            <div class="h6  my-lg-2 text-light form-group">
                                                <select class="form-control" id="expiration_date">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                        </div>





                                        <div class="col-4">
                                            <label class="label_visa label_visa_select" for="year">Year</label>
                                            <div class="h6  my-lg-2 text-light form-group">
                                                <select class="form-control" id="year">
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>
                                                    <option>2027</option>
                                                    <option>2028</option>
                                                    <option>2029</option>
                                                    <option>2030</option>
                                                    <option>2031</option>
                                                    <option>2032</option>
                                                    <option>2033</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="cvv" class="label_visa label_visa_select h6 ">cvv</label>
                                            <input type="text" id="cvv" name="cvv"
                                                class="my-lg-1 h2 form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="styled-input wide w-100">
                                <textarea required></textarea>
                                <label>Message</label>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center">
                            <div class="w-50 text-center btn-lrg submit-btn">Send Message</div>
                        </div>
                    </div>
                </div>


                <script>
                    var cash = document.getElementById('cash');
                    var visa = document.getElementById('visa');
                    var d_none = document.getElementById('neno')
                    cash.addEventListener('change', () => {
                        d_none.classList.add('d-none')
                    })
                    visa.addEventListener('change', () => {
                        d_none.classList.remove('d-none')

                    })
                </script>




            </div>
        </div>


    </section>
@endsection
