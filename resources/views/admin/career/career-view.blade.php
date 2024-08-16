@extends('admin.layouts.layout')

@section('title','Home')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card text-white bg-flat-color-1 full-cards">
                <div class="card-body pb-0">

                    <div class="row">
                        <div class="col-md-6 custom-grid">
                            
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-4 right-side">
                                    <div class="form-group">
                                        <select id="mySelectexp" class="form-group" data-placeholder="Experience..." onchange="demo(this.value)">
                                            {{-- <option value="" selected>Choose Experience</option> --}}
                                            @forelse ($experience as $item)
                                            
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @empty
                                                <option value="">No Experience options available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 right-side">
                                    <div class="form-group">
                                        <select id="mySelectreq" class="form-group" data-placeholder="Requirement" onchange="demo2(this.value)">
                                            <option class="form-control"  value="" selected>Requirement</option>
                                            @forelse ($technologies as $req)
                                            
                                                <option class="form-control"  value="{{ $req }}">{{ $req }}</option>
                                            @empty
                                                <option class="form-control"  value="">No Requirement options available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 right-side">
                                    <div class="form-group">
                                        <select id="mySelectLcn" class="form-control" data-placeholder="Location" onchange="demo3(this.value)">
                                            {{-- <option class="form-control"  value="" selected>Location</option> --}}
                                            @forelse ($location as $lc)
                                            
                                                <option class="form-control"  value="{{ $lc }}">{{ $lc }}</option>
                                            @empty
                                                <option class="form-control"  value="">No Location options available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12">
                            {{-- <h4 class="card-title ml-0 mb-4">Career Form Data</h4><br> --}}
                            <div class="table-responsive pt-3" id="careerData">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div></div>
        </div>
        @endsection
        @section('js')
     

@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var exp = '';
    var req = '';
    var lcn = '';
    var page = '';
    var qstring = 'exp=' + exp + '&req=' + req + '&lcn=' + lcn;

    $(document).ready(function() {
        getCareerData(qstring);
    });

    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        page = $(this).attr('href').split('page=')[1];
        qstring = 'page=' + page + '&exp=' + exp + '&req=' + req +'&lcn=' + lcn;
        getCareerData(qstring);
    });

    function getCareerData(requestData) {
        // CSRF token setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ route('career-view') }}?' + requestData,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log('Received data:', data); // Debugging line
                if (data && data.data) {
                    $('#careerData').html(data.data);
                } else {
                    $('#careerData').html('<p>No data available.</p>'); // Handle no data case
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

    function demo(expValue) {
        exp = expValue; 
        qstring = '&exp=' + exp + '&req=' + req +'&lcn=' + lcn;
        getCareerData(qstring);
    }
    function demo2(reqValue) {
        req = reqValue; // Update the exp value
        qstring = '&exp=' + exp + '&req=' + req +'&lcn=' + lcn;
        getCareerData(qstring);
    }
    function demo3(locationValue) {
        lcn = locationValue; // Update the exp value
        qstring = '&exp=' + exp + '&req=' + req +'&lcn=' + lcn;
        getCareerData(qstring);
    }
    
    $(document).ready(function() {
            $('#mySelectexp').select2();
            $('#mySelectreq').select2();
            $('#mySelectLcn').select2();
        });

</script>