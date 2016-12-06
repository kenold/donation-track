@extends('layouts.sidebar')

@section('sidebar')
    <div class="list-group">
        <ul>
            <li class="list-group-item">All <span class="badge">{{ $items->count() }}</span></li>
            @foreach ($categories as $category)
                <li class="list-group-item">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></li>
            @endforeach
        </ul>
    </div>
@endsection

@section('content')
    <table class="table table-striped table-responsive">
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
@endsection
