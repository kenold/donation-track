@extends('layouts.main')

@section('content')
    <h1>{{ $contact->lname}}, {{ $contact->fname}} {{ $contact->mname}}</h1>

    <table class="table">
        <tr>
            <th>Items</th>
            <th># of Items</th>
            <th>Donation Date</th>
        </tr>
        @foreach ($contact->items as $item)
            <tr>
                <td>{{ $item->name }} <br /></td>
                <td>-</td>
                <td>{{ $item->pivot->updated_at->diffForHumans() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
