<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>I am a</th>
            <th>I need help with</th>
            {{-- <th>Tell us about your project</th> --}}
            <th>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contactView as $contactData)
            <tr>
                <td>{{ ((($contactView->currentPage() - 1 ) * $contactView->perPage() ) + $loop->iteration) . '.' }}</td>
                <td>{{ $contactData->created_at->format('d-m-y') }}</td>
                <td>{{ $contactData->firstname}} {{ $contactData->lastname}}</td>
                <td>{{ $contactData->email}}</td>
                <td>{{ $contactData->phone}}</td>
                <td>{{ $contactData->iam}}</td>
                <td>{{ $contactData->help}}</td>
                {{-- <td>{{ $contactData->message}}</td> --}}
                <td><a href="{{ URL::to("admin/contact-delete/$contactData->id") }}" class="btn btn-primary contact-delete">
                    Delete{{-- <i class="mdi mdi-delete"></i> --}}
                </a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<div>
    {!! $contactView->links() !!}
</div>