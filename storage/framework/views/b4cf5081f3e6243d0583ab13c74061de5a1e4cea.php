<?php $__env->startSection('content'); ?>
    <main id="our-portfolio">
        
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Our Portfolio</h1>
                </div>
            </div>
        </section>

        
        <section class="web-portfollio">
            <div class="container pt-5 pb-5">
                <h2 class="section-title wow fadeInUp mt-0 pt-5">Explore Our Portfolio</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfollio-img-sec">
                            <img src="<?php echo e(asset('images/service/expertcarbuyers.png')); ?>" width="382px" height="100%" alt="image" class="w-100">
                            <a href="<?php echo e(URL::to('https://expatcarbuyers.com/')); ?>" target="_blank" rel="noopener">https://expatcarbuyers.com/</a>
                            <div class="webpill">
                                <p>Wordpress</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfollio-img-sec">
                            <img src="<?php echo e(asset('images/service/ortus.png')); ?>" width="382px" height="100%" alt="image" class="w-100">
                            <a href="<?php echo e(URL::to('https://ortus.com.tr/')); ?>" target="_blank" rel="noopener">https://ortus.com.tr/</a>
                            <div class="webpill">
                                <p>Laravel</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfollio-img-sec">
                            <img src="<?php echo e(asset('images/service/iwa-port.png')); ?>" width="382px" height="100%" alt="image" class="w-100">
                            <a href="<?php echo e(URL::to('http://iwaport.com/customer/home')); ?>" target="_blank" rel="noopener">http://iwaport.com/customer/home</a>
                            <div class="webpill">
                                <p>Node Js</p>
                                <p>Angular</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </>
        </section>
        <?php echo $__env->make('whatwedo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps',['data' => $data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/our-portfolio.blade.php ENDPATH**/ ?>