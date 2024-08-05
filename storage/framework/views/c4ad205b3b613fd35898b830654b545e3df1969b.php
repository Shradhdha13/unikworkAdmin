<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title ml-0 mb-4">Contact Form Data</h4><br>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>I am a</th>
                                                <th>I need help with</th>
                                                <th>Tell us about your project</th>
                                                <th>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $contactView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(((($contactView->currentPage() - 1 ) * $contactView->perPage() ) + $loop->iteration) . '.'); ?></td>
                                                    <td><?php echo e($contactData->created_at->format('d-m-y')); ?></td>
                                                    <td><?php echo e($contactData->firstname); ?> <?php echo e($contactData->lastname); ?></td>
                                                    <td><?php echo e($contactData->email); ?></td>
                                                    <td><?php echo e($contactData->phone); ?></td>
                                                    <td><?php echo e($contactData->iam); ?></td>
                                                    <td><?php echo e($contactData->help); ?></td>
                                                    <td><?php echo e($contactData->message); ?></td>
                                                    <td><a href="<?php echo e(URL::to("admin/contact-delete/$contactData->id")); ?>" class="contact-delete"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <div>
                                        <?php echo $contactView->links(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/contact-view.blade.php ENDPATH**/ ?>