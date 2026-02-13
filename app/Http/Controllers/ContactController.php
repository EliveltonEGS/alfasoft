<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $contacts = Contact::orderBy('name')->get();
        return view('contacts.contact-list', compact('contacts'));
    }

    public function form(?int $id = null): View
    {
        $contact = $id ? Contact::findOrFail($id) : null;
        return view('contacts.contact-form', compact('contact'));
    }

    public function show(int $id): View
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.contact-detail', compact('contact'));
    }

    public function store(ContactFormRequest $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->route('contact.form', ['id' => $contact->id])->with('success', 'Contact created.');
    }

    public function update(ContactFormRequest $request, int $id)
    {
        Contact::findOrFail($id)->update($request->validated());
        return redirect()->back()->with('success', 'Contact updated.');
    }

    public function destroy(int $id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contact.index')->with('success', 'Contact deleted.');
    }
}
