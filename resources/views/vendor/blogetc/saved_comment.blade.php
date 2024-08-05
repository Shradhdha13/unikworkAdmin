@extends('layouts.app',['title'=>'Saved comment'])
@section('content')
    <div class="text-center">
        <div class="row align-items-center text-center">
            <div class="col-12 p-0">
                <img src="{{ asset('images/logo-black.png') }}" alt="Logo" class="mb-4 logo" />
                <h3>
                    Thanks! Your comment has been saved!
                </h3>
        
                @if(!config('blogetc.comments.auto_approve_comments', false))
                    <p>
                        After an admin user approves the comment, it'll appear on the site!
                    </p>
                @endif
        
                <div>
                    <a href="{{ $blog_post->url() }}" class="btn btn-primary">
                        Back to blog post
                    </a>
                </div>

                <img src="{{ asset('images/thankyou.gif') }}" alt="Thank You" class="gif-img" style="max-width: 600px" />
            </div>
        </div>
    </div>
@endsection

