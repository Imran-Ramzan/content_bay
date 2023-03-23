<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Salawat Project</title>
    <!-- Favicons -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" id="brk-direction-bootstrap" href="<?php echo e(asset('css/assets/bootstrap.css')); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css')}}" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" id="brk-skin-color" href="<?php echo e(asset('css/skins/brk-blue.css')); ?>">
	<link id="brk-base-color" rel="stylesheet" href="<?php echo e(asset('css/skins/brk-base-color.css')); ?>">
	<link rel="stylesheet" id="brk-direction-offsets" href="<?php echo e(asset('css/assets/offsets.css')); ?>">
	<link id="brk-css-min" rel="stylesheet" href="<?php echo e(asset('css/assets/styles.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendor/revslider/css/settings.css')); ?>">
    <?php echo $__env->yieldContent('head'); ?>
</head>
    <body>
        <div class="main-page">
            <!-- PAGE CONTENT -->
            <?php echo $__env->make('frontend.partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- MAIN CONTAINER -->
        <?php echo $__env->yieldContent('modal'); ?>
        <!-- /Main Wrapper -->
        <script defer="defer" src="<?php echo e(asset('js/scripts.min.js')); ?>"></script>
        <script defer="defer" src="<?php echo e(asset('vendor/revslider/js/jquery.themepunch.tools.min.js')); ?>"></script>
        <script defer="defer" src="<?php echo e(asset('vendor/revslider/js/jquery.themepunch.revolution.min.js')); ?>"></script>
        <script defer="defer" src="<?php echo e(asset('vendor/revslider/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
        <script defer="defer" src="<?php echo e(asset('vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
        <script defer="defer" src="<?php echo e(asset('vendor/revslider/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
        <script defer="defer" src="<?php echo e(asset('vendor/revslider/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
        <script defer="defer" src="<?php echo e(asset('vendor/revslider/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
        <script>
            function setREVStartSize(e){
                try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
                }catch(d){console.log("Failure at Presize of Slider:"+d)}
            };
        </script>
        <?php echo $__env->yieldPushContent('script'); ?>
    </body>
</html>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/frontend/layouts/layout.blade.php ENDPATH**/ ?>