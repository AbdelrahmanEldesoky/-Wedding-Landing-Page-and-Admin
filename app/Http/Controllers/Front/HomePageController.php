<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Client;
use App\Models\Home;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\Section;
use App\Models\TypeReservations;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::find(1);
        $reservations = TypeReservations::get();
        $about = About::find(1);
        return view('website.index',compact('home','reservations','about'));
    }

    /**
     * start booking section
    */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
