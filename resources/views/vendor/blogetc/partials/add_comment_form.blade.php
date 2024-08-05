@php
    use WebDevEtc\BlogEtc\Captcha\CaptchaAbstract;
    use WebDevEtc\BlogEtc\Models\Post;
    /** @var Post $post */
    /** @var CaptchaAbstract $captcha */
@endphp
@can(\WebDevEtc\BlogEtc\Gates\GateTypes::ADD_COMMENT)
<div class="add_comment_area">
    <h4 class="text-center mt-3 mb-4">Your Comment</h4>
    <form method="post" action="{{ route('blogetc.comments.add_new_comment', $post->slug) }}">
        @csrf

        <div class="container-fluid">
            <div class="row">
                @if(config("blogetc.comments.save_user_id_if_logged_in", true) === false || !Auth::check())
                    <div class="col">
                        <div class="form-group">
                            <label id="author_name_label" for="author_name">Your Name </label>
                            <input
                                    type="text"
                                    class="form-control"
                                    name="author_name"
                                    id="author_name"
                                    placeholder="Your name"
                                    required
                                    value="{{old("author_name")}}">
                        </div>
                    </div>

                    @if(config("blogetc.comments.ask_for_author_email"))
                        <div class="col">
                            <div class="form-group">
                                <label id="author_email_label" for="author_email">Your Email
                                </label>
                                <input
                                        type="email"
                                        class="form-control"
                                        name="author_email"
                                        id="author_email"
                                        placeholder="Your Email"
                                        required
                                        value="{{old("author_email")}}">
                            </div>
                        </div>
                    @endif
                @endif

                {{-- @if(config("blogetc.comments.ask_for_author_website"))
                    <div class="col">
                        <div class="form-group">
                            <label id="author_website_label" for="author_website">Your Website
                                <small>(Will be displayed)</small>
                            </label>
                            <input
                                    type="url"
                                    class="form-control"
                                    name="author_website"
                                    id="author_website"
                                    placeholder="Your Website URL"
                                    value="{{old("author_website")}}">
                        </div>
                    </div>

                @endif --}}
            </div>
        </div>

        <div class="form-group">

            <label id="comment_label" for="comment">Your Comment</label>
            <textarea
                    class="form-control"
                    name="comment"
                    required
                    id="comment"
                    placeholder="Write your comment here"
                    rows="7">{{ old('comment') }}</textarea>

        </div>

        @if($captcha)
            @include($captcha->view())
        @endif

        <div class="form-group text-center mt-4">
            <input type="submit" class="form-control input-sm btn button-primary w-auto h-auto" value="Add Comment">
        </div>
    </form>
</div>
@endcan
