
<?php $__env->startSection('content'); ?>
    <div class="for_spisok">
    <?php $__currentLoopData = $mythings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mything): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="show_container">
        <ul class="spisok">
            <li>Идентификатор вещи: <?php echo e($mything->thing_id); ?></li>
            <li>Идентификатор места: <?php echo e($mything->place_id); ?></li>
            <li>Идентификатор пользователя: <?php echo e($mything->user_id); ?></li>
            <li>Количество вещей: <?php echo e($mything->amount); ?></li>
        </ul>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/things/mythings.blade.php ENDPATH**/ ?>