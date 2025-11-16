@php
    $class = '';
    if (isset($name) && $errors->has($name)) {
        $className = [
            $class,
            'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-rose-600 appearance-none focus:outline-none focus:ring-0 focus:border-rose-500 peer',
        ];
        $labelClass =
            'text-sm text-rose-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6';
    } else {
        $className = [
            $class,
            'block py-2.5 px-3 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-sky-500',
        ];
        $labelClass =
            'text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-500 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6';
    }

    if (isset($disabled)) {
        array_push($className, 'cursor-not-allowed');
    }

    array_push($className, $class);

@endphp

<div class="form__group relative z-0">
    <label for="{{ $name }}"
        class="{{ $labelClass }}">{{ Str::headline(isset($label) != '' ? $label : $name) }}</label>
    <input type="{{ $type }}" id="{{ isset($id) != '' ? $id : $name }}" name="{{ $name }}"
        class="{{ join(' ', $className) }}" placeholder="" value="{{ old($name) ?? (isset($value) ? $value : '') }}"
        @if (isset($autocomplete)) autocomplete="{{ $autocomplete }}" @endif
        @if (isset($required)) required @endif @if (isset($autofocus)) autofocus @endif
        @if (isset($disabled)) disabled @endif
        @if (isset($onclick)) onclick="{{ $onclick }}" @endif
        @if (isset($onchange)) onchange="{{ $onchange }}" @endif
        @if (isset($onkeyup)) onkeyup="{{ $onkeyup }}" @endif
        @if (isset($readonly)) readonly @endif
        @if (isset($onblur)) onblur="{{ $onblur }}" @endif />
</div>

@error($name)
    <p id="error-{{ $name }}" class="mt-2 text-xs text-rose-600">
        @error($name)
            {{ $message }}
        @enderror
    </p>
@enderror

@if (isset($helpers))
    <p id="error-{{ $name }}" class="mt-2 text-xs text-sky-600">
        {{ Str::headline($helpers) }}
    </p>
@endif
