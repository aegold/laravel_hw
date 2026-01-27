<?php if(Auth::check()): ?>
    <p>Xin chào <?php echo e(Auth::user()->name); ?></p>

    <form method="POST" action="/auth/logout">
        <?php echo csrf_field(); ?>
        <button>Đăng xuất</button>
    </form>
<?php else: ?>
    <a href="/auth/login">Đăng nhập</a>
    <a href="/auth/register">Đăng ký</a>
<?php endif; ?><?php /**PATH C:\laragon\www\test\resources\views/home.blade.php ENDPATH**/ ?>