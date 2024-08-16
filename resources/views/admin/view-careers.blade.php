@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
             <div class="card text-white bg-flat-color-1 full-cards">
                <div class="card-body pb-0">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{ url('admin/requirements') }}" class="btn btn-primary">
                                    + Add Career
                                </a>
                                
                                {{-- <div class="form-group">
                                    <div class="custom-file text-left">
                                        <select class="form-control technologydata">
                                            <option value="" selected>Choose Technology</option>
                                            @forelse ($technology as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div> --}}
                            </div>
                            
                            <div class="table-responsive pt-3">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Technology Name</th>
                                        {{-- <th>Qualification</th> --}}
                                        <th>Experience</th>
                                        <th>Location</th>
                                        {{-- <th>Time</th> --}}
                                        <th>Salary</th>
                                        {{-- <th>Requirement</th> --}}
                                        {{-- <th>Position</th> --}}
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($careerView as $careerData)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $careerData->technology}}</td>
                                                {{-- <td>{{ $careerData->qualification}}</td> --}}
                                                <td>{{ $careerData->experience}}</td>
                                                <td>{{ $careerData->location}}</td>
                                                {{-- <td>{{ $careerData->time}}</td> --}}
                                                <td>{{ $careerData->salary}}</td>
                                                {{-- <td>
                                                    @foreach(json_decode($careerData->requirement) as $value)
                                                        <p>{{ $value }}</p>
                                                    @endforeach
                                                </td> --}}
                                                {{-- <td>{{ $careerData->position}}</td> --}}
                                                <td class="d-flex text-center">                                                
                                                    <div class="ml-2"><a href="{{ URL::to("admin/edit-career/$careerData->id") }}" class="btn btn-primary edit-career p3">
                                                        Edit {{-- <i class="mdi mdi-border-color d-block"></i> --}}
                                                    </a></div>

                                                    <div class="ml-2"><a href="{{ URL::to("admin/delete-career/$careerData->id") }}" class="btn btn-primary delete-career p3">
                                                        Delete {{-- <i class="mdi mdi-delete d-block" class="text-center"></i> --}}
                                                     </a></div>
                                                
                                                    {{-- <div class="switcher">
                                                        <label for="{{'status-'.$careerData->id }}">
                                                            <input type="checkbox" data-id="{{$careerData->id}}" id="{{ 'status-'.$careerData->id }}" value="{{ $careerData->status }}" class="switch-action" {{$careerData->status == 1 ? 'checked' : ''}}/><span><small></small></span>
                                                        </label>
                                                    </div> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    {{-- <tfoot>
                                    <tr>
                                      <th>Rendering engine</th>
                                      <th>Browser</th>
                                      <th>Platform(s)</th>
                                      <th>Engine version</th>
                                      <th>CSS grade</th>
                                    </tr>
                                    </tfoot> --}}
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')

    @if(session('msg'))
    <script>
        swal({
        title: "Data Updated Succsessfully !",
        icon: "success",
        timer: 2000,
        });
    </script>
    @endif
    
    <script>
        $(document).on('click', '.switch-action', function(){
            var isChecked = $(this).prop('checked') == true ? 1 : 0;
            $(this).val(isChecked);

            var id = $(this).data('id');

            $.ajax({
                type: 'GET',
                url: '{{ route("update-status") }}',
                dataType: 'json',
                data: {'status' : isChecked, 'id' : id},
                success: function($data){
                    
                }
            });            
        });

        $('.career-table').DataTable({
            paging: true,
            searching: true,
            ordering: true,
            info: true,
            lengthChange: true,
            pageLength: 10, // Number of rows per page
            language: {
                search: "Filter records:",
                paginate: {
                    next: "Next",
                    previous: "Previous"
                },
                info: "Showing _START_ to _END_ of _TOTAL_ entries"
            }
        });

    </script>
@endsection