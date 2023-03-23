<?php $__env->startSection('title', 'Users'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Meetups</h3>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Meetups</li>
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
                        <a href="<?php echo e(route('meetups.create')); ?>" class="btn btn-pill btn-primary pull-right d-flex justify-content-center align-items-center" type="button" title="" data-bs-original-title="btn btn-pill btn-primary" data-original-title="Add Meetup">
                            <i class="fa fa-plus mr-2"></i> Add Meetup</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Type</th>
                                        <th>Phone</th>
                                        <th>Total Seats</th>
                                        <th>Creation Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $meetups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $meetup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key +1); ?></td>
                                        <td><?php echo e($meetup->name); ?></td>
                                        <td><?php echo e($meetup->date); ?></td>
                                        <td><?php echo e($meetup->time); ?></td>
                                        <td><?php echo e($meetup->type); ?></td>
                                        <td><?php echo e($meetup->phone); ?></td>
                                        <td><?php echo e($meetup->total_seats); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($meetup->create_date)->format('Y-M-d')); ?></td>
                                        <td class="text-center">
                                            <div class="table-action">
                                                <a href="<?php echo e(route('meetups.edit', $meetup->id)); ?>" class="jsgrid-button jsgrid-edit-button">
                                                    <i class="icofont icofont-pencil-alt-5"></i>
                                                </a>
                                                <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this meetup?')){document.getElementById('delete-meetup-<?php echo e($meetup->id); ?>-form').submit();}" class="jsgrid-button jsgrid-edit-button">
                                                    <i class="icofont icofont-trash"></i>
                                                </a>
                                                <form action="<?php echo e(route('meetups.destroy', $meetup->id)); ?>"
                                                    id="delete-meetup-<?php echo e($meetup->id); ?>-form" method="POST" style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="12">
                                            <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                                                <p class="d-flex justify-content-center">Meetups has not added so far.</p>
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
            <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('portal.layouts.dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/portal/meetups/index.blade.php ENDPATH**/ ?>