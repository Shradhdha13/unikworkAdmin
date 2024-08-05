<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title ml-0 mb-4">View Career</h4><br>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered career-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Technology Name</th>
                                            <th>Qualification</th>
                                            <th>Experience</th>
                                            <th>Location</th>
                                            <th>Time</th>
                                            <th>Salary</th>
                                            <th>Requirement</th>
                                            <th>Position</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $careerView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $careerData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($careerData->technology); ?></td>
                                                <td><?php echo e($careerData->qualification); ?></td>
                                                <td><?php echo e($careerData->experience); ?></td>
                                                <td><?php echo e($careerData->location); ?></td>
                                                <td><?php echo e($careerData->time); ?></td>
                                                <td><?php echo e($careerData->salary); ?></td>
                                                <td>
                                                    <?php $__currentLoopData = json_decode($careerData->requirement); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <p><?php echo e($value); ?></p>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td><?php echo e($careerData->position); ?></td>
                                                <td class="text-center">
                                                    <div class="mb-2"><a href="<?php echo e(URL::to("admin/delete-career/$careerData->id")); ?>" class="delete-career"><i class="mdi mdi-delete d-block" class="text-center"></i></a></div>
                                                    <div class="mb-2"><a href="<?php echo e(URL::to("admin/edit-career/$careerData->id")); ?>" class="edit-career"><i class="mdi mdi-border-color d-block"></i></a></div>
                                                
                                                    <div class="switcher">
                                                        <label for="<?php echo e('status-'.$careerData->id); ?>">
                                                            <input type="checkbox" data-id="<?php echo e($careerData->id); ?>" id="<?php echo e('status-'.$careerData->id); ?>" value="<?php echo e($careerData->status); ?>" class="switch-action" <?php echo e($careerData->status == 1 ? 'checked' : ''); ?>/><span><small></small></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <?php if(session('msg')): ?>
    <script>
        swal({
        title: "Data Updated Succsessfully !",
        icon: "success",
        timer: 2000,
        });
    </script>
    <?php endif; ?>
    
    <script>
        $(document).on('click', '.switch-action', function(){
            var isChecked = $(this).prop('checked') == true ? 1 : 0;
            $(this).val(isChecked);

            var id = $(this).data('id');

            $.ajax({
                type: 'GET',
                url: '<?php echo e(route("update-status")); ?>',
                dataType: 'json',
                data: {'status' : isChecked, 'id' : id},
                success: function($data){
                    
                }
            });            
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/view-careers.blade.php ENDPATH**/ ?>