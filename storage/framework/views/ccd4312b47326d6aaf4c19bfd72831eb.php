<h2>Danh sách sản phẩm</h2>

<ul>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($p['name']); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<a href="<?php echo e(route('product.add')); ?>">Thêm sản phẩm</a>
<?php /**PATH C:\laragon\www\test\resources\views/product/index.blade.php ENDPATH**/ ?>