<style>
    table { border-collapse: collapse; }
    td {
        width: 40px;
        height: 40px;
    }
</style>

<table border="1">
<?php for($i = 0; $i < $n; $i++): ?>
    <tr>
    <?php for($j = 0; $j < $n; $j++): ?>
        <td style="background-color: <?php echo e(($i + $j) % 2 == 0 ? '#fff' : '#000'); ?>"></td>
    <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>
<?php /**PATH C:\laragon\www\test\resources\views/banco.blade.php ENDPATH**/ ?>