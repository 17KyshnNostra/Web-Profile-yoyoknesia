<!--slider-->
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['portofolios' => []]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['portofolios' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<section class="text-black min-h-screen">
    <div class="text-center py-12 px-4">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Naikkan tingkat <span class="text-Black font-bold">Branding Bisnis</span> anda <br>
            bersama kami <span class="text-blue-700 font-bold">#YoyoknesiaInAja</span>
        </h1>
        <p class="mt-4 text-sm max-w-3xl mx-auto">
            Anak Muda Jogja dengan Creativitas serta Team Profesional, kami siap membantu Jasa pembuatan Video Company
            Profile | Web Series Video | Dokumentasi Foto Video untuk Mice Wisata Gathaering | TVC | Kampanye Digital,
            Instagram Tiktok Creator | Video Program CSR | Safety Induction Video | Branding dan Berbagai Strategi
            Digital | Video Clip | Prewedding | Wedding Clip | Sport | Aerial Videography dan lainnya
        </p>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
            <?php $__empty_1 = true; $__currentLoopData = $portofolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="mb-4 break-inside-avoid rounded-2xl overflow-hidden shadow-xl bg-white">
                    <?php
                        $ext = pathinfo($item->media, PATHINFO_EXTENSION);
                    ?>
                    <?php if(in_array($ext, ['mp4', 'webm', 'mov'])): ?>
                        <video controls class="w-full h-auto object-cover">
                            <source src="<?php echo e(asset('storage/'.$item->media)); ?>">
                            Browser tidak mendukung video.
                        </video>
                    <?php else: ?>
                        <img src="<?php echo e(asset('storage/'.$item->media)); ?>" class="w-full h-auto object-cover">
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-center text-gray-500 py-8 col-span-full">Belum ada portofolio.</div>
            <?php endif; ?>
        </div>
    </div>
    
    
</section>
<?php /**PATH C:\Users\A C E R\OneDrive\Documents\MPTI\Yoyoknesia-Yoyonesia-Filament\resources\views/components/home/home-slider.blade.php ENDPATH**/ ?>