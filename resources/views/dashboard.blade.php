@extends('layout.app')

@section('content')
    {{-- Show session value name --}}
    @if(session('name'))
        <h3>Welcome, {{ session('name') }}!</h3>
    @endif

    <h4>Contact List</h4>

    {{-- Create a PHP array of contacts --}}
    @php
        $contacts = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Michael Brown', 'email' => 'michael@example.com', 'phone' => '555-666-7777'],
        ];
    @endphp

    {{-- Conditional check for empty array --}}
    @if(count($contacts) > 0)
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                {{-- Loop through contacts using foreach --}}
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No Contacts Found</p>
    @endif
@endsection