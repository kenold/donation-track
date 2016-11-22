<ul>
    @foreach ($donations as $donation)
        <h1>{{ $donation->contact_id }}</h1>
        <li>Amount: ${{ $donation->amount }}</li>
        <li>Item: {{ $donation->item_id }} ({{ $donation->item_qty}})</li>
    @endforeach
</ul>
