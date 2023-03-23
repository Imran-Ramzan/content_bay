<?php $__env->startSection('head'); ?>
<title>Salawat Project Login | Form</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-wrapper" x-data="{ username: 'phone' }">
    <main class="main-container">
        <section>
            <div class="row no-gutters">
                <div class="col-12 col-lg-5 d-lg-block d-none">
                    <div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center z-index-2">
                        <div class="brk-backgrounds brk-base-bg-gradient-15 brk-abs-overlay" data-brk-library="component__backgrounds_css,component__backgrounds_js,assets_particleground">
                            <div class="brk-backgrounds__canvas brk-particles-standart"></div>
                        </div>
                        <a href="<?php echo e(route('pages.home')); ?>" class="z-index-2 mb-60 pl-15 pr-15">
                            <img src="<?php echo e(asset('img/456x82_logo.png')); ?>" alt="logo" class="">
                        </a>
                        <a href="<?php echo e(route('pages.home')); ?>" class="btn-backgrounds btn-backgrounds_transparent btn-backgrounds_left-icon font__family-montserrat font__weight-normal text-uppercase font__size-13 z-index-2 text-center" style="padding-left:85px; padding-right: 60px;" data-brk-library="component__button">
                            <span class="text">Back to the Homepage</span>
                            <span class="before"><i class="fas fa-arrow-left"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="full-screen d-flex align-items-center pt-30 pb-30 pt-lg-0 pb-lg-0">
                        <div class="container-fluid">
                            <div class="row justify-content-lg-start justify-content-center">
                                <div class="col-lg-2 d-none d-lg-block"></div>
                                <div class="col-12 col-lg-10">
                                    <?php echo $__env->make('common.partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45 text-center text-lg-left">LOGIN</h1>
                                    <form action="<?php echo e(route('user.login')); ?>" class="brk-form brk-form-strict maxw-570 mx-auto mx-lg-0" data-brk-library="component__form" Method="POST">
                                        <?php echo csrf_field(); ?>
                                        <template x-if="username === 'phone'">
                                            <div>
                                                <input type="tel" class="<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter your phone number" name="phone" value="<?php echo e(old('phone')); ?>">
                                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                <span>
                                                    <a href="#" class="ml-3" x-on:click="username = 'email';">Use your email instead.</a>
                                                </span>
                                            </div>
                                        </template>
                                        <template x-if="username === 'email'">
                                            <div>
                                                <input type="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter your email" name="email" value="<?php echo e(old('email')); ?>">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                <span>
                                                    <a href="#" class="ml-3" x-on:click="username = 'phone';">Use a phone number instead.</a>
                                                </span>
                                            </div>
                                        </template>
                                        <input type="password" placeholder="Enter your password" name="password">
                                        <div class="no-margin pl-10 pr-10 mb-30 mt-40 d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <input id="checkbox-strict-1" name="checkbox" type="checkbox" value="1" checked="checked">
                                                <label class="brk-form-checkbox-label" for="checkbox-strict-1">Remember Me</label>
                                            </div>
                                            <div>
                                                <a class="font__size-14 line__height-24 brk-base-font-color text-decoration_underline" href="#">Forgot password?</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-center flex-column flex-lg-row">
                                            <button class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
                                                <span class="text">Login Now</span>
                                                <span class="before"><i class="far fa-hand-point-right"></i></span>
                                            </button>
                                            <a href="<?php echo e(route('user.register')); ?>" class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
                                                <span class="text">Register</span>
                                                <span class="before"><i class="fas fa-user"></i></span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/frontend/user/auth/login.blade.php ENDPATH**/ ?>