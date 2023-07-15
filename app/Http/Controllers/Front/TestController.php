<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){
        return view('website.index');
    }
    public function service(){
        return view('website.service.index');
    }
    public function about(){
        return view('website.about.index');
    }
    public function contacts(){
        return view('website.contacts.index');
    }

    public function reservation(){
        return view('website.reservation.index');
    }
    public function photography_index(){
        return view('website.reservation.Wedding.photography.index');

    }
    public function Suit_index(){
        return view('website.reservation.Wedding.Suit.index');
    }
    public function shopping(){
        return view('website.reservation.Wedding.Shopping.index');
    }





    /** to brweser the item */



    public function browse_index(){
        return view('website/browse/index');
      }

  public function browse_photography(){
    return view('website/browse/Photography/index');
  }
  public function browse_Suit(){
    return view('website/browse/Suit/index');
  }
  public function browse_decorations(){
    return view('website/browse/Decorations/index');
  }
  public function browse_chair(){
    return view('website/browse/chair/index');
  }
  public function browse_food(){
    return view('website/browse/Food/index');
  }
  public function browse_guests(){
    return view('website/browse/Guests/index');
  }
  public function browse_dj(){
    return view('website/browse/DJ/index');
  }
  public function booking_details(){
    return view('website/booking_details/index');
  }



  public function test(){
    return view('website/test');
  }
}
