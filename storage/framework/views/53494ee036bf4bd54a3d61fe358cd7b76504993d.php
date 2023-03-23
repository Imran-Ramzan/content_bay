<?php $__env->startSection('title', 'Users'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Roles</h3>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Roles</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <?php echo $__env->make('common.partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card-header row mx-0">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                        <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-pill btn-primary pull-right d-flex justify-content-center align-items-center" type="button" title="" data-bs-original-title="btn btn-pill btn-primary" data-original-title="Add Role">
                            <i class="fa fa-plus mr-2"></i>Add Role </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Creation Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key +1); ?></td>
                                        <td><?php echo e($role->name); ?></td>
                                        <td><?php echo e($role->created_at->format('M d, Y')); ?></td>
                                        <td class="text-center">
                                            <div class="table-action">
                                                <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="jsgrid-button jsgrid-edit-button">
                                                    <i class="icofont icofont-pencil-alt-5"></i> Edit
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="12">
                                            <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                                                <p class="d-flex justify-content-center">Role has not added so far.</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Zero Configuration  Ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/status.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('portal.layouts.dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/portal/roles/index.blade.php ENDPATH**/ ?>