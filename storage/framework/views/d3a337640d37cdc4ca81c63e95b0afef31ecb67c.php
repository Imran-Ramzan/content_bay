<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <title>Salawat | Admin Panel</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <?php echo $__env->make('portal.layouts.dashboard.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
  </head>
  <body class="ltr light-only" cz-shortcut-listen="true">
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader-box">
        <div class="loader-2"></div>
      </div>
</div>
<!-- Loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php echo $__env->make('portal.layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Page Header Ends   -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <?php echo $__env->make('portal.layouts.dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <?php echo $__env->yieldContent('breadcrumb-title'); ?>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#
                      "> <i data-feather="home"></i></a>
                    </li>
                    <?php echo $__env->yieldContent('breadcrumb-items'); ?>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <?php echo $__env->yieldContent('content'); ?>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php echo $__env->make('portal.layouts.dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
    <!-- latest jquery-->
    <?php echo $__env->make('portal.layouts.dashboard.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/portal/layouts/dashboard/master.blade.php ENDPATH**/ ?>