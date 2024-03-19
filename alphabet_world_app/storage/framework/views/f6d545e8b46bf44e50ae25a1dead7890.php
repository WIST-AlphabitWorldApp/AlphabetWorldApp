
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><strong>Dashboard</strong></div>
            <div class="card-body">
                <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <?php echo e($message); ?>

                </div>
                <?php else: ?>
                <div class="alert alert-success">
                    Hello, Admin, You are logged in!
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\gitHub\AlphabetWorldApp\alphabet_world_app\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>