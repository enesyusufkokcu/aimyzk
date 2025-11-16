@extends('layouts.app')
@section('content')
    <div class="w-full flex justify-center items-center relative h-[300px] dark-grad bg-cover bg-center">
        {{-- <div class="absolute w-full h-full bg-black/80 z-[1]"></div> --}}
        <div class="absolute w-full h-full flex flex-col items-center justify-end pb-20 xl:pb-14 px-4 sm:px-16 md:px-32 z-[2]">
            <h1 class="roc_head text-white/90 text-lg md:text-2xl xl:text-5xl text-center">
                {{ $blog->title }}
            </h1>
        </div>
    </div>
    <div class="px-6 md:px-16 pb-16">
        <!-- component -->
        <div class="max-w-screen-lg mx-auto">
            <main class="mt-10">

                <div class="mb-4 md:mb-0 w-full mx-auto relative">
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}"
                            class="w-full object-cover lg:rounded md:h-[448px]" />
                    @endif
                </div>

                <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                    {!! $blog->content !!}
                </div>
            </main>
        </div>
    </div>
@endsection
