@if ($errors->any())
    <div class="my-2 space-y-3 transition-all duration-200">
        @foreach ($errors->all() as $error)
            <p class="text-white font-semibold text-sm bg-red-400 p-2 rounded-lg errors">
                {{ $error }}
            </p>
        @endforeach
    </div>
@endif
