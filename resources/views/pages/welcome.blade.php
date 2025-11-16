@extends('layouts.app')
@section('content')
    <div class="w-full">
        @include('components.hero-section')
        @include('components.activity-detail')
        @include('components.contact')
        @include('components.our-team')
    </div>
    <x-popup id="popup1" width="900px" closeButton>
        <x-slot name="content">
            <img src="{{ asset('assets/images/afis.png') }}" alt="">
        </x-slot>
    </x-popup>
@endsection
@section('javascript')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            enabled: true,
            spaceBetween: 10,
            navigation: {
                nextEl: '.custom-button-next',
                prevEl: '.custom-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1280: {
                    slidesPerView: 3,
                },
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            if (!localStorage.getItem("popup1_shown")) {
                document.getElementById("popup1").classList.remove("hidden");

                localStorage.setItem("popup1_shown", "true");
            }
        });
    </script>
@endsection
