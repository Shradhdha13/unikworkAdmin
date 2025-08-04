<style>
.modal-content{
    color:#000;
}
.modal-body label{
    font-size:16px;
    font-weight:600;
}
.modal-body span{
    font-size:0.875rem;
    color:#343434;
}
.btn-secondary, .wizard>.actions .disabled a {
    color: #555;
    background-color: #ddd;
    border-color: #ddd;
}
@media (min-width: 576px) {
    .modal-dialog {
        max-width: 1000px;
        margin: 30px auto;
    }
}
</style>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th><input type="checkbox" id="select-all"></th>
            <th>No.</th>
            <th>Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            {{-- <th>I am a</th>
            <th>I need help with</th> --}}
            {{-- <th>Tell us about your project</th> --}}
            <th>Action</td>
        </tr>
    </thead>
    <tbody>
    @if ($contactView->count() > 0)
        @foreach($contactView as $contactData)
            <tr>
                <td><input type="checkbox" class="select-row" value="{{ $contactData->id }}"></td>
                <td>{{ ((($contactView->currentPage() - 1 ) * $contactView->perPage() ) + $loop->iteration) . '.' }}</td>
                <td>{{ $contactData->created_at->format('d-m-y') }}</td>
                <td>{{ $contactData->firstname}} {{ $contactData->lastname}}</td>
                <td>{{ $contactData->email}}</td>
                <td>{{ $contactData->phone}}</td>
                {{-- <td>{{ $contactData->iam}}</td>
                <td>{{ $contactData->help}}</td> --}}
                {{-- <td>{{ $contactData->message}}</td> --}}
                <td>
                
                <div class="ml-2">
                {{-- <a data-id="{{ encrypt($contactData->id) }}" type="button" class="btn btn-primary view-blog p3" id="viewContact">
                    View
                </a> --}}
                   <button 
                        class="btn btn-primary view-contact" 
                        data-toggle="modal" 
                        data-target="#viewContactModal"
                        data-id="{{ $contactData->id }}"
                        data-name="{{ $contactData->firstname }} {{ $contactData->lastname }}"
                        data-phone="{{ $contactData->phone }}"
                        data-iam="{{ $contactData->iam }}"
                        data-help="{{ $contactData->help }}"
                        data-msg="{{ $contactData->message }}"
                    >
                        View
                    </button>
                <a data-id="{{ encrypt($contactData->id) }}" type="button" class="btn btn-primary delete-blog p3" onclick="deletecontact('{{$contactData->id}}')">
                    Delete{{-- <img src="{{ asset('/images/delete.png') }}" alt="icon"> --}}
                </a>
                </div>
            </td>
            </tr>
        @endforeach
        @else
    <tr>
        <td colspan="12" class="text-center">No records found.</td>
    </tr>
@endif
        <!-- View Contact Modal -->
        <div class="modal fade" id="viewContactModal" tabindex="-1" role="dialog" aria-labelledby="viewContactModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><label>Name:</label> <span id="modalName"></span></p>
                <p><label>Phone:</label> <span id="modalPhone"></span></p>
                <p><label>I am:</label> <span id="modaliam"></span></p>
                <p><label>Help:</label> <span id="modalHelp"></span></p>
                <p><label>Message:</label> <span id="msg"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

    </tbody>
</table>
<div>
    {!! $contactView->links() !!}
</div>
<script>
    $(document).on('click', '.view-contact', function () {
        $('#modalName').text($(this).data('name'));
        $('#modalPhone').text($(this).data('phone'));
        $('#modaliam').text($(this).data('iam'));
        $('#modalHelp').text($(this).data('help'));
        $('#msg').text($(this).data('msg'));
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   function contactData(requestData) {
        // CSRF token setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ route('contact-view') }}?' + requestData,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log('Received data:', data); // Debugging line
                if (data && data.data) {
                    $('#contactData').html(data.data);
                } else {
                    $('#contactData').html('<p>No data available.</p>'); // Handle no data case
                }

                // If the pagination is part of the response, make sure to update it
                if (data.pagination) {
                    $('.pagination').html(data.pagination); // Assuming your pagination container has class 'pagination'
                }
            },
            error: function(e) {
                console.error('Error fetching data:', e);
            }
        });
    }

    $(document).ready(function() {
        // Select/Deselect all checkboxes
        $('#select-all').on('click', function() {
            var isChecked = $(this).prop('checked');
            $('.select-row').prop('checked', isChecked);
        });
    
        // Delete selected rows
        $('#contact-delete-selected').on('click', function() {
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
                            url: '{{ route("delete-contacts") }}',
                            type: 'POST',
                            data: { ids: selectedIds },
                            success: function(response) {
                                if (response.success) {
                                    // Optionally reload the table data
                                    contactData(qstring);
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


 function deletecontact(id) {
        $.ajax({
            url: '{{ route('contact_delete') }}?id=' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // $('#careerData').DataTable().destroy();
                // $('#careerData').find('tbody').html(data.data);
                // $('#careerData').DataTable().draw();
                contactData(qstring);

                // // If the pagination is part of the response, make sure to update it
                // if (data.pagination) {
                //     $('.pagination').html(data.pagination); // Assuming your pagination container has class 'pagination'
                // }
            },
            error: function(e) {
                console.error('Error fetching data:', e);
            }
        });
    }

    </script>