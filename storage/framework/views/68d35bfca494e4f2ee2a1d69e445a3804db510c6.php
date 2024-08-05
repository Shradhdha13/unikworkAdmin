<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
              <div class="row">
                <div class="col-12">
                  
                  
                    <div class="row align-items-center dashboard">
                      <div class="row col-md-12 col-sm-6 counter">
                        
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                              <div class="card-body">
                                <p class="mb-4">Total Contact Data</p>
                                <p class="fs-38 mb-2"><?php echo e($contactCount); ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                              <div class="card-body">
                                <p class="mb-4">Total Careers Data</p>
                                <p class="fs-38 mb-2"><?php echo e($careerCount); ?></p>
                              </div>
                            </div>
                          </div>
                        
                        
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-light-blue">
                              <div class="card-body">
                                <p class="mb-4">Monthly Contact Data</p>
                                <div class="d-flex">
                                  <p class="fs-38 mr-4"><?php echo e($contactMonthlyCount); ?></p>
                                  <p><?php echo e($contactPr); ?>% (30 days)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 mb-4 stretch-card transparent">
                            <div class="card card-light-danger">
                              <div class="card-body">
                                <p class="mb-4">Monthly Careers Data</p>
                                <div class="d-flex">
                                  <p class="fs-38 mr-4"><?php echo e($careerMonthlyCount); ?></p>
                                  <p><?php echo e($careerPr); ?>% (30 days)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                      
                      
                      <div class="col col-md-6 chart">
                        <div class="card">
                          <div class="card-body">
                           <div class="d-flex justify-content-between">
                            <p class="card-title">Contact & Careers Data</p>
                           </div>
                            
                            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                            <canvas id="sales-chart"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6 blog">
                        <div class="card">
                          <div class="card-body">
                            <p class="card-title">Blogs</p>
                            <ul class="icon-data-list">
                              <?php $__currentLoopData = $blogData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                  <div class="d-flex">
                                    <img src="<?php echo e(URL::to('public/blog_images').'/'.$Blog->image_medium); ?>" alt="images" />
                                    <div>
                                      <p class="text-info mb-1"><?php echo e($Blog->title); ?></p>
                                      <p class="blog-content"><?php echo e($Blog->subtitle); ?></p>
                                      <small><?php echo e($Blog->created_at->format('d M, Y')); ?></small>
                                    </div>
                                  </div>
                                </li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
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