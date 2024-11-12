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
                                <a href="{{ route('add-blogs') }}" class="btn btn-primary">
                                    + Add Blog
                                </a>
                                
                            </div>
                            
                            <div class="pt-3" id="blogdata">
                               
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


   
    var page = '';
    var qstring ='page=' + page;

    $(document).ready(function() {
        getblogdata(qstring);
    });

    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        page = $(this).attr('href').split('page=')[1];
        qstring = 'page=' + page;
        getblogdata(qstring);
    });

    function getblogdata(requestData) {
        // CSRF token setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ route('bloglist') }}?' + requestData,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log('Received data:', data); // Debugging line
                if (data && data.data) {
                    $('#blogdata').html(data.data);
                } else {
                    $('#blogdata').html('<p>No data available.</p>'); // Handle no data case
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

        $('.blogdata').DataTable({
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
  

        // Delete Blog
        $(document).on('click', '#deleteBlog', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                title: 'Are you sure want to delete this Blog?',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            })
            .then((Done) => {
                if(Done){
                    blogsDelete(id);
                }
            });
        });

        function blogsDelete(id) {
        let url = "{{ route('delete-blog', ':id') }}";
        url = url.replace(':id', id);
        console.log(url);
        $.ajax({
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            success: function(data) {
                getblogdata(qstring);
                if(data.status == 200){
                    swal({
                        title: "Blog deleted succsessfully",
                        icon: "success",
                        timer: 1500
                    });
                }
            }
        });
    };

    </script>
@endsection