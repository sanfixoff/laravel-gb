<?php $__env->startSection('title', 'Профиль'); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Изменения профиля</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('admin.updateProfile')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя пользователя</label>

                                <div class="col-md-6">
                                    <?php if($errors->has('name')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($error); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <input id="name" type="text" class="form-control"  name="name" value="<?php echo e(old('name') ?? $user->name); ?>"  autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail </label>

                                <div class="col-md-6">
                                    <?php if($errors->has('email')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($error); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <input id="email" type="text" class="form-control" name="email" value="<?php echo e(old('email') ?? $user->email); ?>">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"> Текущий пароль </label>

                                <div class="col-md-6">
                                    <?php if($errors->has('password')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($error); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <input id="password" type="password" class="form-control" name="password" >


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Новый пароль</label>

                                <div class="col-md-6">
                                    <?php if($errors->has('newPassword')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php $__currentLoopData = $errors->get('newPassword'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($error); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <input id="password-confirm" type="password" class="form-control" name="newPassword" >
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Изменить профиль
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\dz\resources\views/admin/profile.blade.php ENDPATH**/ ?>