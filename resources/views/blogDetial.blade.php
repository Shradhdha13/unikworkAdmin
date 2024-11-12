{{-- @extends('layouts.apps') --}}
@extends("layouts.apps",['data' => $data])
@extends("layouts.header")
 <?php $value = metaBlog($blogDetail->id); ?>

 <meta content={{$value['SEO_title']}}>
@section("content")
    {{-- Banner --}}
    <section class="banner-sec">
        <div class="container-fluid">
            <div class="container">
                <h1>Why ReactJS Stands Out: Exploring Its Key Features and Benefits</h1>
            </div>
        </div>
    </section>

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 p-0 p-sm-3">
                    {{-- @include("blogetc::partials.show_errors")
                    @include("blogetc::partials.full_post_details")
                    
                    @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                        <div id="maincommentscontainer" class="mt-5 blog-comments">
                            <h3 class="text-center mb-4" id="blogetccomments">Comments</h3> 
                            @include("blogetc::partials.show_comments")
                        </div>
                    @endif --}}
                    {{-- @forelse ($blogDetail as $item) --}}
                        <h2 class="text-center">{{$blogDetail->title}}</h2>
                        <h4 class="text-center">{{$blogDetail->slug}}</h4>
                        <p class="text-center">By {{ \Carbon\Carbon::parse($blogDetail->created_at)->format('M j, Y') }} ({{ \Carbon\Carbon::parse($blogDetail->created_at)->diffForHumans() }}) , in {{$blogDetail->category}}</p>
                        <p class="text-center"><b>Author Name:</b> {{ $blogDetail->users->firstname }}</p>
                        {!! $blogDetail->desc !!}
{{-- 
                    @empty
                        
                    @endforelse --}}
                </div>
            </div>

<hr>
<div id="maincommentscontainer" class="mt-5 blog-comments">
            
<div class="add_comment_area">
<h4 class="text-center mt-3 mb-4">Your Comment</h4>
<form method="post" action="{{route('addcomments')}}">
    @csrf
{{-- <input type="hidden" name="_token" value="crXtZepvMLMgyRLTMPGl9vDxWJCjzubPQJX1d5f4"> --}}
<input type="hidden" name="blog_id" value="{{ $blogDetail->id }}">
<div class="container-fluid">
<div class="row">
                        <div class="col">
            <div class="form-group">
                <label id="author_name_label" for="author_name">Your Name </label>
                <input type="text" class="form-control" name="author_name" id="author_name" placeholder="Your name" required="" value="">
            </div>
        </div>

                                <div class="col">
                <div class="form-group">
                    <label id="author_email_label" for="author_email">Your Email
                    </label>
                    <input type="email" class="form-control" name="author_email" id="author_email" placeholder="Your Email" required="" value="">
                </div>
            </div>
    
</div>
</div>

<div class="form-group">

<label id="comment_label" for="comment">Your Comment</label>
<textarea class="form-control" name="comment" required="" id="comment" placeholder="Write your comment here" rows="7"></textarea>

</div>


<div class="form-group text-center mt-4">
<input type="submit" class="form-control input-sm btn button-primary w-auto h-auto" value="Add Comment">
</div>
</form>
</div>
                </div>
        </div>
    </section>
    @include('whatwedo')
@endsection

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Sep 11, 2024:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
      ],
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
  </script>