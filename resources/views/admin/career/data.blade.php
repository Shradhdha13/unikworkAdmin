{{-- <button id="delete-selected" class="btn btn-primary">Delete All</button> --}}

<table id="example2" class="table table-bordered table-striped">
    <thead>
    <tr>
        {{-- <th><input type="checkbox" id="select-all"></th> --}}
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
                {{-- <td><input type="checkbox" class="select-row" value="{{ $careerData->id }}"></td> <!-- Row checkbox --> --}}
                {{-- <td>{{ $loop->iteration }}</td> --}}
                <td>{{ ((($careerView->currentPage() - 1 ) * $careerView->perPage() ) + $loop->iteration) . '.' }}</td>
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

                    {{-- <div class="ml-2"><a href="{{ URL::to("admin/delete-career/$careerData->id") }}" class="btn btn-primary delete-career p3">
                        Delete 
                       // <i class="mdi mdi-delete d-block" class="text-center"></i>
                     </a></div> --}}

                     <div class="ml-2"><a data-id="{{ encrypt($careerData->id) }}" type="button" class="btn btn-primary delete-career p3" id="deletecareer">
                        Delete{{-- <img src="{{ asset('/images/delete.png') }}" alt="icon"> --}}
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
  </table>
  <div>
    {!! $careerView->links() !!}
</div>

{{-- 
<script>
    $(document).ready(function() {
        // Select/Deselect all checkboxes
        $('#select-all').on('click', function() {
            var isChecked = $(this).prop('checked');
            $('.select-row').prop('checked', isChecked);
        });

        // Delete selected rows
        $('#delete-selected').on('click', function() {
            var selectedIds = [];
            $('.select-row:checked').each(function() {
                selectedIds.push($(this).val());
            });

            if (selectedIds.length > 0) {
                if (confirm('Are you sure you want to delete selected records?')) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '{{ route("delete-careers") }}',
                        type: 'POST',
                        data: { ids: selectedIds },
                        success: function(response) {
                            if (response.success) {
                                // Optionally reload the table data
                                getcareersdata(qstring);
                            } else {
                                alert('Failed to delete records.');
                            }
                        },
                        error: function(e) {
                            console.error('Error deleting records:', e);
                        }
                    });
                }
            } else {
                alert('No records selected.');
            }
        });

        
    });
</script> --}}
