<?php $__env->startSection('title', 'Юзеры'); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Пользователи</h2>
                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card-body">

                        <?php if($user->is_admin): ?>
                            <a href="<?php echo e(route('admin.toggleAdmin', $user)); ?>" type="button" class="btn btn-danger">Снять админа</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('admin.toggleAdmin', $user)); ?>" type="button" class="btn btn-success">Назначить админом</a>
                        <?php endif; ?>
                            <button data-id="<?php echo e($user->id); ?>" class="testApi">Test Api</button>
                            <?php echo e($user->name); ?>


                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>нет пользователей</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\dz\resources\views/admin/users.blade.php ENDPATH**/ ?>