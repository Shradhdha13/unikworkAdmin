@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title ml-0 mb-4">Contact Form Data</h4><br>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>I am a</th>
                                                <th>I need help with</th>
                                                <th>Tell us about your project</th>
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
                                                    <td>{{ $contactData->message}}</td>
                                                    <td><a href="{{ URL::to("admin/contact-delete/$contactData->id") }}" class="contact-delete"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div>
                                        {!! $contactView->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   

@endsection