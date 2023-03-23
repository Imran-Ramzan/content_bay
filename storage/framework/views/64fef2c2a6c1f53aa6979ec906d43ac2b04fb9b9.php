<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-blue.css">
    <head>
        <?php echo $__env->yieldContent('head'); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="favicon.ico">
        <meta name="theme-color" content="#2775FF">
        <meta name="keywords" content="themeforest, theme, html, template">
        <meta name="description" content="themeforest, theme, html, template">
        <link rel="stylesheet" id="brk-direction-bootstrap" href="<?php echo e(asset('css/assets/bootstrap.css')); ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" id="brk-skin-color" href="<?php echo e(asset('css/skins/brk-blue.css')); ?>">
        <link id="brk-base-color" rel="stylesheet" href="<?php echo e(asset('css/skins/brk-base-color.css')); ?>">
        <link rel="stylesheet" id="brk-direction-offsets" href="<?php echo e(asset('css/assets/offsets.css')); ?>">
        <link id="brk-css-min" rel="stylesheet" href="<?php echo e(asset('css/assets/styles.min.css')); ?>">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    </head>
    <body>
	    <div class="main-wrapper">
            <main class="main-container">
                <!-- PAGE CONTENT -->
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div><!-- MAIN CONTAINER -->
        <!-- /Main Wrapper -->
        <a href="#top" id="toTop"></a>
        <!-- Core theme JS-->
        <script defer="defer" src="<?php echo e(asset('js/scripts.min.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('script'); ?>
    </body>
</html>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>