@extends('layouts.app')
@section('content')
    <div class="w-full flex justify-center items-center relative h-[300px] md:h-[350px] bg-cover bg-center"
        style="background-image: url({{ asset('assets/images/hero-blog.webp') }})">
        <div class="absolute w-full h-full bg-black/80 z-[1]"></div>
        <div class="absolute w-full h-full flex flex-col items-center justify-end pb-20 px-4 sm:px-16 md:px-32 z-[2]">
            <h1 class="roc_head text-white/90 text-5xl text-center">
                Makaleler
            </h1>
        </div>
    </div>
    <section class="py-6 sm:py-12">
        <div class="container p-6 mx-auto space-y-8">
            <div class="flex flex-col items-center justify-center gap-4">
                <h3 class="text-base uppercase roc_title">
                    Güncel Makalelerimize <span class="text-[#a00371]">Ulaşın</span>
                </h3>
                <hr class="border border-[#a00371] px-6">
            </div>
            <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4 pt-6">
                @foreach ($blogs as $blog)
                    <article class="flex flex-col shadow-md">
                        <a href="{{ route('blog-detail', ['blog' => $blog]) }}" aria-label="{{ $blog->title }}">
                            <img alt="" class="object-cover w-full h-52"
                                src="{{ asset('storage/' . $blog->image) }}">
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">
                                {{ Str::limit($blog->title, 60, '...') }}
                            </h3>
                            <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs">
                                <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
