
<?php $__env->startSection('title', 'Users'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('backend/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Users</h3>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Admins</li>
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
                        <a href="<?php echo e(route('admins.create')); ?>" class="btn btn-pill btn-primary pull-right d-flex justify-content-center align-items-center" type="button" title="" data-bs-original-title="btn btn-pill btn-primary" data-original-title="Add User">
                            <i class="fa fa-plus mr-2"></i> Add User </a>
                    </div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="basic-1">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Email</th>
									<th>Status</th>
									<th>Phone</th>
									<th>Designation</th>
									<th>Created By</th>
									<th>Creation Date</th>
                                    <th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $__empty_1 = true; $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key +1); ?></td>
                                        <td><?php echo e($admin->name); ?></td>
                                        <td><?php echo e($admin->email); ?></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox"  id="<?php echo e($admin->id); ?>" class="check admin-toggle-class" <?php echo e($admin->status ? 'checked' : ''); ?>>
                                                <label for="<?php echo e($admin->id); ?>" class="checktoggle"></label>
                                            </div>
                                        </td>
                                        <td><?php echo e($admin->phone); ?></td>
                                        <td><?php echo e($admin->designation); ?></td>
                                        <td><?php echo e($admin->createdBy ?? $admin->createdBy->name ?? ''); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($admin->create_date)->format('Y-M-d')); ?></td>
                                        <td class="text-center">
                                            <div class="table-action">
                                                <a href="<?php echo e(route('admins.edit', $admin->id)); ?>" class="jsgrid-button jsgrid-edit-button">
                                                    <i class="icofont icofont-pencil-alt-5"></i> Edit
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="12">
                                            <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                                                <p class="d-flex justify-content-center">User has not added so far.</p>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('backend/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/status.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/backend/admins/index.blade.php ENDPATH**/ ?>