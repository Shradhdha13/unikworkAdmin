@extends('admin.layouts.layout')

@section('pagename',$pagename)

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
                                        <h4 class="card-title ml-0 mb-4">Edit Blog</h4>
                                    </div><br>
                                    <form class="forms-sample" method="post" action="{{route('edit-blog-data')}}" id="add_blog" enctype="multipart/form-data">
                                        
                                        @csrf
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                            <button class="btn btn-light" id="cancle-btn" type="button">Cancel</button>
                                        </div>
                                        <input type="hidden" name="id" value="{{$updateBlog->id}}">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="title">Title Name</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ $updateBlog->title }}">
                                                <label class="error text-danger">{{$errors->first('title')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="category">Category</label>
                                                {{-- <input type="text" class="form-control" id="category" name="category" value="{{ $updateBlog->category->name }}"> --}}
                                                <select id="selectcat" class="form-group filter-main form-control" name="category">
                                                    <option value="">Please select a category</option>
                                                    @forelse ($categoryList as $cat)
                                                        <option value="{{ $cat->id }}" {{ $updateBlog->category_id == $cat->id ? 'selected' : '' }}>
                                                            {{ $cat->name }}
                                                        </option>
                                                    @empty
                                                        <option value="">No categories available</option>
                                                    @endforelse
                                                </select>
                                                
                                                <label class="error text-danger">{{$errors->first('category')}}</label>
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="desc">Description</label>
                                                <textarea class="form-control" id="desc" name="desc">{{ old('desc', $updateBlog->desc) }}</textarea>
                                                <label class="error text-danger">{{$errors->first('desc')}}</label>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="auth_id">Select Author</label>
                                                <select id="mySelectusr" class="form-group" name="auth_id" data-placeholder="Select User">
                                                    @forelse ($auth_id as $item)
                                                        <option value="{{ $item->id }}" {{ $updateBlog->auth_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->firstname }}
                                                        </option>
                                                    @empty
                                                        <option value="">No Users available</option>
                                                    @endforelse
                                                </select>
                                                <label class="error text-danger">{{$errors->first('auth_id')}}</label>
                                            </div>

                                            <div class="col-md-3 form-group">
                                                <label for="feature_img">Feature Image</label>
                                                <input type="file" class="form-control" id="feature_img" name="feature_img">{{ $updateBlog->feature_img }}
                                                <label class="error text-danger">{{$errors->first('feature_img')}}</label>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <img src="http://localhost/unikworkAdmin/storage/app/public/blogs/{{ $updateBlog->feature_img }}" alt="Feature Image" width="50%">
                                            </div>
                                            
                                        </div>
                                       
                                    
                                        <div class="row">

                                            <div class="col-md-6 form-group">
                                                <label for="SEO_title">SEO Title</label>
                                                <input type="text" class="form-control" id="SEO_title" name="SEO_title" value="{{ $updateBlog->SEO_title }}">
                                                <label class="error text-danger">{{$errors->first('SEO_title')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="meta_desc">Meta Description</label>
                                                <input type="text" class="form-control" id="meta_desc" name="meta_desc"  value="{{ $updateBlog->meta_desc }}">
                                                <label class="error text-danger">{{$errors->first('meta_desc')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="meta_keyword">Meta Keyword</label>
                                                <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{ $updateBlog->meta_keyword }}">
                                                <label class="error text-danger">{{$errors->first('meta_keyword')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="blog_faq">Blog FAQ</label>
                                                <input type="text" class="form-control" id="blog_faq" name="blog_faq" value="{{ $updateBlog->blog_faq }}">
                                                <label class="error text-danger">{{$errors->first('blog_faq')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="slug">Slug Name</label>
                                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $updateBlog->slug }}">
                                                <label class="error text-danger">{{$errors->first('slug')}}</label>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="status">Status</label>
                                                <select id="mySelctstatus" class="form-group" name="status" data-placeholder="--Select Status--">
                                                    <option value="1" {{ $updateBlog->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ $updateBlog->status == 0 ? 'selected' : '' }}>Deactive</option>
                                                </select>
                                                {{-- <input type="text" class="form-control" id="status" name="status"> --}}
                                                {{-- <label class="error text-danger">{{$errors->first('SEO_title')}}</label> --}}
                                            </div>
                                            
                                            
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
      $(document).ready(function() {
            $('#mySelectusr').select2();
            $('#mySelctstatus').select2();
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

        // tinymce.init({
        //     selector: '#desc', // Selects the textarea by ID
        //     plugins: 'advlist autolink lists link image charmap preview anchor textcolor',
        //     toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        //     menubar: true
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
