@extends('layouts.main')

@section('content')
    <h1>Contacts</h1>
    
    @foreach ($contacts as $contact)
        <p>{{ $contact->fname }} {{ $contact->mname }}. {{ $contact->lname }}</p>
    @endforeach
@endsection
