@php

    $className = [isset($class), isset($block) ? 'w-full' : ''];

    array_push($className, 'btn');
    if (isset($size) == 'lg') {
        array_push($className, 'py-3.5 px-7');
    }

    if (isset($size) == 'md') {
        array_push($className, 'py-2.5 px-5');
    }

    if (isset($size) == 'sm') {
        array_push($className, 'py-1.5 px-5');
    }

    if (isset($style) == 'default') {
        array_push($className, "btn__$color");
    }

    if (isset($style) == 'outline') {
        array_push($className, "btn__outline__$color");
    }

    if (isset($style) == 'gradient') {
        array_push($className, "btn__gradient__$color");
    }

    if (isset($disabled)) {
        array_push($className, 'cursor-not-allowed');
    }

    // tag
    if (isset($link) && $link != '') {
        $tag = 'a';
    } elseif ($badge) {
        $tag = 'span';
        array_push($className, 'cursor-default');
    } else {
        $tag = 'button';
    }

    if ($rounded) {
        array_push($className, 'btn__rounded');
    }

    if ($icon && $icon != '') {
        if (!$fontawesome) {
            array_push($className, 'inline-flex items-center');
        }
    }

@endphp
<{{ $tag }}
    @if ($link && $link != '') href="{{ $link }}"
    @else
        type="{{ $type }}" @endif
    class="{{ join(' ', $className) }}" @if ($id) id="{{ $id }}" @endif
    @if ($disabled) disabled @endif
    @isset($onclick) onclick="{{ $onclick }}" @endisset
    @if ($target) data-modal-toggle="{{ $target }}" @endif>

    @if ($icon && $icon != '' && $iconRight == '')
        @if ($fontawesome)
            <i class="{{ $styleIcon }} fa-{{ $icon }} {{ $label ? 'mr-2' : '' }}"></i>
        @else
            <i data-feather="{{ $icon }}" class="w-4 h-4"></i>
        @endif
    @endif

    {{ Str::headline($label) }}

    @if ($icon && $icon != '' && $iconRight != '')
        @if ($fontawesome)
            <i class="{{ $styleIcon }} fa-{{ $icon }} {{ $label ? 'ml-2' : '' }}"></i>
        @else
            <i data-feather="{{ $icon }}" class="w-4 h-4 ml-2"></i>
        @endif
    @endif

    </{{ $tag }}>
