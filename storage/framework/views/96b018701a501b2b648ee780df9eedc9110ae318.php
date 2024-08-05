<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title ml-0 mb-4">Add Career</h4><br>
                                <form class="forms-sample" method="post" action="<?php echo e(route('add-requirements')); ?>" id="add_career">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label>Technology Name</label>
                                        <input type="text" class="form-control" id="tech_name" name="tech_name">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" id="experience" name="experience">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" id="location" name="location">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label>Time</label>
                                        <input type="text" class="form-control" id="time" name="time">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary">
                                        
                                    </div>


                                    <div class="form-group add_requirement">
                                        <div class="row align-items-center mb-2">
                                            <div class="col-6">
                                                <label class="mb-0">Requirement</label>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <div class="mr-2"><a class="delete btn">-</a></div>
                                                <div><a class="add btn add-more">+</a></div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="requirement" name="requirement[]">
                                    </div>
                                    

                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="number" class="form-control" id="position" name="position">
                                        
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

<?php $__env->startSection('js'); ?>

    <?php if(session('msg')): ?>
    <script>
        swal({
          title: "Data Inserted Succsessfully !",
          icon: "success",
          timer: 2000,
        });
    </script>
    <?php endif; ?>

    <script>
        $('#add_career').validate({
            rules: {
                tech_name: {
                    required: true
                },
                qualification: {
                    required: true
                },
                experience: {
                    required: true
                },
                location: {
                    required: true
                },
                time: {
                    required: true
                },
                salary: {
                    required: true
                },
                'requirement[]': {
                    required: true
                },
                position: {
                    required: true
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            }
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/requirements.blade.php ENDPATH**/ ?>