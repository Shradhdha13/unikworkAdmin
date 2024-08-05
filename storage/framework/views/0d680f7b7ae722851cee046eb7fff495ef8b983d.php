<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title ml-0 mb-4">Add Career</h4><br>
                                <form class="forms-sample" method="post" action="<?php echo e(route('edit-career-data')); ?>" id="edit_career">
                                    <?php echo csrf_field(); ?>

                                    <input type="hidden" name="edit_career_id" value="<?php echo e($careerRec->id); ?>">
                
                                    <div class="form-group">
                                        <label>Technology Name</label>
                                        <input type="text" class="form-control" id="tech_name" name="tech_name" value="<?php echo e($careerRec->technology); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo e($careerRec->qualification); ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" id="experience" name="experience" value="<?php echo e($careerRec->experience); ?>">
                                    </div>
                
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" id="location" name="location" value="<?php echo e($careerRec->location); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Time</label>
                                        <input type="text" class="form-control" id="time" name="time" value="<?php echo e($careerRec->time); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary" value="<?php echo e($careerRec->salary); ?>">
                                    </div>
                                    
                                    
                                    <div class="form-group add_requirement">
                                        <div class="row align-items-center mb-2">
                                            <div class="col-6">
                                                <label class="mb-0">Requirement</label>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <div class="mr-2"><a class="delete btn">-</a></div>
                                                <div><a class="add" class="btn add-more">+</a></div> 
                                            </div>
                                        </div>

                                        <?php
                                            $key = 0;
                                        ?>
                                        <?php $__currentLoopData = json_decode($careerRec->requirement); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $key++;
                                            $class = ($key == 1) ? 'form-control' : 'form-control_add';
                                        ?>
                                            <input type="text" class="<?php echo e($class); ?>" id="requirement" name="requirement[]" value="<?php echo e($value); ?>">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="number" class="form-control" id="position" name="position" value="<?php echo e($careerRec->position); ?>">
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light" id="cancle-btn" type="button">Cancel</button>
                
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/edit-career.blade.php ENDPATH**/ ?>