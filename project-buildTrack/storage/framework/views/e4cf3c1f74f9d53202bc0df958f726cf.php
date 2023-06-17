<?php $__env->startSection('title'); ?>
    <title>Adicionar Users</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Adicionar Tarefa</h1>




       <form method="POST" action="<?php echo e(route('store_task')); ?>">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select id="category_id" name="category_id" class="form-control">
            <option value="">Selecione uma categoria</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="article">Artigo</label>
        <input type="text" id="article" name="article" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="cost">Custo</label>
        <input type="number" id="cost" name="cost" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="measure">Medida</label>
        <input type="text" id="measure" name="measure" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" id="type" name="type" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar Tarefa</button>
</form>

    </div>
    <a href="<?php echo e(route('home')); ?>">Voltar</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ima7\Documents\GitHub\php\project-buildTrack\resources\views/tasks/add_task.blade.php ENDPATH**/ ?>