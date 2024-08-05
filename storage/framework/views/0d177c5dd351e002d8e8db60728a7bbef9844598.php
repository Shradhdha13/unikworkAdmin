<?php
    /** @var UploadedPhoto[] $uploaded_photos */
    use WebDevEtc\BlogEtc\Models\UploadedPhoto;$uploadedPhoto = $uploaded_photos
?>

<?php $__env->startSection('content'); ?>
    <h5>Admin - Uploaded Images</h5>

    <p>You can view all previously uploaded images here.</p>

    <p>It includes one thumbnail per photo - the smallest image is selected.</p>

    <script>
      function show_uploaded_file_row(id, img) {
        [].forEach.call(document.querySelectorAll('.' + id), function(el) {
          el.style.display = 'block';
        });
        document.getElementById(id).innerHTML = '<a href=\'' + img + '\'><img src=\'' + img +
            '\' style=\'max-width:100%; height:auto;\'></a>';
      }
    </script>
    <?php $__currentLoopData = $uploaded_photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uploadedPhoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div style="border-radius:15px; border:2px solid #efefef; background : #fefefe; margin: 15px;padding:15px">
            <h3>Image ID: <?php echo e($uploadedPhoto->id); ?>: <?php echo e($uploadedPhoto->image_title ?? "Untitled Photo"); ?></h3>
            <h4>
                <small title="<?php echo e($uploadedPhoto->created_at); ?>">
                    Uploaded <?php echo e($uploadedPhoto->created_at->diffForHumans()); ?></small>
            </h4>

            <div class="row">
                <div class="col-md-8">
                    <div class="row" style=" margin: 10px; background: #eee; overflow:auto; padding:5px;">
                        <?php
                        $smallest = null;
                        $smallest_size = -1;
                        foreach ($uploadedPhoto->uploaded_images as $file_key => $file) {
                        $id = 'uploaded_' . ($uploadedPhoto->id) . '_' . $file_key; ?>

                        <div class="col-md-12">
                            <h6 class="text-center mt-3">
                                <strong><?php echo e($file_key); ?></strong> - <?php echo e($file['w']); ?> x <?php echo e($file['h']); ?>:
                            </h6>
                            <p class="text-center"><a
                                        href="<?php echo e(asset(     config("blogetc.blog_upload_dir") . "/". $file['filename'])); ?>"
                                        target="_blank">[link]</a> / <span
                                        class="btn btn-sm btn-primary"
                                        style="cursor: zoom-in;"
                                        onclick='show_uploaded_file_row("<?php echo e($id); ?>","<?php echo e(asset(     config("blogetc.blog_upload_dir") . "/". $file['filename'])); ?>")'>show</span>
                            </p>

                            <div id="<?php echo e($id); ?>"></div>
                        </div>
                        <div class="col-md-6 <?php echo e($id); ?>" style="display:none;">
                            <div>
                                <small class="text-muted">Image URL</small>
                                <input type="text" readonly="readonly" class="form-control"
                                       value="<?php echo e(asset( config("blogetc.blog_upload_dir") . "/". $file['filename'])); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6 <?php echo e($id); ?>" style="display:none;">
                            <div>
                                <small class="text-muted">img tag</small>
                                <input type="text" readonly="readonly" class="form-control"
                                       value='<?php echo e("<img src='".asset(     config("blogetc.blog_upload_dir") . "/". $file['filename'])."' alt='" . e($uploadedPhoto->image_title) . "' >"); ?>'>
                            </div>
                        </div>

                        <?php
                            $area = $file['w'] * $file['h'];
                            if ($area < $smallest_size || $smallest_size < 0) {
                                $smallest = $file;
                                $smallest_size = $area;
                            }

                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php if($smallest): ?>
                        <div style="text-align:center;">
                            <a style="cursor: zoom-in;"
                               href="<?php echo e(asset(config("blogetc.blog_upload_dir") . "/". $smallest['filename'])); ?>"
                               target="_blank">
                                <img alt="" src="<?php echo e(asset(config("blogetc.blog_upload_dir") . "/". $smallest['filename'])); ?>"
                                     style="max-width:100%; height: auto;">
                            </a>
                        </div>

                    <?php else: ?>
                        <div class="alert alert-danger">
                            No image found
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="text-center">
        <?php echo e($uploaded_photos->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('blogetc_admin::layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/vendor/webdevetc/blogetc/src/Views/blogetc_admin/imageupload/index.blade.php ENDPATH**/ ?>