@extends('layouts.main')

@section('content')
<ul>
    @foreach ($donations as $donation)
        <h1>{{ $donation->contact->fname }}, {{ $donation->contact->lname }}</h1>
        <li>Amount: ${{ $donation->amount }}</li>
        <li>Item: {{ $donation->item_id }} ({{ $donation->item_qty}})</li>
        <li>Date: {{ $donation->created_at->diffInYears(Carbon\Carbon::now()) }}</li>
    @endforeach
</ul>
@endsection
