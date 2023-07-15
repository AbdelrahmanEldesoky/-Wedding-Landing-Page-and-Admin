<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use App\Models\TypeReservations;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::with('type')->get();

        return View('dashboard.features.section.index' ,compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = TypeReservations::get();

        return View('dashboard.features.section.create',compact('types') );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
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

        $section =Section::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.section.index');
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
        $section = Section::find($id);
        $types = TypeReservations::get();

        return View('dashboard.features.section.edit',compact('section','types') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, string $id)
    {
        $section=Section::find($id);

        $request_data = $request->all();


        if($request->has('is_active')){
            $request_data['is_active'] = 1;
        }else{
            $request_data['is_active'] = 0;
        }


        $section->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $section=Section::find($id);

        $section->delete();
        return redirect()->route('dashboard.section.index');
    }
}
