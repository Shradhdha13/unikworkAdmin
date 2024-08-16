

<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card text-white bg-flat-color-1 full-card">
                <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  
                  <h4 class="txt-dark">Welcome Admin</h4>
                  
                    <div class="align-items-center dashboard">
                      <div class="row counter">
                        
                          
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-tale d-flex flex-row align-items-center">
                              <div class="d-flex flex-column col-span-2">
                                <p class="mb-4">Total Contact Data</p>
                                <p class="fs-38 mb-2"><?php echo e($contactCount); ?></p>
                              </div>
                              <div class="d-flex align-items-center col-span-1 ico-radious">
                                <img src="<?php echo e(asset('images/counter_ico.svg')); ?>" width="20px" alt="Icon">
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-tale card-dark-blue d-flex flex-row align-items-center">
                              <div class="d-flex flex-column col-span-2">
                                <p class="mb-4">Total Careers Data</p>
                                <p class="fs-38 mb-2"><?php echo e($careerCount); ?></p>
                              </div>
                              <div class="d-flex align-items-center col-span-1 ico-radious">
                                <img src="<?php echo e(asset('images/counter_ico.svg')); ?>" width="20px" alt="Icon">
                              </div>
                            </div>
                          </div>
                        
                        
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-tale d-flex flex-row align-items-center">
                              <div class="d-flex flex-column col-span-2">
                                <p class="mb-4">Monthly Contact Data</p>
                                <div class="d-flex">
                                  <p class="fs-38 mr-4"><?php echo e($contactMonthlyCount); ?></p>
                                  
                                  
                                </div>
                              </div>
                              <div class="d-flex align-items-center col-span-1 ico-radious">
                                <img src="<?php echo e(asset('images/counter_ico.svg')); ?>" width="20px" alt="Icon">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-light-danger card-tale d-flex flex-row align-items-center">
                              <div class="d-flex flex-column col-span-2">
                                <p class="mb-4">Monthly Careers Data</p>
                                <div class="d-flex">
                                  <p class="fs-38 mr-4"><?php echo e($careerMonthlyCount); ?></p>
                                  
                                  
                                </div>
                              </div>
                              <div class="d-flex align-items-center col-span-1 ico-radious">
                                <img src="<?php echo e(asset('images/counter_ico.svg')); ?>" width="20px" alt="Icon">
                              </div>
                            </div>
                          </div>
                        
                      </div>
                      
                      
                      
                      
                    </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>      

        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
  <script src="<?php echo e(asset('admin-assets/js/main.js')); ?>"></script>
  <script>
    var contactCount = <?php echo $counts['contactDataCount']?>;
    var careerCount = <?php echo $counts['careerDataCount']?>;
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unikworkAdmin\resources\views/admin/index.blade.php ENDPATH**/ ?>