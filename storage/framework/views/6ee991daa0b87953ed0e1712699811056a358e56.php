
<?php $__env->startSection('content'); ?>

    <form method="post" action="/thinggive"> 
        <?php echo csrf_field(); ?>

        <h1>Передача вещи</h1>
        <div>
            <label for="thing_id">Идентификатор вещи</label>
            <input type="number" name="thing_id" id="thing_id">
            <label for="to_id">Идентификатор пользователя, кому передается вещь</label>
            <input type="number" name="to_id" id="to_id">
        </div>

        <button type="submit">Отправить</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/uses/give.blade.php ENDPATH**/ ?>