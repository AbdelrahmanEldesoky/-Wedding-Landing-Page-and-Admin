<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\Section;
use App\Models\TypeReservations;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = TypeReservations::get();

        return view('website.reservation.index',compact('reservations'));
    }

    /**
     * start booking section
    */


    public function section(Request $request ,int $type_id, int $orderBy_id,$id)
    {

        if($id ==0){

            $o = Order::max('id');
           $order_id_get= Order::create(['id'=>$id = $o+1]);

            $id = $order_id_get->id;

        }
        $count = Section::where('type_id',$type_id)->where('order_id' ,'!=',0)->count('id');

        $max_orderBy = Section::where('type_id',$type_id)->where('order_id' ,'!=',0)->max('order_id');

        $sections = Section::where('type_id',$type_id)->where('order_id',$orderBy_id)->with('products')->get();

        if($orderBy_id>$max_orderBy) {
            $orders = Order::with('products')->where('id',$id)->get();
            $total = Order::where('id',$id)->value('total_price');
            return view('website.reservation.payment',compact('id','orders','total'));
        }else{
            return view('website.reservation.Wedding.index', compact('sections', 'orderBy_id', 'type_id','id'));
        }
    }

    public function payment(Request $request,int $id)
    {


        $order = Order::find($id);
        $client = Client::create([
            'name'=> $request->name,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'address'=>$request->address,

        ]);

        $order->update(['client_id'=>$client->id,
        'payment'=>$request->payment]);
        return redirect()->route('farah.index');


    }
    public function book(Request $request ,int $type_id, int $order_id,int $id)
    {


        $product = Product::find($request->product_id);
        $order = Order::find($id);

        $total =  $order->total_price + $product->total_price;
        $order->update(['total_price'=>$total]);

        $productOrder = ProductOrder::create([
            'product_id'=> $request->product_id,
            'order_id'=> $id
        ]);

        return redirect()->route('farah.booking.section',[$type_id,$order_id,$id]);

    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
