<table  class="table table-bordered table-striped">
    {{-- <table id="example2" class="table table-bordered table-striped"> --}}
    <thead>
    <tr>
        {{-- <th width="50px"><input type="checkbox" id="master"></th> --}}
        <th>ID</th>
        <th style="width: 105px">Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Experience</th>
        <th>Expected Salary</th>                                        
        <th>Requirement</th>
        <th>Location</th>
        {{-- <th>Portfolio</th> --}}
        {{-- <th>CV</th> --}}
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($careerView as $careerData)
            <tr>
                {{-- <td><input type="checkbox" class="sub_chk" data-id="{{$careerData->id}}"></td> --}}
                <td>{{ ((($careerView->currentPage() - 1 ) * $careerView->perPage() ) + $loop->iteration) . '.' }}</td>
                <td>{{ $careerData->created_at->format('d/m/y') }} &nbsp;<br> {{ $careerData->created_at->format('g:i A') }}</td>
                <td>{{ $careerData->firstname }} {{ $careerData->lastname }}</td>
                <td>{{ $careerData->email }}</td>
                <td>{{ $careerData->phone }}</td>
                <td>{{ $careerData->experience }}</td>
                <td>{{ $careerData->expected_salary ?: '-' }}</td>                                            
                <td>{{ isset($careerData->requirementDetail['technology']) ? $careerData->requirementDetail['technology'] : '' }}</td>
                <td>{{ ($careerData->location) ? $careerData->location : '-' }}</td>
                {{-- <td>
                    @if($careerData->portfolio != null)
                        <a href="{{ URL::to('public/career_images/portfolio').'/'.$careerData->portfolio }}" target="_blank"><span class="mdi mdi-download"></span></a>
                    @else
                        -
                    @endif
                </td> --}}
{{--                                                 
                <td>
                    @if($careerData->cv != null)
                        <a href="{{ URL::to('public/career_images/cv').'/'.$careerData->cv }}" target="_blank" class="btn btn-primary"><i class="fas fa-download"></i></a>
                    @else
                        -
                    @endif
                </td> --}}
                <td class="d-flex text-center">
                    @if($careerData->cv != null)
                    <div class="ml-2"><a href="{{ URL::to('public/career_images/cv').'/'.$careerData->cv }}" target="_blank" class="btn btn-primary">
                        Download{{-- <i class="fas fa-download"></i> --}}
                    </a></div>
                @else
                    -
                @endif
                
                <div class="ml-2">
                    {{-- <a href="{{ URL::to("admin/career-delete/$careerData->id") }}" class="btn btn-primary career-delete">
                    Delete 
                    </a> --}}
                    <a class="btn btn-primary career-delete" onclick="deleteresume('{{$careerData->id}}')">
                        Delete 
                    </a>
            </div></td>
                
            </tr>
        @endforeach
    </tbody>                                  
  </table>
  <div>
    {!! $careerView->links() !!}
</div>
