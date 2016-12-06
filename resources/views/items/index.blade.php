@extends('layouts.main')

@section('content')
    <div class="col-md-3">
    <div class="list-group">
    <ul>
        <li class="list-group-item">All <span class="badge">{{ $items->count() }}</span></li>
        @foreach ($categories as $category)
            <li class="list-group-item">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></li>
        @endforeach
    </ul>
    </div>
</div>

<div class="col-md-9">
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Category</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
