<?php switch(config("blogetc.comments.type_of_comments_to_show","built_in")):

    case ("built_in"): ?>
    <?php echo $__env->make("blogetc::partials.built_in_comments", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make("blogetc::partials.add_comment_form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php break; ?>

    <?php case ("disqus"): ?>
    <?php echo $__env->make("blogetc::partials.disqus_comments", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php break; ?>


    <?php case ("custom"): ?>
    <?php echo $__env->make("blogetc::partials.custom_comments", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php break; ?>

    <?php case ("disabled"): ?>
    <?php
    return;  // not required, as we already filter for this
    ?>
    <?php break; ?>

    <?php default: ?>
    <div class="alert alert-danger">
        Invalid comment <code>type_of_comments_to_show</code> config option
    </div>
<?php endswitch; ?>
<?php /**PATH /var/www/html/resources/views/vendor/blogetc/partials/show_comments.blade.php ENDPATH**/ ?>