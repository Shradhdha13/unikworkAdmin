@extends('admin.layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card text-white bg-flat-color-1 full-card">
                <div class="card-body pb-0">
            <div class="row add-user mb-4">
                <div class="col-6 text-left custom-grid">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        + Add User
                    </button>
                </div>
                
                <div class="col-6">
                    
                    <div class="user-search form-group">
                        <div class="col-4 right-side">
                        <input type="search" class="form-control" name="search" placeholder="search" id="livesearch" />
                        </div>
                        <div class="col-4 right-side">
                        <select id="mySelectuser" class="form-group filter-main form-control" name="users-filter" id="usersStatusFilter" data-placeholder="Search User..." onchange="demo(this.value)">
                            {{-- <option value="" selected>Choose Experience</option> --}}
                            <option value="">Show All</option>
                            <option value="1">Admin</option>
                            <option value="2">HR</option>
                            <option value="3">Project Manager</option>
                            <option value="4">Users</option>
                        </select>
                        </div>
                    </div>
                    

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header p-0">
                                    <h4 class="modal-title m-0 text-dark" id="exampleModalLabel">Add User</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body form-container">
                                    <form class="forms-sample add-user" id="addUser" method="post" action="{{ route('add-user') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="firstname" id="firstname" class="form-control">
                                            <input type="hidden" name="usersid" id="usersid">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lastname" id="lastname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="custom-select" name="role" id="role">
                                                <option value="">-- Select Role --</option>
                                                <option value="1">Admin</option>
                                                <option value="2">HR</option>
                                                <option value="3">Project Manager</option>
                                            </select>
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
                    <div class="table-responsive" id="users_table">

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
        $('#addUser').validate({
            rules: {
                firstname: {
                    required: true
                },
                lastname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                password_confirm: {
                    required: true,
                    minlength: 6,
                    equalTo: ".password"
                },
                role: {
                    required: true,
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            }
        });

    // Edit Users
    $(document).on('click','.editusers', function () {
        var id = $(this).data('id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            url: 'edit-user/' + id,
            dataType: 'json',
            success: function (data) {
                if(data.status == 'true') {
                    var usersData = data.data
                    $('#usersid').val(usersData.id);
                    $('#firstname').val(usersData.firstname);
                    $('#lastname').val(usersData.lastname);
                    $('#email').val(usersData.email);
                    $('#role').val(usersData.role)
                }
            },
        });
    });    

    // Users Search
    var qstring = 'searchusers=';
    getUsersData(qstring);
    $(document).on('keyup','#livesearch',function(){
        search = $(this).val();
        qstring = 'search='+ search;
        getUsersData(qstring);
        var query = $(this).val();
    });

    function getUsersData(qstring)
    {
        $.ajax({
            url: 'users?'+qstring,
            type: 'GET',
            dataType:'json',
            success:function(data)
            {
                $('#users_table').html(data.data);
            },
            error: function(e) {
            }
        });
    }

    // Delete Users
    $(document).on('click', '#deleteUser', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure want to delete this User?',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        })
        .then((Done) => {
            if(Done){
                usersDelete(id);
            }
        });
    });

    function usersDelete(id) {
        let url = "{{ route('delete-user', ':id') }}";
        url = url.replace(':id', id);
        console.log(url);
        $.ajax({
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            success: function(data) {
                getUsersData(qstring);
                if(data.status == 200){
                    swal({
                        title: "User deleted succsessfully",
                        icon: "success",
                        timer: 1500
                    });
                }
            }
        });
    };


    $(document).ready(function() {
            $('#mySelectuser').select2();
    });
    </script>

@endsection
