<div class="max-w-4xl mx-auto px-4 py-10" x-data="{ 
    open: 'communication',
    toggle(item) {
        this.open = this.open === item ? null : item;
    }
}">
    <h2 class="text-4xl font-bold text-center mb-8 animate-fade-in">
        <span class="text-blue-700">Benefit</span> 
        <span class="text-black-700">Video yang diperoleh</span>
    </h2>

    <!-- Item 1 -->
    <div class="benefit-item bg-white shadow-sm border border-gray-100 p-1">
        <button 
            class="accordion-button flex justify-between items-center w-full p-4" 
            @click="toggle('positioning')"
        >
            <span class="text-lg font-semibold text-left text-gray-800">
                Positioning diferensiasi brand perusahaan Semakin Kuat
            </span>
            <svg 
                :class="open === 'positioning' ? 'rotate' : ''" 
                class="accordion-icon w-6 h-6 text-black-600" 
                fill="none" 
                stroke="currentColor" 
                viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div 
            :class="open === 'positioning' ? 'open' : ''"
            class="accordion-content px-4 pb-4"
        >
            <p class="mb-4 text-gray-700 leading-relaxed">
                Dengan video company profile yang dirancang secara profesional, perusahaan mampu menunjukkan keunikan dan nilai tambah dari produk atau jasanya. Hal ini memperkuat positioning perusahaan di benak pelanggan dan membedakannya dari pesaing.
            </p>
            <ul class="benefit-list list-disc list-inside pl-2 space-y-1">
                <li class="text-gray-600">Memperjelas citra merek di mata audiens</li>
                <li class="text-gray-600">Memberikan kesan profesional dan terpercaya</li>
                <li class="text-gray-600">Meningkatkan daya tarik visual dalam strategi pemasaran</li>
            </ul>
        </div>
    </div>

    <!-- Item 2 -->
    <div class="benefit-item bg-white shadow-sm border border-gray-100 p-1">
        <button 
            class="accordion-button flex justify-between items-center w-full p-4" 
            @click="toggle('communication')"
        >
            <span class="text-lg font-semibold text-left text-gray-800">
                Komunikasi Perusahaan akan terkontrol Secara Baik
            </span>
            <svg 
                :class="open === 'communication' ? 'rotate' : ''" 
                class="accordion-icon w-6 h-6 text-black-600" 
                fill="none" 
                stroke="currentColor" 
                viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div 
            :class="open === 'communication' ? 'open' : ''"
            class="accordion-content px-4 pb-4"
        >
            <p class="text-gray-700 leading-relaxed">
                Para karyawan serta orang yang berada di dalam perusahaan mendapatkan pelajaran dengan bentuk video serta memperlancar komunikasi dalam bentuk video.
            </p>
        </div>
    </div>

    <!-- Item 3 -->
    <div class="benefit-item bg-white shadow-sm border border-gray-100 p-1">
        <button 
            class="accordion-button flex justify-between items-center w-full p-4" 
            @click="toggle('efficiency')"
        >
            <span class="text-lg font-semibold text-left text-gray-800">
                Meningkatkan Efesiensi, efektifitas Marketing Perusahaan
            </span>
            <svg 
                :class="open === 'efficiency' ? 'rotate' : ''" 
                class="accordion-icon w-6 h-6 text-black-600" 
                fill="none" 
                stroke="currentColor" 
                viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div 
            :class="open === 'efficiency' ? 'open' : ''"
            class="accordion-content px-4 pb-4"
        >
            <p class="text-gray-700 leading-relaxed">
                Memberikan informasi kepada masyarakat dengan baik, dikemas dengan cara cinematography menjadikan video mudah difahami oleh masyarakat.
            </p>
        </div>
    </div>
</div>