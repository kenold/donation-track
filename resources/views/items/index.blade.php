@foreach ($items as $item)
    <p>{{ $item->name }} - {{ $item->category_id }}</p>
@endforeach
