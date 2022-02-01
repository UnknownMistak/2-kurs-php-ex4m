
<?php $__env->startSection('content'); ?>

    <form method="post" action="/thing"> 
        <?php echo csrf_field(); ?>

        <h1>Создание вещи</h1>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите название">
            <label for="description">Описание</label>
            <input type="text" name="description" id="description">
            <label for="wrnt">Срок годности</label>
            <input type="text" name="wrnt" id="wrnt">
        </div>

        <button type="submit">Отправить</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/things/create.blade.php ENDPATH**/ ?>