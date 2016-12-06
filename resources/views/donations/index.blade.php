@extends('layouts.main')

@section('content')
    @section('page-header')
        <h1>Recent Donations</h1>
    @endsection

    <table class="table">
        <thead>
            <tr>
                <th>Contact ID</th>
                <th>Contact Name</th>
                <th># of Items Donated</th>
            </tr>
        </thead>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td><a href="{{ url('/donations/contact', $contact->id) }}">{{ $contact->fname }}
                    {{ isset($contact->mname) ? $contact->mname.'.' : '' }}
                    {{ $contact->lname }}</a></td>
                <td>{{ count($contact->items) }} <br /></td>
            </tr>
        @endforeach

        {{-- <h1>Most Recents</h1>
        @foreach ($contacts->items as $item)
            {{ $item->name }} <br />
        @endforeach --}}

    </table>
@endsection
