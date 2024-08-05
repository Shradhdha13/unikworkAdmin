<?php
    /** @var \WebDevEtc\BlogEtc\Models\Comment[] $comments */
?>
<?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="card bg-light mb-4">
        <div class="card-header">
            <?php echo e($comment->author()); ?>

            <?php if(config('blogetc.comments.ask_for_author_website') && $comment->author_website): ?>
                (<a href="<?php echo e($comment->author_website); ?>" target="_blank" rel="noopener">website</a>)
            <?php endif; ?>
            <span class="float-right" title="<?php echo e($comment->created_at); ?>">
                <small><?php echo e($comment->created_at->diffForHumans()); ?></small>
            </span>
        </div>
        <div class="card-body bg-white">
            <p class="card-text">“ <?php echo nl2br(e($comment->comment)); ?> ”</p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    
<?php endif; ?>

<?php if(count($comments) >= config('blogetc.comments.max_num_of_comments_to_show', 500)): ?>
    <p class="alert alert-info">
            Only the first <?php echo e(config('blogetc.comments.max_num_of_comments_to_show', 500)); ?> comments are shown.
    </p>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/vendor/blogetc/partials/built_in_comments.blade.php ENDPATH**/ ?>