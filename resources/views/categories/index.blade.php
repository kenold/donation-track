@extends('layouts.main')

@section('page-header')
    <h1>Categories Listing</h1>
@endsection

@section('content')

        <div class="list-group">
            @foreach ($categories as $category)
                <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></h4>
                <p class="list-group-item-text">{{ $category->notes }}</p>
            </a>
            @endforeach
        </div>
@endsection
