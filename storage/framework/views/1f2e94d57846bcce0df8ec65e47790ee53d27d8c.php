<div class="sidebar-wrapper">
    <div class="logo-wrapper">
        <a href="#"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('/assets/images/logo/logo_dark.png')); ?>" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn">
                    <a href="#"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-list">
                    <a href="<?php echo e(route('user.dashboard')); ?>" class="sidebar-link sidebar-title <?php echo e(Route::currentRouteName()=='dashboard' ? 'active' : ''); ?>" style="cursor: pointer;">
                        <i data-feather="home"></i>
                        <span class="lan-3"> Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="airplay"></i><span class="lan-6">Profile</span>
                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                    </a>
                    
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="airplay"></i><span class="lan-6">Change Password</span>
                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                    </a>
                    
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="<?php echo e(route('user.logout')); ?>">
                        <i data-feather="airplay"></i><span class="lan-6">Logout</span>
                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/frontend/layouts/dashboard/sidebar.blade.php ENDPATH**/ ?>