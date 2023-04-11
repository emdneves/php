

<?php $__env->startSection('title'); ?>
    <title>MAIN LAYOUT</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>new USERS</h1>
    <ul>
        <li>ola, sou um novo utilizador</li>
 
    </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <footer>
        footer
    </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ima7\OneDrive - CESAE\PHP programação para a web\example_app\resources\views/users/new_user.blade.php ENDPATH**/ ?>