<?php $__env->startSection('title'); ?>
    <title>All Users</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>

        <h2 class="text-center">USERS</h2>
        <form method="GET">
            <select class="custom-select" name="user_id" onchange="this.form.submit()">
                <option value="" selected>all contacts</option>
                <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if($item->id == request()->query('user_id')): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                        <?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">password</th>
                    <th scope="col">email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($item->id); ?></th>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->password); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td>
                            <a href="<?php echo e(route('show_user', $item->id)); ?>"><button class="btn btn-info">watch</button></a>
                            <a href="<?php echo e(route('delete_user', $item->id)); ?>"><button
                                    class="btn btn-danger">delete</button></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('endcontent'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ima7\Documents\GitHub\php\project-buildTrack\resources\views/users/all_users.blade.php ENDPATH**/ ?>