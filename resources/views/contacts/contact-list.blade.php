@extends('layouts.app')

@section('title', 'All Contacts')

@section('content')
@if (session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="text-success mt-1">
            {{ session('success') }}
        </div>
    </div>
@endif
        
<h1>List Contacts</h1>
<div class="table-responsive">
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NAME</th>
                <th>CONTACT</th>
                <th>E-MAIL</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->contact }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('contact.form', $contact->id) }}" class="btn btn-warning">Edit</a>
                        <form method="POST" action="{{ route('contact.destroy', $contact->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Delete register?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
        <tr>
            <td colspan="4">
                Empty contact
            </td>
        </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection