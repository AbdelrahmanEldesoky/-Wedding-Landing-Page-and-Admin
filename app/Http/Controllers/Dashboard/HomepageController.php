<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::find(1);

        return View('dashboard.home.index' ,compact('home')) ;
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
        $home = Home::find(1);

        return View('dashboard.home.edit' ,compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $home = Home::find(1);

        $request_data = $request->all();


        if ($request->image1) {

            if ($home->image1 != 'default.png') {

                Storage::disk('public')->delete('/website/images/' . $home->image1);

            }//end of if

            Image::make($request->image1)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('website/images/' . $request->image1->hashName()));
            $request_data['image1'] = $request->image1->hashName();
        }//end of if
        if ($request->image2) {

            if ($home->image2 != 'default.png') {

                Storage::disk('public')->delete('/website/images/' . $home->image2);

            }//end of if

            Image::make($request->image2)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('website/images/' . $request->image2->hashName()));
            $request_data['image2'] = $request->image2->hashName();
        }//end of if
        $home->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
