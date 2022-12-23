<?php $__env->startSection('title'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> Категории
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Новости категории <?php echo e($category); ?></h1>
                        <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <h2><?php echo e($item['title']); ?></h2>
                            <div class="card-img" style="background-image: url(<?php echo e($item->image ?? asset('storage/default.jpg')); ?>)"></div>
                            <?php if(!$item['isPrivate']): ?>
                                <a href="<?php echo e(route('news.show', $item)); ?>">Подробнее..</a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            Нет новостей
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/news/category.blade.php ENDPATH**/ ?>