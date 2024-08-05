@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title ml-0 mb-4">Career Form Data</h4><br>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            {{-- <th width="50px"><input type="checkbox" id="master"></th> --}}
                                            <th>Id</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Expected Monthly Salary</th>
                                            <th>Experience</th>
                                            <th>Requirement</th>
                                            <th>Location</th>
                                            {{-- <th>Portfolio</th> --}}
                                            <th>CV</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($careerView as $careerData)
                                            <tr>
                                                {{-- <td><input type="checkbox" class="sub_chk" data-id="{{$careerData->id}}"></td> --}}
                                                <td>{{ ((($careerView->currentPage() - 1 ) * $careerView->perPage() ) + $loop->iteration) . '.' }}</td>
                                                <td>{{ $careerData->created_at->format('d-m-y g:i A') }}</td>
                                                <td>{{ $careerData->firstname }} {{ $careerData->lastname }}</td>
                                                <td>{{ $careerData->email }}</td>
                                                <td>{{ $careerData->phone }}</td>
                                                <td>{{ $careerData->expected_salary }}</td>
                                                <td>{{ $careerData->experience }}</td>
                                                <td>{{ isset($careerData->requirementDetail['technology']) ? $careerData->requirementDetail['technology'] : '' }}</td>
                                                <td>{{ ($careerData->location) ? $careerData->location : '-' }}</td>
                                                {{-- <td>
                                                    @if($careerData->portfolio != null)
                                                        <a href="{{ URL::to('public/career_images/portfolio').'/'.$careerData->portfolio }}" target="_blank"><span class="mdi mdi-download"></span></a>
                                                    @else
                                                        -
                                                    @endif
                                                </td> --}}
                                                <td>
                                                    @if($careerData->cv != null)
                                                        <a href="{{ URL::to('public/career_images/cv').'/'.$careerData->cv }}" target="_blank"><span class="mdi mdi-download"></span></a>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td><a href="{{ URL::to("admin/career-delete/$careerData->id") }}" class="career-delete"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {!! $careerView->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection