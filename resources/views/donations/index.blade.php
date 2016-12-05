@extends('layouts.main')

@section('content')
    <h1>Donations</h1>
    
    <table class="table">
        <tr>
            <th>Contact ID</th>
            <th>Contact</th>
            <th># of Items</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->fname }} {{ $contact->lname }}</td>
                <td>{{ count($contact->items) }}</td>
            </tr>
        @endforeach
    </table>
@endsection
