<?php $__env->startSection('title'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> Админка
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>CRUD Новости</h1>
                        <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <h2><?php echo e($item->title); ?></h2>

                            <form action="<?php echo e(route('admin.news.destroy', $item)); ?>" method="post">
                                <a href="<?php echo e(route('admin.news.edit', $item)); ?>" class="btn btn-success">
                                    Edit
                                </a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>




                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            Нет новостей
                        <?php endif; ?>

                        <?php echo e($news->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/admin/index.blade.php ENDPATH**/ ?>