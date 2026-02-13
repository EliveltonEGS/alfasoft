<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $contacts = Contact::all();
        return view('contacts.contact-list', compact('contacts'));
    }

    public function form(?int $id = null): View
    {
        $contact = $id ? Contact::findOrFail($id) : null;
        return view('contacts.contact-form', compact('contact'));
    }

    public function store(ContactFormRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('sucess', 'Contact created.');
    }

    public function update(ContactFormRequest $request, int $id)
    {
        Contact::findOrFail($id)->update($request->validated());
        return redirect()->back()->with('sucess', 'Contact updated.');
    }

    public function destroy(int $id) {}
}
