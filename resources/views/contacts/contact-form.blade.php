@extends('layouts.app')

@section('title', 'Form of Contacts')

@section('content')
    <form method="POST" action="{{ isset($contact) ? route('contact.update', $contact->id) : route('contact.store') }}">
        @csrf
        @if(isset($contact))
            @method('PUT')
        @endif

        @if(session('sucess'))
            <div>
                {{ session('sucess') }}
            </div>
        @endif
        <table>
            <tr>
                <td>
                    @if (isset($contact) && $contact)
                    <input type="text" name="id" value="{{ $contact->id }}">
                    @endif
                    <label for="name">Name:</label>
                </td>
                <tr>
                    <td>
                        <input required type="text" name="name" maxlength="100" value="{{ old('name', $contact?->name) }}">
                    </td>
                </tr>
            </tr>
            <tr>
                <td>
                    <label for="contact">Contact:</label>
                </td>
                <tr>
                    <td>
                        <input required type="text" name="contact" maxlength="9" value="{{ old('contact', $contact?->contact) }}">
                        @error('contact')
                            <div>{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
            </tr>
            <tr>
                <td>
                     <label for="email">E-mail:</label>
                </td>
                <tr>
                    <td>
                       <input required type="email" name="email" maxlength="100" value="{{ old('email', $contact?->email) }}">
                       @error('email')
                            <div>{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>
@endsection