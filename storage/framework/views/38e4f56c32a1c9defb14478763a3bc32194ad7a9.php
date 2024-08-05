<?php $__env->startSection("content"); ?>
    
    <section class="banner-sec">
        <div class="container-fluid">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>
    </section>

    <section class="top-blog">
        <div class="container mt-3">
            
            <div class="blogs wow fadeInUp mt-5">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="top-blog-first">
                        <div class="blog-image">
                            <?php echo $post->imageTag('medium', true, ''); ?>

                        </div>
                        <div class="blog-content-main">
                            <?php
                                $categories = [];
                            ?>
                            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $categories[] = $data['category_name']   
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <p class="d-inline-block mt-3"><?php echo e(implode(', ' , $categories)); ?> </p>
                            <a href="<?php echo e($post->url()); ?>"><h4 class="mb-3"><?php echo e($post->title); ?></h4></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            </div>
                <div class="no-posts">No posts</div>
            <?php endif; ?>
        </div>
    </section>

    <?php echo $__env->make('whatwedo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.apps",['data' => $data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/vendor/blogetc/index.blade.php ENDPATH**/ ?>