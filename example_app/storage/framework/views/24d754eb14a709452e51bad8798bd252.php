

<?php $__env->startSection('title'); ?>
    <title>MAIN LAYOUT</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>HOME PAGE</h1>
    <ul>
        <li> <a href="<?php echo e(Route('show_all_users')); ?>">SHOW ALL USERS</a></li>
        <li> <a href="<?php echo e(Route('add_new-user')); ?>">ADD NEW USER</a></li>
    </ul>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <footer>
        footer
    </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ima7\OneDrive - CESAE\PHP programação para a web\example_app\resources\views/users/home.blade.php ENDPATH**/ ?>