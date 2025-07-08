@php
    $ext = pathinfo($getState(), PATHINFO_EXTENSION);
@endphp

@if($getState())
    @if(in_array($ext, ['mp4', 'webm', 'mov']))
        <video width="80" height="60" controls>
            <source src="{{ asset('storage/' . $getState()) }}">
            Tidak bisa preview video.
        </video>
    @else
        <img src="{{ asset('storage/' . $getState()) }}" class="w-20 h-16 object-cover rounded">
    @endif
@endif
