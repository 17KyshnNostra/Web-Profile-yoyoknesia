<!--Jasa Dokumentasi-->
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['layanans' => []]));

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

foreach (array_filter((['layanans' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<section class="bg-gray-100 min-h-screen">
    <div class="max-w-5xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <img src="<?php echo e(asset('img/gambar2.jpg')); ?>" alt="polisi"
                        class="rounded-xl shadow-md object-cover w-full h-60 transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                </div>
            </div>
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-blue-600 leading-tight">
                    Jasa Video<br>
                    <span class="text-black">Wedding</span>
                    <span class="text-black">& Engagagement</span>
                </h1>
                <p class="mt-6 text-gray-700 text-lg">
                    Kami menyediakan jasa video profesional untuk mendokumentasikan momen pernikahan dan pertunangan
                    Anda. Dengan sentuhan sinematik dan storytelling, setiap emosi dan detail akan diabadikan dengan
                    penuh makna dan keindahan.
                </p>
            </div>
        </div>
    </div>

    <!-- Cards -->
    <div class="max-w-5xl mx-auto px-6 py-12">
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php $__empty_1 = true; $__currentLoopData = $layanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col justify-between border">
                    <div>
                        <h3 class="text-lg font-bold mb-2"><?php echo e($layanan->nama); ?></h3>
                        <div class="text-sm text-gray-600 mb-4 richeditor-content">
                            <?php echo $layanan->deskripsi; ?>

                        </div>
                        <?php if($layanan->icon): ?>
                            <img src="<?php echo e(asset('storage/' . $layanan->icon)); ?>" alt="<?php echo e($layanan->nama); ?>"
                                class="w-16 h-16 object-contain mb-4 rounded" />
                        <?php endif; ?>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg font-semibold text-gray-900 mb-2">
                            Mulai dari <span class="text-blue-600"><?php echo e($layanan->harga_rp); ?></span>
                        </p>
                        <a href="<?php echo e(route('booking.form', ['layanan' => $layanan->id])); ?>"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full text-center block">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-4 text-center text-gray-400">Belum ada layanan tersedia.</div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\A C E R\OneDrive\Documents\MPTI\Yoyoknesia-Yoyonesia-Filament\resources\views/components/home/services-dokumentasi.blade.php ENDPATH**/ ?>