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
                                    <div class="d-flex">
                                        <a href="{{route('bloglist')}}" class="pr-3"><img src="{{asset('images/backArrow.svg')}}"></a>
                                        <h4 class="card-title ml-0 mb-4">Add Blog</h4>
                                    </div><br>
                                    <form class="forms-sample" method="post" action="{{ route('add-blog') }}" id="add_blog" enctype="multipart/form-data">
                                        
                                        @csrf
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                                            <button class="btn btn-light" id="cancle-btn" type="button">Cancel</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="title">Title Name</label>
                                                <input type="text" class="form-control" id="title" name="title">
                                                <label class="error text-danger">{{$errors->first('title')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="category">Category</label>
                                                {{-- <input type="text" class="form-control" id="category" name="category"> --}}
                                                <select id="selectcat" class="form-group filter-main form-control" name="category">
                                                    @forelse ($categoryList as $cat)  
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @empty
                                                        <option value="">No Category available</option>
                                                    @endforelse
                                                </select>
                                                <label class="error text-danger">{{$errors->first('category')}}</label>
                                            </div>
                                           
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="desc">Description</label>
                                                <textarea class="form-control" id="desc" name="desc"></textarea>
                                                <label class="error text-danger">{{$errors->first('desc')}}</label>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="auth_id">Select Author</label>
                                                <select id="mySelectuser" class="form-group" name="auth_id" data-placeholder="Select User">
                                                    <option value="" selected>Select User</option>
                                                    @forelse ($auth_id as $item)                                                    
                                                        <option value="{{ $item->id }}">{{ $item->firstname }}</option>
                                                    @empty
                                                        <option value="">No Users available</option>
                                                    @endforelse
                                                </select>
                                                {{-- <input type="text" class="form-control" id="category" name="category"> --}}
                                                <label class="error text-danger">{{$errors->first('auth_id')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="feature_img">Feature Image</label>
                                                <input type="file" class="form-control" id="feature_img" name="feature_img">
                                                <label class="error text-danger">{{$errors->first('feature_img')}}</label>
                                            </div>

                                            
                                            
                                        </div>
                                       
                                    
                                        <div class="row">
                                    
                                            

                                            <div class="col-md-6 form-group">
                                                <label for="SEO_title">SEO Title</label>
                                                <input type="text" class="form-control" id="SEO_title" name="SEO_title">
                                                <label class="error text-danger">{{$errors->first('SEO_title')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="meta_desc">Meta Description</label>
                                                <input type="text" class="form-control" id="meta_desc" name="meta_desc">
                                                <label class="error text-danger">{{$errors->first('meta_desc')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="meta_keyword">Meta Keyword</label>
                                                <input type="text" class="form-control" id="meta_keyword" name="meta_keyword">
                                                <label class="error text-danger">{{$errors->first('meta_keyword')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="blog_faq">Blog FAQ</label>
                                                <input type="text" class="form-control" id="blog_faq" name="blog_faq">
                                                <label class="error text-danger">{{$errors->first('blog_faq')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="slug">Slug Name</label>
                                                <input type="text" class="form-control" id="slug" name="slug">
                                                <label class="error text-danger">{{$errors->first('slug')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="status">Status</label>
                                                <select id="mySelectstatus" class="form-group" name="status" data-placeholder="--Select Status--">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
                                                </select>
                                                {{-- <input type="text" class="form-control" id="status" name="status"> --}}
                                                {{-- <label class="error text-danger">{{$errors->first('SEO_title')}}</label> --}}
                                            </div>

                                            {{-- <div class="col-md-6 form-group">
                                                <label for="position">Meta Description</label>
                                                <input type="text" class="form-control" id="meta_desc" name="meta_desc">
                                            </div> --}}
                                            
                                        </div>
                                       
                                    </form>
                                    
                                </div>
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
          title: "Data Inserted Succsessfully !",
          icon: "success",
          timer: 2000,
        });
    </script>
    @endif
   <!-- Replace 'YOUR_API_KEY' with your actual TinyMCE API key -->
    <script src="https://cdn.tiny.cloud/1/6c2kiuya8xpnq4bb4shiulqx9oaeq9zqum6xbd3rgv2y907e/tinymce/7.3/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        // $('#add_blog').validate({
        //     rules: {
        //         desc: {
        //             required: true
        //         },
        //         qualification: {
        //             required: true
        //         },
        //         experience: {
        //             required: true
        //         },
        //         location: {
        //             required: true
        //         },
        //         time: {
        //             required: true
        //         },
        //         salary: {
        //             required: true
        //         },
        //         'requirement[]': {
        //             required: true
        //         },
        //         position: {
        //             required: true
        //         }
        //     },
        //     errorElement: 'span',
        //     errorPlacement: function (error, element) {
        //         error.addClass('invalid-feedback');
        //         element.closest('.form-group').append(error);
        //     }
        // });

        $(document).ready(function() {
            $('#mySelectuser').select2();
            $('#mySelectstatus').select2();
            $('#selectcat').select2({
                tags: true,
                placeholder: "Select Category",
                allowClear: true,
            });

            // Capture newly added values for categories
            $('#selectcat').on('select2:select', function (e) {
                var newValue = e.params.data.text; // Get the newly added value
                console.log("New category added: ", newValue);
                // Optionally, make an AJAX call to save the new category to the database here
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');

        titleInput.addEventListener('input', function() {
            const titleValue = titleInput.value;
            const slugValue = titleValue
                .toLowerCase()
                .replace(/\s+/g, '_')  // Replace spaces with underscores
                .replace(/[^\w\-]+/g, '')  // Remove non-word characters
                .replace(/\-\-+/g, '-')  // Replace multiple dashes with a single dash
                .replace(/^-+/, '')  // Remove leading dashes
                .replace(/-+$/, '');  // Remove trailing dashes

            slugInput.value = slugValue;
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
            const slugInput = document.getElementById('slug');

            slugInput.addEventListener('input', function() {
                const slugValue = slugInput.value
                    .replace(/\s+/g, '_');  // Replace spaces with underscores

                // Only update if the slug value is different from the input value
                if (slugInput.value !== slugValue) {
                    slugInput.value = slugValue;
                }
            });
        });



    // document.addEventListener('DOMContentLoaded', function() {
    //     tinymce.init({
    //         selector: '#desc'
    //     });
    // });

    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '#desc',
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    });

    </script>

@endsection
