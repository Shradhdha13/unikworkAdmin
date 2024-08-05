<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <div class="row align-items-center text-center">
            <div class="col-12 p-0">
                <img src="<?php echo e(asset('images/logo-black.png')); ?>" alt="Logo" class="mb-4 logo" />
                <h3>
                    Thanks! Your comment has been saved!
                </h3>
        
                <?php if(!config('blogetc.comments.auto_approve_comments', false)): ?>
                    <p>
                        After an admin user approves the comment, it'll appear on the site!
                    </p>
                <?php endif; ?>
        
                <div>
                    <a href="<?php echo e($blog_post->url()); ?>" class="btn btn-primary">
                        Back to blog post
                    </a>
                </div>

                <img src="<?php echo e(asset('images/thankyou.gif')); ?>" alt="Thank You" class="gif-img" style="max-width: 600px" />
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app',['title'=>'Saved comment'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/vendor/blogetc/saved_comment.blade.php ENDPATH**/ ?>