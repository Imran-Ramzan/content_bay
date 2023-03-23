<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper">
            <div class="logo-wrapper">
                <a href="#"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt="" /></a>
            </div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="sliders"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper pl-0">
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="onhover-dropdown">
                    <div class="notification-box"><i data-feather="bell"> </i><span class="badge badge-pill badge-secondary">4 </span></div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li>
                            <i data-feather="bell"></i>
                            <h6 class="f-18 mb-0">Notitications</h6>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o mr-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                        </li>
                        <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                    </ul>
                </li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>

                <li class="profile-nav onhover-dropdown p-0 mr-0">
                    <div class="media profile-media">
                        <img class="b-r-10" src="<?php echo e(asset('assets/images/dashboard/profile.jpg')); ?>" alt="" />
                        <div class="media-body">
                            <span><?php echo e(Auth::user()->name ?? ''); ?></span>
                            <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <a href="#"><i data-feather="user"></i><span>Account </span></a>
                        </li>
                        <li>
                            <a href="#"><i data-feather="settings"></i><span>Settings</span></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('portal.logout')); ?>" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i data-feather="log-out"> </i><span>Log Out</span></a>
                            <form id="logout-form" action="<?php echo e(route('portal.logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">{{name}}</div>
                </div>
            </div>
        </script>
        <script class="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
        </script>
    </div>
</div>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/portal/layouts/dashboard/header.blade.php ENDPATH**/ ?>