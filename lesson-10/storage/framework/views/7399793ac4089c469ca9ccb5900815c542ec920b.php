<?php $__env->startSection('title', 'Новость'); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php if($news): ?>
                            <?php if(!$news->isPrivate || Auth::check()): ?>
                                <h2><?php echo e($news->title); ?></h2>
                                <div class="card-img" style="background-image: url(<?php echo e(asset('storage/default.jpg')); ?>)"></div>
                                <p><?php echo e($news->text); ?></p>
                                <a href="<?php echo e($news->source_url); ?>"><?php echo e($news->source_url); ?></a>
                            <?php else: ?>
                                Зарегистрируйтесь для просмотра
                            <?php endif; ?>
                        <?php else: ?>
                            Нет новости с таким id
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/news/one.blade.php ENDPATH**/ ?>