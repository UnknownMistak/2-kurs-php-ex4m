
<?php $__env->startSection('content'); ?>
    <div class="for_spisok">
    <a href="/createplace" class="link">Создать место</a>
    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="show_container">
        <ul class="spisok">
            <li>Название места: <?php echo e($place->name); ?></li>
            <li>Описание: <?php echo e($place->description); ?></li>
            <li>На починке: <?php echo e($place->repair); ?></li>
            <li>В работе: <?php echo e($place->work); ?></li>
            <li>Идентификатор места: <?php echo e($place->id); ?></li>
        </ul>
        <a href="/deleteplace/<?php echo e($place->id); ?>" class="link_make">Удалить</a>
        <a href="/updateplace/<?php echo e($place->id); ?>" class="link_make">Изменить</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/places/show.blade.php ENDPATH**/ ?>