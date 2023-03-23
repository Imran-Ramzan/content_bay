<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h5>Update Role</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('roles.update', $role->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input class="form-control m-input digits <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" type="tel" value="<?php echo e(old('name', $role->name)); ?>" placeholder="Please enter name" required>
                    <?php $__errorArgs = ['name'];
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
                </div>
                <table class="table table-bordered">
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($module); ?></td>
                        <td>
                            <?php $__currentLoopData = $permissions->where('module', $module); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mx-2">
                                <input id='permission-<?php echo e($permission->id); ?>' type="checkbox" name="permissions[]" <?php echo e(in_array($permission->name, $rolePermissions) ? 'checked' : ''); ?> value="<?php echo e($permission->name); ?>">
                                <label for='permission-<?php echo e($permission->id); ?>'><?php echo e(Str::of($permission->name)->replace('-', ' ')->ucfirst()); ?></label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <button class="btn btn-primary f-right" type="submit">Submit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('portal.layouts.dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/portal/roles/edit.blade.php ENDPATH**/ ?>