
<?php $__env->startSection('content'); ?>
    <div class="for_spisok">
    <?php $__currentLoopData = $repair; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="show_container">
        <ul class="spisok">
            <li>Идентификатор вещи: <?php echo e($rep->thing_id); ?></li>
            <li>Идентификатор места: <?php echo e($rep->place_id); ?></li>
            <li>Идентификатор пользователя: <?php echo e($rep->user_id); ?></li>
            <li>Количество вещей: <?php echo e($rep->amount); ?></li>
        </ul>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/things/myrepair.blade.php ENDPATH**/ ?>