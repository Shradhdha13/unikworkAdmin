<?php $__env->startSection('content'); ?>

    <main id="error">
        <section class="error-img section-space">
            <div class="container-fluid">
                <div class="container text-center">
                    <img src="<?php echo e(asset('images/500.gif')); ?>" alt="Error" class="gif-img mt-5 mb-5" />
                </div>
            </div>
        </section>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/errors/500.blade.php ENDPATH**/ ?>