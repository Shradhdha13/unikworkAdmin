<div class="row search-row">
    @foreach ($searchData as $data)
    <div class="col-12 col-sm-6 col-lg-4 p-0">
        <div class="row blogs m-0 mb-3 p-3">
            <div class="col-md-3 blog-search-image p-0 text-md-center">
                <a href="blog/{{ $data->slug }}" target="_blank"><img src="public/blog_images/{{ $data->image_medium }}" alt="images" /></a>
            </div>
            <div class="col-md-9 blog-search-content">
                <a href="blog/{{ $data->slug }}" target="_blank">
                    <h4>{{$data->title}}</h4>
                    <p>{!! $data->post_body !!}</p>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>