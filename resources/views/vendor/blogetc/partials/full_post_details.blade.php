<div class="blog-details-head text-md-center mb-3">
    <h2 class="blog_title p-0">{{ $post->title }}</h2>
    <span class="blog_subtitle">{{ $post->subtitle }}</span>

    @php
        $categories = [];
    @endphp
    @foreach($post->categories as $data)
        @php
            $categories[] = $data['category_name']   
        @endphp
    @endforeach

    <h6 class="mt-2">
        <span>@includeWhen($post->author, 'blogetc::partials.author', ['post' => $post])&nbsp;</span> 
        {{ $post->created_at->format('M d, Y') }}

        @php 
            $postedAt = ($post->posted_at) ? $post->posted_at->diffForHumans() : '';
        @endphp
        <p class="m-0">&nbsp;{{$postedAt.', in'}} <span>{{ implode(', ' , $categories) }}</span></p>
    </h6>

</div>

{!! $post->imageTag('large', false, 'd-block') !!}

<p class="blog_body_content mt-4">
    {!! $post->renderBody() !!}

    {{-- @if (config('blogetc.use_custom_view_files') && $post->use_view_file) --}}
    {{-- // use a custom blade file for the output of those blog post --}}
    {{-- @include("blogetc::partials.use_view_file") --}}
    {{-- @else --}}
    {{-- {!! $post->post_body !!}        // unsafe, echoing the plain html/js --}}
    {{-- {{ $post->post_body }}          // for safe escaping --}}
    {{-- @endif --}}
</p>

<hr />



{{-- @includeWhen($post->categories, 'blogetc::partials.categories', ['post'=>$post]) --}}
