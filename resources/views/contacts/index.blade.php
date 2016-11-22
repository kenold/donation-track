@foreach ($contacts as $contact)
    <p>{{ $contact->fname }} {{ $contact->mname }}. {{ $contact->lname }}</p>
@endforeach
