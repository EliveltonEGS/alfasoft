@extends('layouts.app')

@section('title', 'Form of Contacts')

@section('content')
<h1>Contact Form</h1>

    <form method="POST" action="{{ isset($contact) ? route('contact.update', $contact->id) : route('contact.store') }}">
        @csrf
        @if(isset($contact))
            @method('PUT')
        @endif

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="text-success mt-1">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @if (isset($contact) && $contact)
        <input type="hidden" class="form-control" name="id" value="{{ $contact->id }}">
        @endif
        <div class="mb-3">
            <label for="name">Name:</label>
            <input required type="text" class="form-control" name="name" maxlength="100" value="{{ old('name', $contact?->name) }}">
            @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contact">Contact:</label>
            <input required type="text" class="form-control" name="contact" maxlength="9" value="{{ old('contact', $contact?->contact) }}">
            @error('contact')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">E-mail:</label>
            <input required type="email" class="form-control" name="email" maxlength="100" value="{{ old('email', $contact?->email) }}">
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

         <div class="d-flex justify-content-center">
            <button class="btn btn-primary" type="submit">Save</button>
         </div>
    </form>
@endsection