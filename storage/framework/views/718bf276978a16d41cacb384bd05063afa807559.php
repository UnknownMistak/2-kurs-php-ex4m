<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaytsev project</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset("css/style.css")); ?>">
</head>
<body>
    <div class="top">
        <nav class="navigation">
            <ul class="navigation_main">
                <li><a href="/" class="navigation_link">Главная</a></li>
                <?php if(Auth::guest()): ?>
                    <li><a href="/login" class="navigation_link">Вход</a></li>
                    <li><a href="/registration" class="navigation_link">Регистрация</a></li>
                <?php else: ?>
                    <li><a href="/things" class="navigation_link">Вещи</a></li>
                    <li><a href="/places" class="navigation_link">Места</a></li>
                    <li><a href="/uses" class="navigation_link">Использование</a></li>
                    <li><a href="/logout" class="navigation_link">Выйти</a></li>
                    <li><a href="/mythings" class="navigation_link">Мои Вещи</a></li>
                    <li><a href="/myrepair" class="navigation_link">Вещи в ремонте</a></li>
                    <li><a href="/mywork" class="navigation_link">Вещи в работе</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js' )); ?>"></script>
</body>
</html><?php /**PATH C:\Users\yurec\LaravelSession\resources\views/layouts/layout.blade.php ENDPATH**/ ?>