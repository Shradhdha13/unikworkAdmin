<div class="blog-details-head text-md-center mb-3">
    <h2 class="blog_title p-0"><?php echo e($post->title); ?></h2>
    <span class="blog_subtitle"><?php echo e($post->subtitle); ?></span>

    <?php
        $categories = [];
    ?>
    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $categories[] = $data['category_name']   
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h6 class="mt-2">
        <span><?php echo $__env->renderWhen($post->author, 'blogetc::partials.author', ['post' => $post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>&nbsp;</span> 
        <?php echo e($post->created_at->format('M d, Y')); ?>


        <?php 
            $postedAt = ($post->posted_at) ? $post->posted_at->diffForHumans() : '';
        ?>
        <p class="m-0">&nbsp;<?php echo e($postedAt.', in'); ?> <span><?php echo e(implode(', ' , $categories)); ?></span></p>
    </h6>

</div>

<?php echo $post->imageTag('large', false, 'd-block'); ?>


<p class="blog_body_content mt-4">
    <?php echo $post->renderBody(); ?>


    
    
    
    
    
    
    
</p>

<hr />




<?php /**PATH /var/www/html/resources/views/vendor/blogetc/partials/full_post_details.blade.php ENDPATH**/ ?>