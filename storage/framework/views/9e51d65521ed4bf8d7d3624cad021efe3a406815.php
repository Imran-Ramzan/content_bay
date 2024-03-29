<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
		<title><?php echo $__env->yieldContent('title'); ?></title>
		<!-- Google font-->
		<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
		<?php echo $__env->make('admin.layouts.authentication.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo method_field('style'); ?>
	</head>
	<body>
			<?php echo $__env->yieldContent('content'); ?>
			<?php echo $__env->make('admin.layouts.authentication.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldPushContent('script'); ?>
	</body>
</html>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/admin/layouts/authentication/master.blade.php ENDPATH**/ ?>