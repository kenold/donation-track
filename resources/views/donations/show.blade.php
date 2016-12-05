@extends('layouts.main')

@section('content')
    <h1>{{ $contact->lname}}, {{ $contact->fname}} {{ $contact->mname}}
        <small>Total items: {{ count($contact->items) }}</small></h1>
    <hr>
    <table class="table">
        <tr>
            <th>Items</th>
            <th># of Items</th>
            <th>Donation Date</th>
        </tr>
        @foreach ($contact->items as $item)
            <tr>
                <td>{{ $item->name }} <br /></td>
                <td>{{ $item->pivot->item_qty }}</td>
                <td>{{ date('F d, Y', strtotime($item->pivot->date)) }}</td>
            </tr>
        @endforeach
    </table>
@endsection
