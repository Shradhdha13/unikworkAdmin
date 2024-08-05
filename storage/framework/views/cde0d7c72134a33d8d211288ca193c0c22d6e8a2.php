<table class="table table-bordered users-table">
    <thead>
        <tr>    
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(((($result->currentPage() - 1 ) * $result->perPage() ) + $loop->iteration) . '.'); ?></td>
                <td><?php echo e(ucfirst($users->firstname)); ?> <?php echo e(ucfirst($users->lastname)); ?></td>
                <td><?php echo e($users->email); ?></td>
                <td>
                    <?php switch($users->role):
                        case (1): ?>
                            <p class="mb-0">Admin</p>
                            <?php break; ?>
                        <?php case (2): ?>
                            <p class="mb-0">HR</p>
                            <?php break; ?>
                        <?php case (3): ?>
                            <p class="mb-0">Project Manager</p>
                    <?php endswitch; ?>
                </td>
                <td class="table-action">
                    <button type="button" class="edit-btn btn btn-primary editusers btn-icon" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo e(encrypt($users->id)); ?>"><img src="<?php echo e(asset('/images/edit.png')); ?>" alt="icon"></button>
                    <a data-id="<?php echo e(encrypt($users->id)); ?>" type="button" class="delete-btn btn-icon" id="deleteUser"><img src="<?php echo e(asset('/images/delete.png')); ?>" alt="icon"></a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div>
    <?php echo $result->links(); ?>

</div><?php /**PATH /var/www/html/resources/views/admin/users/data.blade.php ENDPATH**/ ?>