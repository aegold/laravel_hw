<h2>Kiểm tra tuổi</h2>

<form method="POST" action="/check-age">
    <?php echo csrf_field(); ?>
    <input type="number" name="age" placeholder="Nhập tuổi">
    <button>Kiểm tra</button>
</form>
<?php /**PATH C:\laragon\www\test\resources\views/age.blade.php ENDPATH**/ ?>