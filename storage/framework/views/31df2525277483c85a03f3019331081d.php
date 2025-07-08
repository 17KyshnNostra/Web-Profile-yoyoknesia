<?php
    $ext = pathinfo($getState(), PATHINFO_EXTENSION);
?>

<!--[if BLOCK]><![endif]--><?php if($getState()): ?>
    <!--[if BLOCK]><![endif]--><?php if(in_array($ext, ['mp4', 'webm', 'mov'])): ?>
        <video width="80" height="60" controls>
            <source src="<?php echo e(asset('storage/' . $getState())); ?>">
            Tidak bisa preview video.
        </video>
    <?php else: ?>
        <img src="<?php echo e(asset('storage/' . $getState())); ?>" class="w-20 h-16 object-cover rounded">
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\Users\A C E R\OneDrive\Documents\MPTI\Yoyoknesia-Yoyonesia-Filament\resources\views/filament/components/portofolio-media.blade.php ENDPATH**/ ?>