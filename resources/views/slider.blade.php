<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="slider">
    <div class="slide-track">
        @php
            $images = ['slider.png', 'slider.png', 'slider.png', 'slider.png'];
        @endphp

        {{-- Duplikat dua kali untuk efek looping mulus --}}
        @for ($i = 0; $i < 1; $i++)
            @foreach ($images as $img)
                <div class="slide">
                    <img src="{{ asset('img/' . $img) }}" alt="slide image">
                </div>
            @endforeach
        @endfor
        @for ($i = 0; $i < 1; $i++)
            @foreach ($images as $img)
                <div class="slide">
                    <img src="{{ asset('img/' . $img) }}" alt="slide image">
                </div>
            @endforeach
        @endfor
        @for ($i = 0; $i < 1; $i++)
            @foreach ($images as $img)
                <div class="slide">
                    <img src="{{ asset('img/' . $img) }}" alt="slide image">
                </div>
            @endforeach
        @endfor
    </div>
</div>
