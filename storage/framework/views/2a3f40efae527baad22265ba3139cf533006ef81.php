
<?php if(Session('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Session('success'); ?>

    </div>
<?php endif; ?>

<div id="dp-block" style="display: none;" class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Add to favorite list
</div>

<div id="dp-block-danger" style="display: none;" class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Instructor is already in favorite list
</div>

<?php if(Session('warning')): ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Session('warning'); ?>

    </div>
<?php endif; ?>

<?php if(Session('danger')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Session('danger'); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
        <?php echo implode('', $errors->all('<div  class="alert alert-danger alert-dismissible error-message-for-anything" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>:message</div>')); ?>

<?php endif; ?>

<?php if(session('message')): ?>
    <div id="any-message-for-anything" class="alert <?php echo e(session('alert-class', 'alert-info')); ?> border-0 alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        <?php echo session('message'); ?>

    </div>
<?php endif; ?>
<?php /**PATH G:\xampp\htdocs\salawatproject.com\resources\views/common/partials/flash.blade.php ENDPATH**/ ?>