@extends('website.layouts.app')
@extends('website.layouts.header')



{{-- start ttitle page --}}
<title> Booking </title>
{{-- end title page --}}


{{-- start header --}}

@section('title_header')
    Book your Wedding
@endsection

@section('title_content')
    Book your Wedding
@endsection

@section('the_content')
    <form action="">
        <div class="contacts ">
            {{-- <div class="row p-2">
                <div class="col-3   ">
                    <input type="text" class="form-control contacts_input date_wedding" id="name" aria-describedby="" placeholder="Your Name" required="">
                </div>
                <div class="col-3      ">
                    <input type="email" class="form-control contacts_input date_wedding" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                </div>
                <div class="col-3  ">
                    <input type="text" class="form-control contacts_input date_wedding" id="phone" placeholder="Enter your phone" required="">
                </div>
                <div class="col-3   ">
                    <input type="text" class="form-control contacts_input date_wedding" id="confirm_phone" aria-describedby="" placeholder="Confirm phone" required="">
                </div>

                <div class="col-5  m-auto p-2">
                    <label for="date_wedding" class="h3 text-light ">Your Wedding (date and time):</label>
                    <input type="datetime-local" id="date_wedding" name="date_wedding" class="h2 form-control contacts_input date_wedding">
                </div>
                <div class="col-5 m-auto p-2 ">
                    <div class="row">
                        <div class="form-check col-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="cash" value="cash">
                            <label class="form-check-label h4 text-light font_cherry p-0" for="cash">
                                cash

                            </label>
                        </div>

                        <div class="form-check col-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="visa" value="visa">
                            <label class="form-check-label h4 text-light font_cherry p-0" for="visa">
                                visa

                            </label>
                        </div>

                        <div class="row  d-none" id="neno">
                            <div class="col-12 ">
                                <label class="h6  text-light" for="card_number">Card Number</label>
                                <input type="number" class="form-control " id="card_number" placeholder="Card Number" required="">
                            </div>
                            <div class="col-12">
                                <label class="h6  text-light" for="card_holders">Card Holders</label>
                                <input type="number" class="form-control " id="card_holders" placeholder="Card Holders" required="">
                            </div>
                            <div class="col-4">
                                <div class="h6  text-light form-group">
                                    <label for="expiration_date">Expiration Date</label>
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
                                <div class="h6  text-light form-group">
                                    <label for="year">Year</label>
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
                                <label for="cvv" class="h6  text-light ">cvv</label>
                                <input type="number" id="cvv" name="cvv" class="h2 form-control">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-11 m-auto p-2">
                    <textarea placeholder="Your suggestions" class="form-control  date_wedding" id="suggestions" rows="6"></textarea>

                </div>
                <div class="col-12  p-2 text-center">
                    <button type="submit" class="btn w-50  h2 m-auto font_cherry contacts_btn text-light"> Book
                        Now</button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-5 m-auto p-2 ">
                    <input type="text" class="form-control contacts_input date_wedding" id="name" aria-describedby=""
                        placeholder="Your Name" required="">
                </div>
                <div class="col-5 m-auto p-2    ">
                    <input type="email" class="form-control contacts_input date_wedding" id="email"
                        aria-describedby="emailHelp" placeholder="Enter email" required="">
                </div>
                <div class="col-5 m-auto p-2    ">
                    <input type="text" class="form-control contacts_input date_wedding" id="phone"
                         placeholder="Enter your phone" required="">
                </div>
                <div class="col-5 m-auto p-2 ">
                    <input type="text" class="form-control contacts_input date_wedding" id="confirm_phone" aria-describedby=""
                        placeholder="Confirm phone" required="">
                </div>

                <div class="col-5  m-auto p-2">
                    <label for="date_wedding" class="h3 text-light ">Your Wedding (date and time):</label>
                    <input type="datetime-local" id="date_wedding" name="date_wedding"
                        class="h2 form-control contacts_input date_wedding">
                </div>
                <div class="col-5 m-auto p-2 ">
                    <div class="row">
                        <div class="form-check col-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="cash"
                                value="cash" >
                            <label class="form-check-label h4 text-light font_cherry p-0" for="cash">
                                cash
                                {{-- <img class="w-75 h-75 p-0 " src="https://www7.0zz0.com/2023/06/09/21/195533731.png" alt=""> --}}
                            </label>
                        </div>

                        <div class="form-check col-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="visa"
                                value="visa">
                            <label class="form-check-label h4 text-light font_cherry p-0" for="visa">
                                visa
                                {{-- <img class="w-75 h-75 p-0 rounded-circle" src="https://www.investopedia.com/thmb/3H96L9iC_VUhvsqmnypxfEQW4UA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/full-color-800x450-cee226a48bed4177b90351075b332227.jpg" alt=""> --}}
                            </label>
                        </div>

                        <div class="row  d-none" id="neno">
                            <div class="col-12 ">
                                <label class="h6  text-light" for="card_number">Card Number</label>
                                <input type="number" class="form-control " id="card_number" placeholder="Card Number"
                                    required="">
                            </div>
                            <div class="col-12">
                                <label class="h6  text-light" for="card_holders">Card Holders</label>
                                <input type="number" class="form-control " id="card_holders" placeholder="Card Holders"
                                    required="">
                            </div>
                            <div class="col-4">
                                <div class="h6  text-light form-group">
                                    <label for="expiration_date">Expiration Date</label>
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
                                <div class="h6  text-light form-group">
                                    <label for="year">Year</label>
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
                                <label for="cvv" class="h6  text-light ">cvv</label>
                                <input type="number" id="cvv" name="cvv" class="h2 form-control">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-11 m-auto p-2">
                    <textarea placeholder="Your suggestions" class="form-control  date_wedding" id="suggestions" rows="6"></textarea>

                </div>
                <div class="col-12  p-2 text-center">
                    <button type="submit" class="btn w-50  h2 m-auto font_cherry contacts_btn text-light"> Book
                        Now</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        //         function myFunction() {
        //   var x = document.getElementById("myDIV");
        //   if (x.style.display === "none") {
        //     x.style.display = "block";
        //   } else {
        //     x.style.display = "none";
        //   }
        // }
var cash=document.getElementById('cash');
var visa=document.getElementById('visa');
var d_none = document.getElementById('neno')
cash.addEventListener('change',()=>{
    d_none.classList.add('d-none')
})
visa.addEventListener('change',()=>{
    d_none.classList.remove('d-none')

})
        // if(document.getElementById('cash').checked == true) {
        //     console.log('yes')
        //     alert('test1');
        //         //  document.write("Summer radio button is selected");
        // }
        // if(document.getElementById('visa').checked == true) {
        //     console.log('no')
        //     alert('test2');
        //         //  document.write("Summer radio button is selected");
        // }

        // document.getElementById('submit').onclick= function(){
        // var value = document.getElementsByName('cash');
        // for (var radio of value) {
        //     if (radio.checked) {
        //         console.log('yes')
        //     } else {
        //         console.log('no')

        //     }
        // }



        // const selectElement = document.querySelector('#cash');
        // selectElement.addEventListener('change', (event) => {
        //     const result = document.querySelector('#cash');
        //     result.textContent = ` ${event.target.value}`;
        // });


        // const payment = document.getElementById('cash');
        // payment.addEventListener("change", (e) => {
        //     var data = e.target.value;
        //     const payment_two = document.getElementById('neno');

        //     if (data == "cash") {
        //         // console.log('test');
        //         payment_two.classList.remove('d-none');
        //     } else {

        //         payment_two.classList.add('d-none');
        //     }
        // });
        // var value= document.getElementsByName('contact');
        // for (var radio of value){
        // if (radio.checked) {
        //             alert(radio.value);
        //                     }
        // //  }}
    </script>
@endsection
