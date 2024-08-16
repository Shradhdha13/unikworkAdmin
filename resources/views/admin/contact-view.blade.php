@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card text-white bg-flat-color-1 full-card">
                    <div class="card-body pb-0">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title ml-0 mb-4">Contact Form Data</h4><br>
                                <div class="table-responsive pt-3">
                                    <table id="example1" class="table table-bordered table-striped">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>   

@endsection