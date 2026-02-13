@extends('layouts.app')

@section('title', 'All Contacts')

@section('content')
<table>
    <thead>
        <tr>
            <td>NAME</td>
            <td>CONTACT</td>
            <td>E-MAIL</td>
        </tr>
    </thead>
    <tbody>
    @forelse ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->contact }}</td>
            <td>{{ $contact->email }}</td>
        </tr>
    @empty
    <tr>
        <td colspan="3">
            Empty contact
        </td>
    </tr>
    @endforelse
    </tbody>
</table>
@endsection