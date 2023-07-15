<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {

        $contacts = Contact::where('done',$id)->orderBy('id','DESC')->get();

        return View('dashboard.contact.index' ,compact('contacts','id')) ;
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
    public function show(int $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::find(1);

        return View('dashboard.about.edit' ,compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $contact = Contact::find($id);

        $contact->update([
            'done'=>1,
        ]);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.contacts',0);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
