<h2>Đăng nhập</h2>

<form method="POST" action="/auth/login">
    <?php echo csrf_field(); ?>
    <input name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Mật khẩu"><br>
    <button>Đăng nhập</button>
</form>
<?php /**PATH C:\laragon\www\test\resources\views/auth/login.blade.php ENDPATH**/ ?>