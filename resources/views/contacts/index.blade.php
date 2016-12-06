@extends('layouts.main')

@section('content')
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Name</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Phone</th>
                <th>State</th>
                <th>Email</th>
            </tr>
        </thead>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->lname }}, {{ $contact->fname }}
                    {{ isset($contact->mname) ? $contact->mname.'.' : '' }}</td>
                <td>{{ $contact->job_title }}</td>
                <td>{{ $contact->company }}</td>
                <td>{{ isset($contact->cell_phone) ? $contact->cell_phone : $contact->work_phone }}</td>
                <td>{{ $contact->state }}</td>
                <td>{{ $contact->email }}</td>
            </tr>
        @endforeach
    </table>

    <div>{{ $contacts->links() }}</div>
@endsection
