<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit()
    {
        $contact = Contact::first();
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'map_embed' => 'nullable',
        ]);

        $contact = Contact::first();
        $contact->update($request->all());

        return redirect()->route('admin.contact.edit')->with('success', 'Contact info updated successfully.');
    }
}
