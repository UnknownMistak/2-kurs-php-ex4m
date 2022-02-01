
<?php $__env->startSection('content'); ?>

    <form method="post" action="/useupdate/<?php echo e($uses->id); ?>"> 
        <?php echo csrf_field(); ?>

        <h1>Изменение использования</h1>
        <div>
            <label for="place_id">Идентификатор места</label>
            <input type="number" name="place_id" id="place_id" value="<?php echo e($uses->place_id); ?>">
        </div>

        <button type="submit">Отправить</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/uses/update.blade.php ENDPATH**/ ?>