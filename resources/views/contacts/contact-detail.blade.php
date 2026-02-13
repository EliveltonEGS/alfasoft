@extends('layouts.app')
@section('title', 'Detail of Contacts')

@section('content')
<h1>Detail of Contacts</h1>
<div class="mb-3">
    <label for="name">Name: <b>{{ $contact->name }}</b></label>
</div>
<div class="mb-3">
    <label for="contact">Contact: <b>{{ $contact->contact }}</b></label>
</div>
<div class="mb-3">
    <label for="email">E-mail: <b>{{ $contact->email }}</b></label>
</div>

<div class="d-flex gap-2">
    <a href="{{ route('contact.form', $contact->id) }}" class="btn btn-warning">Edit</a>
    <form method="POST" action="{{ route('contact.destroy', $contact->id) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
    <a href="{{ route('contact.index') }}" class="btn btn-primary" type="submit">Back</a>
</div>
@endsection