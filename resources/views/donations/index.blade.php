@extends('layouts.main')

@section('content')
    @if(count($donations) > 0)
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Contact</th>
                <th>Amount</th>
                <th># of Items</th>
            </tr>

            @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>{{ $donation->date }}</td>
                    <td>{{ $donation->contact->fname }}, {{ $donation->contact->lname }}</td>
                    <td>${{ $donation->amount }}</td>
                    <td>{{ $donation->item_qty}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <h2>No donations!</h2>
    @endif

@endsection
