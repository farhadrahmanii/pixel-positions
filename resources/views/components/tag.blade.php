@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";


    switch ($size) {
        case 'sm':
            $classes .= " text-xs px-2 py-1";
            break;
        case 'base':
        default:
            $classes .= " text-sm px-3 py-2";
            break;
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>