<h2><a href="https://webdevetc.com/">WebDevEtc.com BlogEtc Admin Panel</a></h2>
<p>Welcome to the admin panel for your blog posts.</p>

<ul class="list-group mb-3">
    <li class="list-group-item justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route("blogetc.admin.index")); ?>">BlogEtc Admin Home</a>
                <span class="text-muted">(<?php
                    use WebDevEtc\BlogEtc\Models\Category;
                    use WebDevEtc\BlogEtc\Models\Comment;

                    $categoryCount = \WebDevEtc\BlogEtc\Models\Post::count();

                    echo $categoryCount . ' ' . str_plural('Post', $categoryCount);

                    ?>)</span>
            </h6>
            <small class="text-muted">Overview of your posts</small>

            <div class="list-group ">

                <a href="<?php echo e(route('blogetc.admin.index')); ?>"
                   class="list-group-item list-group-item-action <?php if(Request::route()->getName() === 'blogetc.admin.index'): ?> active <?php endif; ?>  ">
                    <i class="fa fa-th fa-fw" aria-hidden="true"></i>
                    All Posts
                </a>
                <a href="<?php echo e(route('blogetc.admin.create_post')); ?>"
                   class="list-group-item list-group-item-action  <?php if(Request::route()->getName() === 'blogetc.admin.create_post'): ?> active <?php endif; ?>">
                    <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Post
                </a>
            </div>
        </div>
    </li>

    <li class="list-group-item justify-content-between lh-condensed">
        <div>
            <h6 class="my-0">
                <a href="<?php echo e(route('blogetc.admin.comments.index')); ?>">Comments</a>
                <span class="text-muted">
                    <?php
                        $commentCount = Comment::withoutGlobalScopes()->count();
                    ?>

                    <?php echo e('('.$commentCount.' '.str_plural('Comment', $commentCount).')'); ?>

                            </span>
            </h6>
            <small class="text-muted">Manage your comments</small>

            <div class="list-group ">
                <a href="<?php echo e(route('blogetc.admin.comments.index')); ?>"
                   class="list-group-item list-group-item-action  <?php if(Request::route()->getName() === 'blogetc.admin.comments.index' && !Request::get("waiting_for_approval")): ?> active <?php endif; ?>   ">
                    <i class="fa  fa-fw fa-comments" aria-hidden="true"></i>
                    All Comments
                </a>

                <?php $comment_approval_count = Comment::withoutGlobalScopes()
                    ->where('approved', false)->count(); ?>

                <a href="<?php echo e(route('blogetc.admin.comments.index')); ?>?waiting_for_approval=true"
                   class="list-group-item list-group-item-action  <?php if(Request::route()->getName() === 'blogetc.admin.comments.index' && Request::get("waiting_for_approval")): ?> active <?php elseif($comment_approval_count>0): ?> list-group-item-warning <?php endif; ?>  ">
                    <i class="fa  fa-fw fa-comments" aria-hidden="true"></i>
                    <?php echo e($comment_approval_count); ?>

                    Waiting for approval
                </a>
            </div>
        </div>
    </li>

    <li class="list-group-item  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="<?php echo e(route('blogetc.admin.categories.index')); ?>">Categories</a>
                <span class="text-muted">
                        <?php $postCount = Category::count(); ?>
                    <?php echo e('(' . $postCount.' '.str_plural('Category', $postCount) . ')'); ?>

                    </span>
            </h6>
            <small class="text-muted">Blog post categories</small>
            <div class="list-group ">
                <a href="<?php echo e(route('blogetc.admin.categories.index')); ?>"
                   class="list-group-item list-group-item-action  <?php if(Request::route()->getName() === 'blogetc.admin.categories.index'): ?> active <?php endif; ?>">
                    <i class="fa fa-object-group fa-fw" aria-hidden="true"></i>
                    All Categories
                </a>
                <a href="<?php echo e(route('blogetc.admin.categories.create_category')); ?>"
                   class="list-group-item list-group-item-action  <?php if(Request::route()->getName() === 'blogetc.admin.categories.create_category'): ?> active <?php endif; ?>  ">
                    <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Category
                </a>
            </div>
        </div>

    </li>

    <?php if(config("blogetc.image_upload_enabled")): ?>
        <li class="list-group-item  justify-content-between lh-condensed">
            <div>
                <h6 class="my-0"><a href="<?php echo e(route('blogetc.admin.images.upload')); ?>">Upload images</a></h6>
                <div class="list-group ">

                    <a href="<?php echo e(route('blogetc.admin.images.all')); ?>"
                       class="list-group-item list-group-item-action  <?php if(Request::route()->getName() === 'blogetc.admin.images.all'): ?> active <?php endif; ?>  ">
                        <i class="fa fa-picture-o fa-fw" aria-hidden="true"></i>
                        View All
                    </a>

                    <a href="<?php echo e(route('blogetc.admin.images.upload')); ?>"
                       class="list-group-item list-group-item-action  <?php if(Request::route()->getName() === 'blogetc.admin.images.upload'): ?> active <?php endif; ?>  ">
                        <i class="fa fa-upload fa-fw" aria-hidden="true"></i>
                        Upload
                    </a>
                </div>
            </div>
        </li>
    <?php endif; ?>
</ul>
<?php /**PATH /var/www/html/vendor/webdevetc/blogetc/src/Views/blogetc_admin/layouts/sidebar.blade.php ENDPATH**/ ?>