<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Jobs\SendContactEmailJob;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('backend.contact.index', compact('contacts'));
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
    public function store(AddContactRequest $request)
    {

        // dd($request);
        try {
            $data = $request->validated();
            $contact = Contact::create($data);
            dispatch(new SendContactEmailJob($contact));
            toastify()->success('Data Submited successfully');
            return back();
        } catch (\Throwable $th) {
            // dd($th);
            toastify()->error( $th);
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('backend.contact.show', compact('contact'));
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
