<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['client'])->orderBy('date_from','ASC')->get();

        return View('dashboard.order.index',compact('orders') );
    }

    /**
     * Display a listing of the resource.
     */
    public function get($id)
    {
        $orders = Order::where('is_active',$id)->with(['client'])->orderBy('date_from','ASC')->get();

        return View('dashboard.order.get',compact('orders') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = Section::with('products')->get();

        return View('dashboard.order.create',compact('categorys') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $client = Client::create([
            'name'=> $request->name,
            'phone1'=> $request->phone1,
            'phone2'=> $request->phone2,
            'address'=> $request->address,
        ]);


        $this->attach_order($request,$client);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.order.index');

    }




    private function attach_order($request, $client)
    {

        $order = $client->orders()->create([]);
       // $order->create_order = Carbon::now();
        //$order->update(['discount',$request->discount]);

        $d = Order::where('id',$order->id);



        $order->products()->attach($request->product);

        $total_price = 0;

        foreach ($request->input('product', []) as $id ){
            $product = Product::FindOrFail($id);
            $total_price += $product->total_price;
        }//end of foreach

        $order->update([
            'total_price' => $total_price
        ]);

    }//end of attach order


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = Order::with('products')->where('id',$id)->get();
        return View('dashboard.order.show',compact('orders') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $order_id ,int $id)
    {
        $section_id = Product::where('id',$id)->value('section_id');
        $categorys = Section::where('id',$section_id)->with('products')->get();
        $product = Product::find($id);
        return View('dashboard.order.edit',compact('categorys','product','order_id') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $product = Product::find($request->product_id);
        $order = Order::find($id);

        $total =  $order->total_price + $product->total_price  -  $request->total_price ;
        $order->update(['total_price'=>$total]);

        $productOrder_id = ProductOrder::where('order_id',$id)->where('product_id',$request->product_id_old)->value('id');

        $productOrder = ProductOrder::find($productOrder_id);

        $productOrder->update(['product_id'=>$request->product_id]);

        return redirect()->route('dashboard.order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function done(Request $request ,int $id)
    {
        if($request->discount == null || $request->discount == 0 || $request->discount == false){
            $discount = 0;
        }else{
            $discount = $request->discount;
        }
         $order = Order::find($id);
         $order->update([
            'is_active'=> 1,
            'discount' => $discount
        ]);

        session()->flash('success', __('site.added_successfully'));
        return View('dashboard.order.done',compact('id') );
    }
}
