@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title ml-0 mb-4">View Career</h4><br>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered career-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Technology Name</th>
                                            <th>Qualification</th>
                                            <th>Experience</th>
                                            <th>Location</th>
                                            <th>Time</th>
                                            <th>Salary</th>
                                            <th>Requirement</th>
                                            <th>Position</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($careerView as $careerData)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $careerData->technology}}</td>
                                                <td>{{ $careerData->qualification}}</td>
                                                <td>{{ $careerData->experience}}</td>
                                                <td>{{ $careerData->location}}</td>
                                                <td>{{ $careerData->time}}</td>
                                                <td>{{ $careerData->salary}}</td>
                                                <td>
                                                    @foreach(json_decode($careerData->requirement) as $value)
                                                        <p>{{ $value }}</p>
                                                    @endforeach
                                                </td>
                                                <td>{{ $careerData->position}}</td>
                                                <td class="text-center">
                                                    <div class="mb-2"><a href="{{ URL::to("admin/delete-career/$careerData->id") }}" class="delete-career"><i class="mdi mdi-delete d-block" class="text-center"></i></a></div>
                                                    <div class="mb-2"><a href="{{ URL::to("admin/edit-career/$careerData->id") }}" class="edit-career"><i class="mdi mdi-border-color d-block"></i></a></div>
                                                
                                                    <div class="switcher">
                                                        <label for="{{'status-'.$careerData->id }}">
                                                            <input type="checkbox" data-id="{{$careerData->id}}" id="{{ 'status-'.$careerData->id }}" value="{{ $careerData->status }}" class="switch-action" {{$careerData->status == 1 ? 'checked' : ''}}/><span><small></small></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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
    </script>

@endsection