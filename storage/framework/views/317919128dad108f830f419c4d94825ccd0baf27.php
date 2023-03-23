<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Form Controls</li>
    <li class="breadcrumb-item active">Base Inputs</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
            <?php echo $__env->make('common.partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card">
				<div class="card-header">
					<h5>Create User</h5>
				</div>
				<form action = <?php echo e(route('users.store')); ?> method ="post">
                    <?php echo csrf_field(); ?>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Name <span class="text-danger"> *</span></label>
									<div class="col-sm-9">
										<input class="form-control" value="<?php echo e(old('name')); ?>" name="name" type="text" placeholder="name" required="">
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-sm-3 col-form-label">Email <span class="text-danger"> *</span></label>
									<div class="col-sm-9">
										<input class="form-control" name="email" value="<?php echo e(old('email')); ?>" type="email" placeholder="email" required="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Password <span class="text-danger"> *</span></label>
									<div class="col-sm-9">
										<input class="form-control" name="password" value="<?php echo e(old('password')); ?>" type="password" placeholder="Password" required="" autocomplete="new-password" >
                                        <?php $__errorArgs = ['password'];
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
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-sm-3 col-form-label">Confirm Password <span class="text-danger">*</span></label>
									<div class="col-sm-9">
										<input class="form-control" name="password_confirmation" value="<?php echo e(old('password')); ?>" type="password" placeholder="Password" required="">
                                        <?php $__errorArgs = ['password'];
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
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">phone</label>
									<div class="col-sm-9">
										<input class="form-control m-input digits" name="phone" type="tel" value="<?php echo e(old('phone')); ?>" placeholder="phone" >
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-sm-3 col-form-label">Designation</label>
									<div class="col-sm-9">
										<input class="form-control m-input digits" name="designation" type="text" value="<?php echo e(old('designation')); ?>" placeholder="designation" >
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="col-sm-9 offset-sm-3">
							<button class="btn btn-primary" type="submit">Submit</button>
							<input class="btn btn-light" type="reset" value="Cancel">
						</div>
					</div>
				</form>
			</div>
        </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/admin/users/create.blade.php ENDPATH**/ ?>