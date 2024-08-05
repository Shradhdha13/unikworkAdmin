<?php if(isset($errors) && count($errors)): ?>
    <div class="alert alert-danger" style="max-width:500px;margin-left:auto;margin-right:auto;">
        <strong>Sorry, but there was an error:</strong>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/vendor/blogetc/partials/show_errors.blade.php ENDPATH**/ ?>