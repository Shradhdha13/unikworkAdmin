@extends('admin.layouts.layout')

@section('pagename',$pagename)

@section('content')

        {{-- <div class="main-panel">
            <div class="content-wrapper">
                <div class="card text-white bg-flat-color-1 full-cards">
                    <div class="card-body pb-0">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title ml-0 mb-4">Contact Form Data</h4><br>
                                   <div class="d-flex align-items-center" style="gap: 10px; flex-wrap: nowrap;">
                                   <button id="contact-delete-selected" class="btn btn-primary">Delete All</button>
                                        // <input type="text" name="daterange" id="daterange"  placeholder="Select Date" autocomplete="off" class="form-control" style="max-width: 250px;" /> 
                                       <form method="post" autocomplete="off" action="" style="margin-bottom:5px;">
                                            <input type="text" class="form-control daterange" id="daterange" placeholder="Select Date" autocomplete="off">
                                        </form>

                                  </div>
                               

                                <div class="table-responsive pt-3" id="contactData">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>    --}}
             <div class="main-panel">
        <div class="content-wrapper">
            <div class="card text-white bg-flat-color-1 full-cards">
                <div class="card-body pb-0">

                    <div class="row">
                        <div class="col-md-6 custom-grid">
                             <button id="contact-delete-selected" class="btn btn-primary">Delete All</button>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-4 right-side">
                                 
                                </div>
                                <div class="col-4 right-side"><form method="GET" action="" autocomplete="off">                                       
                                    <input type="text" name="search" class="form-control" placeholder="Search Name" id="name-search" value="{{ request('firstname') }}">  
                                </div>
                                <div class="col-4 right-side">
                                    <form method="post" autocomplete="off" action="" style="margin-bottom:5px;">
                                            <input type="text" class="form-control daterange" id="daterange" placeholder="Select Date" autocomplete="off">
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12">
                            {{-- <h4 class="card-title ml-0 mb-4">Career Form Data</h4><br> --}}
                            <div class="table-responsive pt-3" id="contactData">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
            </div>
            </div>
        </div>

  <!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<!-- Moment.js -->
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
       

  <script>
     var page = '';
     let search = '';
    var qstring = 'page=' + page;
  $('#daterange').val('').attr('placeholder', 'Select Date');$(this).val('').attr('placeholder', 'Select Date');

   $(document).ready(function() {
        contactData(qstring);
    });

    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        page = $(this).attr('href').split('page=')[1];
       let date = $('#daterange').val();
        let qstring = 'page=' + page;
        if (date) {
            qstring += '&date=' + encodeURIComponent(date);
        }
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
                // Destroy DataTable if initialized
            // if ($.fn.DataTable.isDataTable('#contactData')) {
            //     $('#contactData').DataTable().destroy();
            // }
                if (data && data.data) {
                    $('#contactData').html(data.data);
                } else {
                    $('#contactData').html('<p>No data available.</p>'); // Handle no data case
                }
                // $('#pagination').DataTable();
              
                if (data.pagination) {
                    $('.pagination').html(data.pagination); // Assuming your pagination container has class 'pagination'
                }
            },
            error: function(e) {
                console.error('Error fetching data:', e);
            }
        });
    }
       
    $(document).ready(function () {
     

        $('#daterange').on('apply.daterangepicker', function (ev, picker) {
            let start = picker.startDate.format('YYYY-MM-DD');
            let end = picker.endDate.format('YYYY-MM-DD');
            $(this).val(`${start} - ${end}`);
        qstring = 'page=' + page + '&date=' + encodeURIComponent(start + ' - ' + end);
            contactData(qstring);
        });

        $('#daterange').on('cancel.daterangepicker', function () {
            $(this).val('').attr('placeholder', 'Select Date');
            contactData('page=' + page);
        });

        $('#name-search').on('input', function () {
        search = $(this).val();
        page = 1; // reset to first page when new search
        let start = '';
        let end = '';

        if ($('#daterange').val()) {
            [start, end] = $('#daterange').val().split(' - ');
        }

        qstring = 'page=' + page;
        if (search) {
            qstring += '&search=' + encodeURIComponent(search);
        }
        if (start && end) {
            qstring += '&date=' + encodeURIComponent(start + ' - ' + end);
        }

        contactData(qstring);
    });
    });



  </script>

@endsection


  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


  

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

    // function contactDelete(id) {
    //     let url = "{{ route('contact-delete', ':id') }}";
    //     url = url.replace(':id', id);
    //     console.log(url);
    //     $.ajax({
    //         type: 'DELETE',
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         url: url,
    //         success: function(data) {
    //             contactData(qstring);
    //             if(data.status == 200){
    //                 swal({
    //                     title: "Contact deleted succsessfully",
    //                     icon: "success",
    //                     timer: 1500
    //                 });
    //             }
    //         }
    //     });
    // };

</script>

