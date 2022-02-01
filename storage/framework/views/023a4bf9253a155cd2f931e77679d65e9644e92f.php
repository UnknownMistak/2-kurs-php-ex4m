
<?php $__env->startSection('content'); ?>

<div class="for_form">
<h3>Авторизация</h3>

<form action="/custom-login" method="post">
    <?php echo csrf_field(); ?>
    <div class="form_style">
        <label for="email" class="for_label">Введите e-mail</label>
        <input type="email" name="email" id="email" class="for_input">
        <label for="password" class="for_label">Введите пароль</label>
        <input type="password" name="password" id="password" class="for_input">
        
        <button type="submit" class="btn">Войти</button>
    </div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/auth/login.blade.php ENDPATH**/ ?>