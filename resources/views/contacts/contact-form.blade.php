@extends('layouts.app')

@section('title', 'Form of Contacts')

@section('content')
    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        @if(session('sucess'))
            <div>
                {{ session('sucess') }}
            </div>
        @endif
        <table>
            <tr>
                <td>
                    <label for="name">Name:</label>
                </td>
                <tr>
                    <td>
                        <input required type="text" name="name" maxlength="100">
                    </td>
                </tr>
            </tr>
            <tr>
                <td>
                    <label for="contact">Contact:</label>
                </td>
                <tr>
                    <td>
                        <input required type="text" name="contact" maxlength="9">
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
                       <input required type="email" name="email" maxlength="100">
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