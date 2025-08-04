
<?php $__env->startSection('pagename', $pagename); ?>
<style>
  /* Custom styles for the toast */
  #toast {
    background-color: #ffffff !important;
   
  text-align: center;
  border-radius: 2px;
  position: fixed;
  z-index: 1;
  left: 100% !important;
  bottom: 30px;
  font-size: 16px;
  padding: 16px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5) !important;
  opacity: 1 !important;
  }
  .toast-success {
      background-color: rgb(255, 255, 255) !important; /* White background */
      color: rgb(6, 107, 6) !important;     
  }

  /* Custom icon color */
  .toast-success .toast-icon {
      color: rgb(5, 97, 5) !important;  /* Icon color green */
  }

  /* Custom progress bar color */
  .toast-success .toast-progress {
      background-color: rgb(4, 71, 4) !important; /* Green progress bar */
      filter: none !important;
  }

  /* Optional: Style for close button (green color) */
  .toast-close-button {
      color: rgb(3, 63, 3) !important; /* Green color for close button */
  }
  #toast-container>.toast-success.toast-image-icon {
    background-image: url('http://localhost/unikworkAdmin/public/images/check.png') !important; 
}
    .toast-success:hover{
      box-shadow: none !important;
    }
</style>
<?php $__env->startSection('content'); ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- resources/views/home.blade.php (or your target view) -->
          <?php if(session('toast')): ?>
          <script>
              window.onload = function() {
                  // Display the toast message with an icon
                  toastr.options = {
                      "closeButton": true,       // Optional: To show a close button
                      "progressBar": true,       // Optional: To show a progress bar
                      "positionClass": "toast-top-right", // Optional: Position of the toast
                      "iconClass": "toast-image-icon" // Optional: Specific class for success toast (predefined icon)
                  };
                  toastr.success("<?php echo e(session('toast')); ?>");
              };
          </script>
          <?php endif; ?>

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
  <!-- In the <head> section of your layout -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

<!-- Before closing </body> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>
    var contactCount = <?php echo $counts['contactDataCount']?>;
    var careerCount = <?php echo $counts['careerDataCount']?>;
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unikworkAdmin\resources\views/admin/index.blade.php ENDPATH**/ ?>