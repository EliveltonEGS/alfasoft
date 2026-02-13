@extends('layouts.app')

@section('title', 'All Contacts')

@section('content')
@if (session('success'))
    {{ session('success') }}
@endif
<table>
    <thead>
        <tr>
            <td>NAME</td>
            <td>CONTACT</td>
            <td>E-MAIL</td>
            <td>#</td>
        </tr>
    </thead>
    <tbody>
    @forelse ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->contact }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="{{ route('contact.form', $contact->id) }}">Edit</a>
                <form method="POST" action="{{ route('contact.destroy', $contact->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete register?')">Delete</button>
                </form>
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
@endsection