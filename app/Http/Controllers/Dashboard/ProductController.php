<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('section')->get();

        return View('dashboard.features.product.index' ,compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Section::get();

        return View('dashboard.features.product.create',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
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

        Product::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.product.index');
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
        $product = Product::find($id);
        $sections = Section::get();

        return View('dashboard.features.product.edit',compact('sections','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, int $id)
    {
        $product = Product::find($id);

        $request_data = $request->all();


        if($request->has('is_active')){
            $request_data['is_active'] = 1;
        }else{
            $request_data['is_active'] = 0;
        }


        $product->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('dashboard.product.index');
    }
}
