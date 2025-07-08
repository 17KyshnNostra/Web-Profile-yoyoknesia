<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Yoyoknesia Indonesia</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png" />

    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">

    <!-- Bootstrap CSS (opsional, jika masih ingin pakai) -->
    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" media="all" />

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/fontawesome/css/all.min.css" />

    <!-- jQuery UI -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/jquery-ui/jquery-ui.min.css" />

    <!-- Modal Video CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/modal-video/modal-video.min.css" />

    <!-- Lightbox CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/lightbox/dist/css/lightbox.min.css" />

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick-theme.css" />

    <!-- Owl Carousel CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/logo-slider.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        .richeditor-content ol {
            list-style-type: decimal;
            margin-left: 20px;
        }

        .richeditor-content ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .richeditor-content h1 {
            font-size: 32px;
        }

        .richeditor-content h2 {
            font-size: 24px;
        }

        .richeditor-content h3 {
            font-size: 18px;
        }
    </style>

</head>

<body class="home">
    <!-- Page Content -->
    <div id="page" class="full-page">
        <?php if (isset($component)) { $__componentOriginal21b90aee62eb729a70bc5150038e88d2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21b90aee62eb729a70bc5150038e88d2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21b90aee62eb729a70bc5150038e88d2)): ?>
<?php $attributes = $__attributesOriginal21b90aee62eb729a70bc5150038e88d2; ?>
<?php unset($__attributesOriginal21b90aee62eb729a70bc5150038e88d2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21b90aee62eb729a70bc5150038e88d2)): ?>
<?php $component = $__componentOriginal21b90aee62eb729a70bc5150038e88d2; ?>
<?php unset($__componentOriginal21b90aee62eb729a70bc5150038e88d2); ?>
<?php endif; ?>

        <main id="content" class="flex flex-col min-h-screen">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php if (isset($component)) { $__componentOriginal3bcc21be352e90c327647659b100c2a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bcc21be352e90c327647659b100c2a9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bcc21be352e90c327647659b100c2a9)): ?>
<?php $attributes = $__attributesOriginal3bcc21be352e90c327647659b100c2a9; ?>
<?php unset($__attributesOriginal3bcc21be352e90c327647659b100c2a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bcc21be352e90c327647659b100c2a9)): ?>
<?php $component = $__componentOriginal3bcc21be352e90c327647659b100c2a9; ?>
<?php unset($__componentOriginal3bcc21be352e90c327647659b100c2a9); ?>
<?php endif; ?>
    </div>

    <script src="<?php echo e(asset('js/logo-slider.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.0/dist/cdn.min.js" defer></script>

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/assets/vendors/bootstrap/js/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="/assets/vendors/jquery-ui/jquery-ui.min.js"></script>

    <!-- Loop Counter -->
    <script src="/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>

    <!-- Counter Up -->
    <script src="/assets/js/jquery.counterup.js"></script>

    <!-- Modal Video -->
    <script src="/assets/vendors/modal-video/jquery-modal-video.min.js"></script>

    <!-- Masonry -->
    <script src="/assets/vendors/masonry/masonry.pkgd.min.js"></script>

    <!-- Lightbox -->
    <script src="/assets/vendors/lightbox/dist/js/lightbox.min.js"></script>

    <!-- Slick Slider -->
    <script src="/assets/vendors/slick/slick.min.js"></script>

    <!-- Slick Nav -->
    <script src="/assets/js/jquery.slicknav.js"></script>

    <!-- Custom Script -->
    <script src="/assets/js/custom.min.js"></script>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
    
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</body>

</html>
<?php /**PATH C:\Users\A C E R\OneDrive\Documents\MPTI\Yoyoknesia-Yoyonesia-Filament\resources\views/layout/app.blade.php ENDPATH**/ ?>