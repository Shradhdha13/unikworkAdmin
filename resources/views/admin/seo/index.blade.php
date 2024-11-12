@extends('admin.layouts.layout')

@section('title', 'SEO Page Details')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card text-white bg-flat-color-1 full-cards">
                <div class="card-body pb-0">
            <div class="row add-user mb-4">
                <div class="col-6 text-left custom-grid">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        + Add SEO Page Detail
                    </button>
                </div>
                
                <div class="col-6">
                
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">  
                            <div class="modal-content">
                                <div class="modal-header p-0">
                                    <h4 class="modal-title m-0 text-dark" id="exampleModalLabel">Add/Update SEO Page Detail</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body form-container">
                                    <form class="forms-sample add-seo" id="addSEO" method="post" action="{{ route('add-seo') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label>Page Name</label>
                                            <input type="text" name="page_name" id="page_name" class="form-control" placeholder="Page Name">
                                            {{-- <input type="hidden" name="id" id="usersid"> --}}
                                            <input type="hidden" name="id" id="id">
                                        </div>

                                        <div class="form-group">
                                            <label>Title Name</label>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Title Name">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" class="form-control" placeholder="Description" rows="5" cols="40"></textarea>
                                            {{-- <input type="text" name="description" id="description" class="form-control" placeholder="Description"> --}}
                                        </div>
                                        <div class="form-group">
                                            <label>Key Word</label>
                                            <input type="text" name="key_word" id="key_word" class="form-control" placeholder="Key Word">
                                        </div>

                                        <div class="button-container">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row view-users">
                <div class="col-md-12">
                    <div class="table-responsive" id="seo_table">

                    </div>
                </div>
            </div>
        </div>
            </div></div>
    </div>
    </div>

@endsection

@section('js')

    <script>
        $('#addSEO').validate({
            rules: {
                page_name: {
                    required: true
                },
                title: {
                    required: true
                },
                description: {
                    required: true
                },
                // key_word: {
                //     required: true
                // }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            }
        });

    // Edit Users
    $(document).on('click','.editseo', function () {
        var id = $(this).data('id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            url: 'edit-seo/' + id,
            dataType: 'json',
            success: function (data) {
                if(data.status == 'true') {
                    var seoData = data.data
                    $('#id').val(seoData.id);
                    $('#page_name').val(seoData.page_name);
                    $('#title').val(seoData.title);
                    $('#description').val(seoData.description);
                    $('#key_word').val(seoData.key_word);
                }
            },
        });
    });    

    // Users Search
    var role = '';
    var page = '';
    var qstring = 'role=' + role;

    $(document).ready(function() {
        getSEOData(qstring);
    });

    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        page = $(this).attr('href').split('page=')[1];
        qstring = 'page=' + page + '&role=' + role;
        getSEOData(qstring);
    });

    // var qstring = 'searchusers=';
    // getSEOData(qstring);
    // $(document).on('keyup','#livesearch',function(){
    //     search = $(this).val();
    //     qstring = 'search='+ search;
    //     getSEOData(qstring);
    //     var query = $(this).val();
    // });

    function getSEOData(qstring)
    {
        $.ajax({
            url: 'seo_details?'+qstring,
            type: 'GET',
            dataType:'json',
            success:function(data)
            {
                $('#seo_table').html(data.data);
            },
            error: function(e) {
            }
        });
    }

    // Delete Users
    $(document).on('click', '#deleteSEO', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure want to delete this SEO page?',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        })
        .then((Done) => {
            if(Done){
                seoDelete(id);
            }
        });
    });

    function seoDelete(id) {
        let url = "{{ route('delete-seo', ':id') }}";
        url = url.replace(':id', id);
        console.log(url);
        $.ajax({
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            success: function(data) {
                getSEOData(qstring);
                if(data.status == 200){
                    swal({
                        title: "SEO Page deleted succsessfully",
                        icon: "success",
                        timer: 1500
                    });
                }
            }
        });
    };
    </script>

@endsection
