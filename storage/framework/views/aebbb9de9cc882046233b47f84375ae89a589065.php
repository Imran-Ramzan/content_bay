<?php $__env->startSection('head'); ?>
    <title>Salawat Project Registration | Form</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-wrapper" x-data="{ username: 'phone' }">
    <main class="main-container">
        <section>
            <div class="row no-gutters">
                <div class="col-12 col-lg-5 order-2 order-lg-1">
                    <div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center">
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
                <div class="col-12 col-lg-7 order-1 order-lg-2">
                    <div class="full-screen d-flex align-items-center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2 col-md-1"></div>
                                <div class="col-12 col-md-10">
                                    <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45">REGISTER</h1>
                                    <form action="<?php echo e(route('user.register')); ?>" method="POST" class="brk-form brk-form-strict maxw-570" data-brk-library="component__form">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" placeholder="Enter your first name" name="first_name" class="<?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('first_name')); ?>">
                                        <?php $__errorArgs = ['first_name'];
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
                                        <input type="text" placeholder="Enter your last name" name="last_name" class="<?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('last_name')); ?>">
                                        <?php $__errorArgs = ['last_name'];
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
                                        <select class="form-control digits" name="age">
                                            <option value="">Select your age</option>
                                            <option value="12">12</option>
                                            <option value="14">14</option>
                                            <option value="16">16</option>
                                        </select>
                                        <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <select class="form-control digits" name="country">
                                            <option value="">Select your country</option>
                                            <option value="pakistan">Pakistan</option>
                                            <option value="india">India</option>
                                            <option value="chine">China</option>
                                        </select>
                                        <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <select class="form-control digits" name="organization">
                                            <option value="">Select your orgnization</option>
                                            <option value="Minhaj-ul-Quran">Minhaj-ul-Quran</option>
                                            <option value="Noor-e-Darwesh">Noor-e-Darwesh</option>
                                        </select>
                                        <?php $__errorArgs = ['organization'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                                    <a href="#" class="ml-3" x-on:click="username = 'phone';">Use a phone num instead.</a>
                                                </span>
                                            </div>
                                        </template>
                                        <input class="form-control" name="password" value="<?php echo e(old('password')); ?>" type="password" placeholder=" Enter your password" autocomplete="new-password" required>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <input class="form-control" name="password_confirmation" value="<?php echo e(old('password')); ?>" type="password" placeholder="Enter your  confirm password" required>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"  role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="mt-20 d-flex flex-wrap justify-content-between">
                                            <button class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
                                                <span class="text">REGISTER</span>
                                                <span class="before"><i class="far fa-hand-point-right"></i></span>
                                            </button>
                                            <a href="<?php echo e(route('user.login')); ?>" class="btn-backgrounds btn-backgrounds_no-icon btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-10" data-brk-library="component__button">
                                                <span class="text">LOGIN</span>
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

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/frontend/user/auth/register.blade.php ENDPATH**/ ?>