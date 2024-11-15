@extends('admin.layouts.layout')

@section('pagename',$pagename)

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
                                <div class="table-responsive pt-3" id="contactData">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>   

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var page = '';
    var qstring = 'page=' + page;

    $(document).ready(function() {
        contactData(qstring);
    });

    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        page = $(this).attr('href').split('page=')[1];
        qstring = 'page=' + page;
        contactData(qstring);
    });

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

     // Delete Contacts
     $(document).on('click', '#deleteContact', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure want to delete this Contact?',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        })
        .then((Done) => {
            if(Done){
                contactDelete(id);
            }
        });
    });

    function contactDelete(id) {
        let url = "{{ route('contact-delete', ':id') }}";
        url = url.replace(':id', id);
        console.log(url);
        $.ajax({
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            success: function(data) {
                contactData(qstring);
                if(data.status == 200){
                    swal({
                        title: "Contact deleted succsessfully",
                        icon: "success",
                        timer: 1500
                    });
                }
            }
        });
    };

</script>