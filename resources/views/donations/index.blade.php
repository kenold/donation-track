@extends('layouts.main')

@section('page-header')
    <h1>Recent Donations</h1>
@endsection

@section('content')
    <table class="table table-bordered table-responsive" id="filterTable">
        <thead>
            <tr>
                <th>Contact ID</th>
                <th>Contact Name</th>
                <th># of Items Donated</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td><a href="{{ url('/donations/contact', $contact->id) }}">{{ $contact->fname }}
                        {{ isset($contact->mname) ? $contact->mname.'.' : '' }}
                        {{ $contact->lname }}</a></td>
                    <td>{{ count($contact->items) }} <br /></td>
                </tr>
            @endforeach
        </tbody>

        {{-- <h1>Most Recents</h1>
        @foreach ($contacts->items as $item)
            {{ $item->name }} <br />
        @endforeach --}}

    </table>
@endsection
