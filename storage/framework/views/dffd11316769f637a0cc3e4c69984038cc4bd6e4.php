<?php
    use WebDevEtc\BlogEtc\Captcha\CaptchaAbstract;
    use WebDevEtc\BlogEtc\Models\Post;
    /** @var Post $post */
    /** @var CaptchaAbstract $captcha */
?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(\WebDevEtc\BlogEtc\Gates\GateTypes::ADD_COMMENT)): ?>
<div class="add_comment_area">
    <h4 class="text-center mt-3 mb-4">Your Comment</h4>
    <form method="post" action="<?php echo e(route('blogetc.comments.add_new_comment', $post->slug)); ?>">
        <?php echo csrf_field(); ?>

        <div class="container-fluid">
            <div class="row">
                <?php if(config("blogetc.comments.save_user_id_if_logged_in", true) === false || !Auth::check()): ?>
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
                                    value="<?php echo e(old("author_name")); ?>">
                        </div>
                    </div>

                    <?php if(config("blogetc.comments.ask_for_author_email")): ?>
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
                                        value="<?php echo e(old("author_email")); ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                
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
                    rows="7"><?php echo e(old('comment')); ?></textarea>

        </div>

        <?php if($captcha): ?>
            <?php echo $__env->make($captcha->view(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <div class="form-group text-center mt-4">
            <input type="submit" class="form-control input-sm btn button-primary w-auto h-auto" value="Add Comment">
        </div>
    </form>
</div>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/vendor/blogetc/partials/add_comment_form.blade.php ENDPATH**/ ?>