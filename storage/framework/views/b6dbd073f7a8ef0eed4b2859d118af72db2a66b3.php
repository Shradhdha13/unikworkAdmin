<?php $__env->startSection("content"); ?>
    
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
                    <?php echo $__env->make("blogetc::partials.show_errors", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make("blogetc::partials.full_post_details", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    <?php if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled'): ?>
                        <div id="maincommentscontainer" class="mt-5 blog-comments">
                            
                            <?php echo $__env->make("blogetc::partials.show_comments", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('whatwedo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.apps", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/vendor/blogetc/single_post.blade.php ENDPATH**/ ?>