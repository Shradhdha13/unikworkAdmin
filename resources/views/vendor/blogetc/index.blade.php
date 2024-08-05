@extends("layouts.apps",['data' => $data])
@section("content")
    {{-- Banner --}}
    <section class="banner-sec">
        <div class="container-fluid">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>
    </section>

    <section class="top-blog">
        <div class="container mt-3">
            {{-- <h2 class="section-title wow fadeInUp">Featured Posts</h2> --}}
            <div class="blogs wow fadeInUp mt-5">
                @forelse($posts as $index=>$post)
                    <div class="top-blog-first">
                        <div class="blog-image">
                            {!! $post->imageTag('medium', true, '') !!}
                        </div>
                        <div class="blog-content-main">
                            @php
                                $categories = [];
                            @endphp
                            @foreach($post->categories as $data)
                                @php
                                    $categories[] = $data['category_name']   
                                @endphp
                            @endforeach
                            <p class="d-inline-block mt-3">{{ implode(', ' , $categories) }} </p>
                            <a href="{{$post->url()}}"><h4 class="mb-3">{{$post->title}}</h4></a>
                        </div>
                    </div>
                @empty
            </div>
                <div class="no-posts">No posts</div>
            @endforelse
        </div>
    </section>

    @include('whatwedo')
@endsection