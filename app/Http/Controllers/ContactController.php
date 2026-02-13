<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contacts.contact-list');
    }

    public function form(): View
    {
        return view('contacts.contact-form');
    }

    public function store(ContactFormRequest $request)
    {
        $data = $request->all();
        Contact::create($data);
        return redirect()->back()->with('sucess', 'Contact created.');
    }

    public function update(ContactFormRequest $request) {}

    public function destroy(int $id) {}
}
