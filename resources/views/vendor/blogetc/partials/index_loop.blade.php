@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

<div class="row blogs m-0 align-items-center align-items-md-start">
    <div class="col-sm-2 col-md-4 blog-image p-0">
        {!! $post->imageTag('medium', true, '') !!}
    </div>
    <div class="col-sm-10 col-md-8 blog-content">
        <span>{{$post->subtitle}}</span>
        <a href="{{$post->url()}}"><h4>{{$post->title}}</h4></a>
        <h6>{{$post->created_at->format('M d, Y')}}</h6>

        @if(config('blogetc.show_full_post_on_index'))
            {!! $post->renderBody() !!}
        @else
            <p>{!! $post->generateIntroduction(400) !!}</p>
        @endif

        <div class="view-more">
            <a href="{{ $post->url() }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
