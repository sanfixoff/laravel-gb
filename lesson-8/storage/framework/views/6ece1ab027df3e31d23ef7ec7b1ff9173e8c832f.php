<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('home')?' active':''); ?>" href="<?php echo e(route('home')); ?>">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('news.index')?' active':''); ?>" href="<?php echo e(route('news.index')); ?>">Новости</a>
</li>

<li class="nav-item">
    <a class="nav-link <?php echo e(request()->routeIs('news.category.index')?' active':''); ?>"
       href="<?php echo e(route('news.category.index')); ?>">Категории</a>
</li>

<?php if(auth()->guard()->guest()): ?>
<?php else: ?>
    <?php if(Auth::user()->is_admin): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->routeIs('admin.news.index')?' active':''); ?>"
               href="<?php echo e(route('admin.news.index')); ?>">Админка</a>
        </li>
    <?php endif; ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('updateProfile')); ?>">Профиль</a>
    </li>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\dz\resources\views/menu.blade.php ENDPATH**/ ?>