@php
    $className = [isset($class), 'card-sm'];
    $classHead = [isset($headClass), 'card__head'];
    $classBody = [isset($bodyClass), 'card__body'];
    $classFooter = [isset($footerClass), 'card__footer'];
@endphp
<div class="{{ join(' ', $className) }}" id="{{ $id }}">

    {{-- img --}}
    @if (isset($img) != '')
        {{ $img }}
    @endif

    {{-- head --}}
    @if (isset($title) != '')
        <div class="{{ join(' ', $classHead) }} " id="{{ isset($headId) }}">
            <h2 class="card__title">{{ Str::headline($title) }}</h2>
            @if (isset($head) != '')
                {{ $head }}
            @endif
        </div>
    @else
        @if (isset($head) != '')
            <div class="{{ join(' ', $classHead) }} " id="{{ $headId }}">
                @if ($head != '')
                    {{ $head }}
                @endif
            </div>
        @endif
    @endif

    {{-- body --}}
    @if (isset($body) != '')
        <div class="{{ join(' ', $classBody) }} " id="{{ isset($bodyId) }}">
            {{ $body }}
        </div>
    @endif

    {{-- footer --}}
    @if (isset($footer) != '')
        <div class="{{ join(' ', $classFooter) }} " id="{{ isset($footerId) }}">
            {{ $footer }}
        </div>
    @endif
</div>
