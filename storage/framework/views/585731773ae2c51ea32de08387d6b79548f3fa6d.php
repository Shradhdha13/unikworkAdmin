<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title ml-0 mb-4">Career Form Data</h4><br>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>Id</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Expected Monthly Salary</th>
                                            <th>Experience</th>
                                            <th>Requirement</th>
                                            <th>Location</th>
                                            
                                            <th>CV</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $careerView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $careerData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                
                                                <td><?php echo e(((($careerView->currentPage() - 1 ) * $careerView->perPage() ) + $loop->iteration) . '.'); ?></td>
                                                <td><?php echo e($careerData->created_at->format('d-m-y g:i A')); ?></td>
                                                <td><?php echo e($careerData->firstname); ?> <?php echo e($careerData->lastname); ?></td>
                                                <td><?php echo e($careerData->email); ?></td>
                                                <td><?php echo e($careerData->phone); ?></td>
                                                <td><?php echo e($careerData->expected_salary); ?></td>
                                                <td><?php echo e($careerData->experience); ?></td>
                                                <td><?php echo e(isset($careerData->requirementDetail['technology']) ? $careerData->requirementDetail['technology'] : ''); ?></td>
                                                <td><?php echo e(($careerData->location) ? $careerData->location : '-'); ?></td>
                                                
                                                <td>
                                                    <?php if($careerData->cv != null): ?>
                                                        <a href="<?php echo e(URL::to('public/career_images/cv').'/'.$careerData->cv); ?>" target="_blank"><span class="mdi mdi-download"></span></a>
                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td><a href="<?php echo e(URL::to("admin/career-delete/$careerData->id")); ?>" class="career-delete"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div>
                                    <?php echo $careerView->links(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/career-view.blade.php ENDPATH**/ ?>