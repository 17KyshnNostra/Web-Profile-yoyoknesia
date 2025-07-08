

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginale8e335c2a136079f846548aef70965bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8e335c2a136079f846548aef70965bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.services.services-hero','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('services.services-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8e335c2a136079f846548aef70965bc)): ?>
<?php $attributes = $__attributesOriginale8e335c2a136079f846548aef70965bc; ?>
<?php unset($__attributesOriginale8e335c2a136079f846548aef70965bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8e335c2a136079f846548aef70965bc)): ?>
<?php $component = $__componentOriginale8e335c2a136079f846548aef70965bc; ?>
<?php unset($__componentOriginale8e335c2a136079f846548aef70965bc); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginaldbd1715b925dd3b6d62b409e42a2055f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbd1715b925dd3b6d62b409e42a2055f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.services-dokumentasi','data' => ['layanans' => $layanans]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.services-dokumentasi'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['layanans' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layanans)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldbd1715b925dd3b6d62b409e42a2055f)): ?>
<?php $attributes = $__attributesOriginaldbd1715b925dd3b6d62b409e42a2055f; ?>
<?php unset($__attributesOriginaldbd1715b925dd3b6d62b409e42a2055f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbd1715b925dd3b6d62b409e42a2055f)): ?>
<?php $component = $__componentOriginaldbd1715b925dd3b6d62b409e42a2055f; ?>
<?php unset($__componentOriginaldbd1715b925dd3b6d62b409e42a2055f); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginaldb13849e583e54092285257e44118968 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldb13849e583e54092285257e44118968 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldb13849e583e54092285257e44118968)): ?>
<?php $attributes = $__attributesOriginaldb13849e583e54092285257e44118968; ?>
<?php unset($__attributesOriginaldb13849e583e54092285257e44118968); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb13849e583e54092285257e44118968)): ?>
<?php $component = $__componentOriginaldb13849e583e54092285257e44118968; ?>
<?php unset($__componentOriginaldb13849e583e54092285257e44118968); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal52d2bb1373ef8c8eacce66fbd040f59f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52d2bb1373ef8c8eacce66fbd040f59f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.services.services-contact','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('services.services-contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52d2bb1373ef8c8eacce66fbd040f59f)): ?>
<?php $attributes = $__attributesOriginal52d2bb1373ef8c8eacce66fbd040f59f; ?>
<?php unset($__attributesOriginal52d2bb1373ef8c8eacce66fbd040f59f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52d2bb1373ef8c8eacce66fbd040f59f)): ?>
<?php $component = $__componentOriginal52d2bb1373ef8c8eacce66fbd040f59f; ?>
<?php unset($__componentOriginal52d2bb1373ef8c8eacce66fbd040f59f); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\A C E R\OneDrive\Documents\MPTI\Yoyoknesia-Yoyonesia-Filament\resources\views/dokumentasi.blade.php ENDPATH**/ ?>