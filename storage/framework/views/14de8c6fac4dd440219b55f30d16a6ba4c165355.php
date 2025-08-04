
<style>
    .input-group-append .input-group-text, .input-group-prepend .input-group-text{
        font-family: var(--font-family-Poppins);
        padding: .375rem .75rem !important;
        border-radius: .5rem;
        border: 2px solid rgb(239 239 239) !important;
    }
    .form-control:focus{
        font-family: var(--font-family-Poppins);
        background-color: #fff !important;
        border-color: 1px solid rgb(239 239 239) !important;
    }
    .form-control{
        border-left: none !important;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
        font-family: var(--font-family-Poppins);

    }
    .input-group .form-control {
        border: 2px solid rgb(239 239 239) !important; Remove border from input
        box-shadow: none; /* Remove shadow if any */
        border-left:none !important;
        font-family: var(--font-family-Poppins);
    }

    .input-group img {
        border: none; /* Remove border from icon */
        background: none; /* Ensure background is transparent */
    }


    .input-group .input-group-text {
    background: none;
    border: none;
    padding: 0;
    font-family: var(--font-family-Poppins);
    }

    .input-group .form-control {
        border-left: none; /* Remove left border for input */
    }

    .input-group .form-control:focus {
        box-shadow: none; /* Remove focus shadow */
        outline: none; /* Remove focus outline */
    }
.btn-primary{
    font-size: 18px !important;
    font-weight: 600 !important;
}

.invalid-feedback {
    display: block;
    color: #dc3545;  /* Red color for error messages */
    font-size: 0.875em;
}

</style>
<?php $__env->startSection('content'); ?>
<div class="grid-container">
    <div class="grid-item">
        <div class="bg-login d-flex justify-content-center align-items-center" style="height: 100vh;">
            <img src="../images/login_sideLogo.png" alt="Login Logo">
        </div>
    </div>
    <div class="grid-item">
        <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
            <div class="justify-content-center" style="width: 550px">
                <div class="pb-5 col-sm-12"><img src="../images/unikwork-logo3x.png" height="35px" class="login-logo"></div>
                <div class="text-left pb-4">
                    <h1 class="login-h1">Sign in</h1>
                    <span >Please enter your login Details below</span>
                </div>
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group mb-4 text-left">
                        <label for="email"><?php echo e(__('Email Address')); ?></label>
                    
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background: none; border-right:none;">
                                    <img src="<?php echo e(asset('images/envlop.svg')); ?>" alt="Email Icon" style="width: 20px; height: 20px;">
                                </span>
                            </div>
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                        </div>
                    
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    
                    <div class="form-group mb-4 text-left">
                        <label for="password"><?php echo e(__('Password')); ?></label>
                        
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background: none; border-right:none;">
                                    <img src="<?php echo e(asset('images/lock.svg')); ?>" alt="Password Icon" style="width: 20px; height: 20px;">
                                </span>
                            </div>
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                            <div class="input-group-prepend" onclick="togglePassword()">
                                <span class="input-group-text" style="background: none; border-left:none; cursor: pointer">
                                    <img id="toggle-icon" src="<?php echo e(asset('images/eyeclose.svg')); ?>" alt="Password Icon" style="width: 20px; height: 20px;">
                                </span>
                            </div>
                        </div>
                    
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width: 100%">
                                <?php echo e(__('Continue')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<script>
    function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggle-icon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.src = '<?php echo e(asset("images/eyeopen.svg")); ?>'; // Change to open eye icon
    } else {
        passwordInput.type = 'password';
        toggleIcon.src = '<?php echo e(asset("images/eyeclose.svg")); ?>'; // Change back to closed eye icon
    }
}
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unikworkAdmin\resources\views/auth/login.blade.php ENDPATH**/ ?>