<table  class="table table-bordered table-striped">
    {{-- <table id="example2" class="table table-bordered table-striped"> --}}
    <thead>
    <tr>
        <th><input type="checkbox" id="select-all"></th>
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
     @if ($careerView->count() > 0)
        @foreach($careerView as $careerData)
            <tr id="career-row-{{ $careerData->id }}" class="{{ $careerData->read == 0 ? 'font-weight-bold' : '' }}">
                <td><input type="checkbox" class="select-row" value="{{ $careerData->id }}"></td>
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
                    {{-- <div class="ml-2">
                        <a href="{{ URL::to('public/career_images/cv').'/'.$careerData->cv }}" target="_blank" class="btn btn-primary">
                        Download
                        </a>
                    </div> --}}
                    <a href="{{ URL::to('public/career_images/cv').'/'.$careerData->cv }}"
                    class="btn btn-primary {{ $careerData->read == 0 ? 'btn-success font-weight-bold' : '' }}"
                    id="download-btn-{{ $careerData->id }}"
                    onclick="return markAsRead(event, {{ $careerData->id }})">
                    Download
                    </a>
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
        @else
    <tr>
        <td colspan="12" class="text-center">No records found.</td>
    </tr>
@endif
    </tbody>                                  
  </table>
  <div>
    {!! $careerView->links() !!}
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#f57f50',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
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
                                    getCareerData(qstring);
                                    Swal.fire(
                                        'Deleted!',
                                        'Your records have been deleted.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Failed!',
                                        'Failed to delete records.',
                                        'error'
                                    );
                                }
                            },
                            error: function(e) {
                                console.error('Error deleting records:', e);
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting records.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            } else {
                Swal.fire(
                    'No records selected!',
                    'Please select at least one record to delete.',
                    'warning'
                );
            }
        });
    
    
    });


    </script>
<script>
   function markAsRead(event, id) {
    event.preventDefault();

    const btn = $('#download-btn-' + id);
    const fileUrl = btn.attr('href');
    const row = $('#career-row-' + id); // 💡 get the table row

    $.ajax({
        url: '{{ route("mark-as-read") }}',
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            id: id
        },
        success: function(response) {
            console.log("Read status updated");
            btn.removeClass('btn-success font-weight-bold');
            row.removeClass('font-weight-bold');
            window.open(fileUrl, '_blank');
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
            window.open(fileUrl, '_blank');
        }
    });

    return false;
}
</script>



    