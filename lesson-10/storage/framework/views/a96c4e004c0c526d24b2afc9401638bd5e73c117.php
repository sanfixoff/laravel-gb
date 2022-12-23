<?php $__env->startSection('title', 'Создание новости'); ?>


<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> <?php if($news->id): ?>
                            Изменить новость
                        <?php else: ?>
                            Добавить новость
                        <?php endif; ?></div>
                    <div class="card-body">
                        <form
                            action="<?php if(!$news->id): ?><?php echo e(route('admin.news.store')); ?><?php else: ?><?php echo e(route('admin.news.update', $news)); ?><?php endif; ?>"
                            method="post">
                            <?php echo csrf_field(); ?>
                            <?php if($news->id): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>
                            <div class="form-group">
                                <label for="newsTitle">Заголовок новости</label>
                                <?php if($errors->has('title')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php $__currentLoopData = $errors->get('title'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" name="title" id="newsTitle" class="form-control"
                                       value="<?php echo e($news->title ?? old('title')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="sourceUrl">Source URL</label>
                                <?php if($errors->has('source_url')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php $__currentLoopData = $errors->get('source_url'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" name="source_url" id="sourceUrl" class="form-control" value="<?php echo e($news->source_url ?? old('source_url')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="newsCategory">Категория новости</label>
                                <?php if($errors->has('category_id')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php $__currentLoopData = $errors->get('category_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <select name="category_id" id="newsCategory" class="form-control">
                                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option <?php if($item['id'] == old('category_id')): ?> selected
                                                <?php endif; ?> value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <option value="0" selected>Нет категории</option>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="newsText">Текст новости</label>
                                <?php if($errors->has('desc')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php $__currentLoopData = $errors->get('desc'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <textarea name="text" id="newsText"
                                          class="form-control"><?php echo e($news->text ?? old('desc')); ?></textarea>
                            </div>

                            <div class="form-check">
                                <?php if($errors->has('is_Private')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php $__currentLoopData = $errors->get('is_Private'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <input <?php if($news->isPrivate == 1 || old('isPrivate') == 1): ?> checked
                                       <?php endif; ?> id="newsPrivate" name="isPrivate"
                                       type="checkbox" value="1" class="form-check-input">
                                <label for="newsPrivate">Приватная</label>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary"
                                       value="<?php if($news->id): ?>Изменить<?php else: ?>Добавить<?php endif; ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel.test\resources\views/admin/create.blade.php ENDPATH**/ ?>