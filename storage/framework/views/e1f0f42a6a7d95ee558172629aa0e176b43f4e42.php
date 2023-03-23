<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
            <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
            <meta name="author" content="pixelstrap">
            <link rel="icon" href="<?php echo e(asset('backend/images/favicon.png')); ?>" type="image/x-icon">
            <link rel="shortcut icon" href="<?php echo e(asset('backend/images/favicon.png')); ?>" type="image/x-icon">
            <title>Salawat</title>
            <!-- Google font-->
            <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/fontawesome.css')); ?>">
            <!-- ico-font-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/icofont.css')); ?>">
            <!-- Themify icon-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/themify.css')); ?>">
            <!-- Flag icon-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/flag-icon.css')); ?>">
            <!-- Feather icon-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/feather-icon.css')); ?>">
            <!-- Plugins css start-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/scrollbar.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/animate.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/chartist.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/date-picker.css')); ?>">
            <!-- Plugins css Ends-->
            <!-- Bootstrap css-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/bootstrap.css')); ?>">
            <!-- App css-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/style.css')); ?>">
            <link id="color" rel="stylesheet" href="<?php echo e(asset('backend/css/color-1.css')); ?>" media="screen">
            <!-- Responsive css-->
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/responsive.css')); ?>">
        </head>
        <body onload="startTime()">
            <!-- tap on top starts-->
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>
            <!-- tap on tap ends-->
            <!-- page-wrapper Start-->
            <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <!-- Page Header Start-->
            <div class="page-header">
                <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo e(asset('backend/images/logo/logo.png')); ?>" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">

                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i></div>
                    </li>
                    <li class="cart-nav onhover-dropdown">
                        <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                        <ul class="cart-dropdown onhover-show-div">
                            <li>
                                <h6 class="mb-0 f-20">Shoping Bag</h6><i data-feather="shopping-cart"></i>
                            </li>
                            <li class="mt-0">
                                <div class="media"><img class="img-fluid rounded-circle me-3 img-60" src="<?php echo e(asset('backend/images/ecommerce/01.jpg')); ?>" alt="">
                                <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                    <p>Yellow(#fcb102)</p>
                                    <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend">
                                        <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                                        <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                        <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                                    </div>
                                    </div>
                                    <h6 class="text-end text-muted">$299.00</h6>
                                </div>
                                <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li class="mt-0">
                                <div class="media"><img class="img-fluid rounded-circle me-3 img-60" src="<?php echo e(asset('backend/images/ecommerce/03.jpg')); ?>" alt="">
                                <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                    <p>Yellow(#fcb102)</p>
                                    <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend">
                                        <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                                        <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                        <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                                    </div>
                                    </div>
                                    <h6 class="text-end text-muted">$299.00</h6>
                                </div>
                                <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li>
                                <div class="total">
                                <h6 class="mb-2 mt-0 text-muted">Order Total : <span class="f-right f-20">$598.00</span></h6>
                                </div>
                            </li>
                            <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="cart.html">Go to shoping bag</a><a class="btn btn-block w-100 btn-secondary view-cart" href="checkout.html">Checkout</a>
                            </li>
                        </ul>
                    </li>

                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media">
                                <img class="b-r-10" src="<?php echo e(asset('backend/images/dashboard/profile.jpg')); ?>" alt="">
                                <div class="media-body"><span><?php echo e(Auth::user()->name ?? ''); ?></span>
                                    <p class="mb-0 font-roboto"> <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="#"><i data-feather="user"></i><span>Account </span></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"> </i><span><?php echo e(__('Logout')); ?></span>
                                    </a>
                                </li>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
                        <div class="ProfileCard-avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                        </div>
                        <div class="ProfileCard-details">
                        </div>
                    </div>
                </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                </div>
            </div>
            <!-- Page Header Ends                              -->
            <!-- Page Body Start-->
            <div class="page-body-wrapper">
                <!-- Page Sidebar Start-->
                <div class="sidebar-wrapper">
                    <div>
                        <div class="logo-wrapper">
                            <a href="index.html"><img class="img-fluid for-light" src="<?php echo e(asset('backend/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('backend/images/logo/logo_dark.png')); ?>" alt="">
                            </a>
                            <div class="back-btn"><i class="fa fa-angle-left"></i>
                            </div>
                            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                            </div>
                        </div>
                        <div class="logo-icon-wrapper">
                            <a href="index.html"><img class="img-fluid" src="<?php echo e(asset('backend/images/logo/logo-icon.png')); ?>" alt="">
                            </a>
                        </div>
                        <nav class="sidebar-main">
                            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                                <div id="sidebar-menu">
                                    <ul class="sidebar-links" id="simple-bar">
                                        <li class="back-btn"><a href="index.html"><img class="img-fluid" src="<?php echo e(asset('backend/images/logo/logo-icon.png')); ?>" alt=""></a>
                                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                        </li>
                                        <li class="sidebar-main-title">
                                            <div>
                                            <h6 class="lan-1"><i data-feather="home"></i> Dashboards</h6>
                                            <p class="lan-2">Dashboards,widgets & layout.</p>
                                            </div>
                                        </li>
                                        <li class="sidebar-list">
                                            <label class="badge badge-danger">New</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="box"></i><span>Project                </span></a>
                                            <ul class="sidebar-submenu">
                                            <li><a href="projects.html">Project List</a></li>
                                            <li><a href="projectcreate.html">Create new</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                        </nav>
                    </div>
                </div>
                <!-- Page Sidebar Ends-->
                <div class="page-body">
                    <div class="container-fluid">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                                        <li class="breadcrumb-item">Dashboard</li>
                                        <li class="breadcrumb-item active">Default</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Container-fluid starts-->
                    <div class="container-fluid">
                        <div class="row second-chart-list third-news-update">
                            <span id="greeting"></span>
                        <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                            <div class="card">
                            <div class="card-body p-0">
                                <div class="row m-0 chart-main">
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                        <div class="small-chart flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                        <h4>1001</h4><span>purchase </span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                        <div class="small-chart1 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                        <h4>1005</h4><span>Sales</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                        <div class="small-chart2 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                        <h4>100</h4><span>Sales return</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media border-none align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                        <div class="small-chart3 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                        <h4>101</h4><span>Purchase ret</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                            <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>$95,900<span class="new-box">Hot</span></h4><span>Purchase Order Value</span>
                                </div>
                                <div class="knob-block text-center">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                            <div class="col-xl-3 xl-50 chart_data_right second d-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body right-chart-content">
                                                <h4>$95,000<span class="new-box">New</span></h4><span>Product Order Value</span>
                                            </div>
                                            <div class="knob-block text-center">
                                                <input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="60">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid Ends-->
                    <main class="py-4">
                        <?php echo $__env->yieldContent('content'); ?>
                    </main>
                </div>
                <!-- Loader starts-->
                <div class="loader-wrapper">
                    <div class="loader-box">
                        <div class="loader-2"></div>
                    </div>
                </div>
                <!-- Loader ends-->
                <!-- footer start-->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 footer-copyright text-center">
                                    <p class="mb-0">Copyright 2020-21 © Salawat</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- latest jquery-->
            <script src="<?php echo e(asset('backend/js/jquery-3.5.1.min.js')); ?>"></script>
            <!-- Bootstrap js-->
            <script src="<?php echo e(asset('backend/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
            <!-- feather icon js-->
            <script src="<?php echo e(asset('backend/js/icons/feather-icon/feather.min.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/icons/feather-icon/feather-icon.js')); ?>"></script>
            <!-- scrollbar js-->
            <script src="<?php echo e(asset('backend/js/scrollbar/simplebar.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/scrollbar/custom.js')); ?>"></script>
            <!-- Sidebar jquery-->
            <script src="<?php echo e(asset('backend/js/config.js')); ?>"></script>
            <!-- Plugins JS start-->
            <script src="<?php echo e(asset('backend/js/sidebar-menu.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/chart/chartist/chartist.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/chart/knob/knob.min.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/chart/knob/knob-chart.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/chart/apex-chart/apex-chart.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/chart/apex-chart/stock-prices.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/notify/bootstrap-notify.min.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/dashboard/default.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/notify/index.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/datepicker/date-picker/datepicker.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/typeahead/handlebars.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/typeahead/typeahead.bundle.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/typeahead/typeahead.custom.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/typeahead-search/handlebars.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/typeahead-search/typeahead-custom.js')); ?>"></script>
            <script src="<?php echo e(asset('backend/js/tooltip-init.js')); ?>"></script>
            <!-- Plugins JS Ends-->
            <!-- Theme js-->
            <script src="<?php echo e(asset('backend/js/script.js')); ?>"></script>
            <!-- login js-->
            <!-- Plugin used-->
        </body>
    </html>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>