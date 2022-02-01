
<?php $__env->startSection('content'); ?>
    <div class="for_spisok">
    <a href="/givething" class="link">Передать вещь</a>
    <?php $__currentLoopData = $uses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="show_container">
        <ul class="spisok">
            <li>Идентификатор вещи: <?php echo e($use->thing_id); ?></li>
            <li>Идентификатор места: <?php echo e($use->place_id); ?></li>
            <li>Идентификатор пользователя: <?php echo e($use->user_id); ?></li>
            <li>Количество вещей: <?php echo e($use->amount); ?></li>
        </ul>
        <a href="/updateuse/<?php echo e($use->id); ?>" class="link_make">Изменить</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/uses/show.blade.php ENDPATH**/ ?>