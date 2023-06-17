<?php $__env->startSection('title'); ?>
    <title>home</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="card-body">
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <h2 class="text-center mb-4">BUILDTRACK</h2>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img src="<?php echo e(asset('images/expense.png')); ?>" alt="Image" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                            </div>
                            <h3 class="card-title text-center">expense tracking</h3>
                            <p class="card-text text-justify ">effortlessly record and categorize your expenses, ensuring accurate financial management</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img src="<?php echo e(asset('images/budget.png')); ?>" alt="Image" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                            </div>
                            <h3 class="card-title text-center">budget management</h3>
                            <p class="card-text text-justify">create and monitor budgets for your projects, ensuring you stay within financial limits</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img src="<?php echo e(asset('images/data.png')); ?>" alt="Image" class="img-fluid" style="max-width: 150px; max-height: 150px;">
                            </div>
                            <h3 class="card-title text-center">data visualization</h3>
                            <p class="card-text text-justify">visualize your expenses and budgets through intuitive charts and graphs for better insights</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('endcontent'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ima7\Documents\GitHub\php\project-buildTrack\resources\views/users/home.blade.php ENDPATH**/ ?>