
<?php $__env->startSection('content'); ?>
    <div class="for_spisok">
    <a href="/creatething" class="link">Создать вещь</a>
    <?php $__currentLoopData = $things; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="show_container">
        <ul class="spisok">
            <li>Название вещи: <?php echo e($thing->name); ?></li>
            <li>Описание: <?php echo e($thing->description); ?></li>
            <li>Срок годности: <?php echo e($thing->wrnt); ?></li>
            <li>Идентификатор создателя: <?php echo e($thing->master); ?></li>
        </ul>
        <a href="/deletething/<?php echo e($thing->id); ?>" class="link_make">Удалить</a>
        <a href="/updatething/<?php echo e($thing->id); ?>" class="link_make">Изменить</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/things/show.blade.php ENDPATH**/ ?>