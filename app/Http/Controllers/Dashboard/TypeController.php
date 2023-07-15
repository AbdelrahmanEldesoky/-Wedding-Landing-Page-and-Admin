<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\TypeReservations;
//use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $types = TypeReservations::get();

       return View('dashboard.features.type.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dashboard.features.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeRequest $request)
    {
        $request_data = $request->all();
        if($request->has('is_active')){
            $request_data['is_active'] = 1;
        }else{
            $request_data['is_active'] = 0;
        }


        if($request->has('image')){
            $request_data['image'] = 1;
        }else{
            $request_data['image'] = 0;
        }

        /*
            if ($request->image) {
                Image::make($request->image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save('public/uploads/type'.$request->image->hashName());
                    //->save('/home/u516457093/domains/scarfaceonline.site/public_html/uploads/product_images/' . $request->image->hashName());

                $request_data['image'] = $request->image->hashName();

            }//end of if
*/
        $type =TypeReservations::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.type.index');
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
    public function edit(int $id)
    {
        $type=TypeReservations::find($id);

        return View('dashboard.features.type.edit' ,compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeRequest $request, int $id)
    {

        $type=TypeReservations::find($id);

        $request_data = $request->all();

        if($request->has('is_active')){
            $request_data['is_active'] = 1;
        }else{
            $request_data['is_active'] = 0;
        }

        $type->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type=TypeReservations::find($id);
        $type->delete();
        return redirect()->route('dashboard.type.index');
    }
}
