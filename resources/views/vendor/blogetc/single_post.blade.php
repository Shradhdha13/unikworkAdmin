@extends("layouts.apps")
@section("content")
    {{-- Banner --}}
    <section class="banner-sec">
        <div class="container-fluid">
            <div class="container">
                <h1>Blog Details</h1>
            </div>
        </div>
    </section>

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 p-0 p-sm-3">
                    @include("blogetc::partials.show_errors")
                    @include("blogetc::partials.full_post_details")
                    
                    @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                        <div id="maincommentscontainer" class="mt-5 blog-comments">
                            {{-- <h3 class="text-center mb-4" id="blogetccomments">Comments</h3> --}}
                            @include("blogetc::partials.show_comments")
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('whatwedo')
@endsection