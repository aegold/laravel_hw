<h2>Đăng ký</h2>

<?php if($errors->any()): ?>
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="/auth/register">
    <?php echo csrf_field(); ?>
    <input name="name" placeholder="Tên" value="<?php echo e(old('name')); ?>"><br>
    <input name="email" placeholder="Email" value="<?php echo e(old('email')); ?>"><br>
    <input type="password" name="password" placeholder="Mật khẩu"><br>
    <button>Đăng ký</button>
</form>
<?php /**PATH C:\laragon\www\test\resources\views/auth/register.blade.php ENDPATH**/ ?>