<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.contact-list');
    }

    public function store(Request $request) {}

    public function update(Request $request) {}

    public function destroy(int $id) {}
}
