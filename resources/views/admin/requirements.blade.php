@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title ml-0 mb-4">Add Career</h4><br>
                                <form class="forms-sample" method="post" action="{{ route('add-requirements') }}" id="add_career">
                                    @csrf
                                    <div class="form-group">
                                        <label>Technology Name</label>
                                        <input type="text" class="form-control" id="tech_name" name="tech_name">
                                        {{-- <label class="error text-danger">{{$errors->first('tech_name')}}</label> --}}
                                    </div>

                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification">
                                        {{-- <label class="error text-danger">{{$errors->first('qualification')}}</label> --}}
                                    </div>

                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" id="experience" name="experience">
                                        {{-- <label class="error text-danger">{{$errors->first('experience')}}</label> --}}
                                    </div>

                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" id="location" name="location">
                                        {{-- <label class="error text-danger">{{$errors->first('location')}}</label> --}}
                                    </div>

                                    <div class="form-group">
                                        <label>Time</label>
                                        <input type="text" class="form-control" id="time" name="time">
                                        {{-- <label class="error text-danger">{{$errors->first('time')}}</label> --}}
                                    </div>

                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary">
                                        {{-- <label class="error text-danger">{{$errors->first('salary')}}</label> --}}
                                    </div>


                                    <div class="form-group add_requirement">
                                        <div class="row align-items-center mb-2">
                                            <div class="col-6">
                                                <label class="mb-0">Requirement</label>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <div class="mr-2"><a class="delete btn">-</a></div>
                                                <div><a class="add btn add-more">+</a></div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="requirement" name="requirement[]">
                                    </div>
                                    {{-- <label class="error text-danger">{{$errors->first('requirement[]')}}</label> --}}

                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="number" class="form-control" id="position" name="position">
                                        {{-- <label class="error text-danger">{{$errors->first('position')}}</label> --}}
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light" id="cancle-btn" type="button">Cancel</button>

                                  </form>
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
          title: "Data Inserted Succsessfully !",
          icon: "success",
          timer: 2000,
        });
    </script>
    @endif

    <script>
        $('#add_career').validate({
            rules: {
                tech_name: {
                    required: true
                },
                qualification: {
                    required: true
                },
                experience: {
                    required: true
                },
                location: {
                    required: true
                },
                time: {
                    required: true
                },
                salary: {
                    required: true
                },
                'requirement[]': {
                    required: true
                },
                position: {
                    required: true
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            }
        });
    </script>

@endsection
