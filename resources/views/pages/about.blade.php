@extends('layouts.app')
@section('content')
    <div class="w-full flex justify-center items-center relative h-[300px] md:h-[350px] bg-cover bg-center"
        style="background-image: url({{ asset('assets/images/hero.jpg') }})">
        <div class="absolute w-full h-full bg-black/80 z-[1]"></div>
        <div class="absolute w-full h-full flex flex-col items-center justify-end pb-20 px-4 sm:px-16 md:px-32 z-[2]">
            <h1 class="roc_head text-white/90 text-5xl text-center">
                Hakkımızda
            </h1>
        </div>
    </div>
    <div>
        <div class="px-4 py-14 md:px-10 flex flex-col gap-14 justify-center items-center">
            <div>
                <div class="text-center">
                    <h6
                        class="font-semibold md:font-bold text-base md:text-[32px] md:leading-[28px] text-[#a00371] text-center mb-2 italic">
                        Biz Kimiz?
                    </h6>
                </div>

                <div class="text-center w-full max-w-[738px]">
                    <p class="text-back-color text-base leading-6 tracking-[0.32px]">
                        Yapay zekâya tutkuyla bağlı, üretmeyi ve öğrenmeyi bir araya getiren bir öğrenci topluluğuyuz.
                        Teoriyi pratiğe dönüştüren projeler, eğitimler ve iş birlikleriyle sürekli gelişmeyi hedefliyoruz.
                        Birlikte çalışarak okulumuzda yenilikçi ve üretken bir yapay zekâ kültürü oluşturuyoruz.
                    </p>
                </div>
            </div>
            <hr class="border border-[#a00371] px-6">
            <div>
                <div class="text-center">
                    <h6
                        class="font-semibold md:font-bold text-base md:text-[32px] md:leading-[28px] text-[#a00371] text-center mb-2 italic">
                        Hayallerimiz
                    </h6>
                </div>
                <div class="text-center w-full max-w-[738px]">
                    <p class="text-back-color text-base leading-6 tracking-[0.32px]">
                        Yapay zekâ alanında sürdürülebilir, ilham veren bir ekol kurmak istiyoruz.

                        Disiplinler arası iş birlikleriyle fark yaratan projeler üretip geleceğin teknolojisine katkı
                        sunmayı amaçlıyoruz. Eğitim, inovasyon ve iş dünyası arasında köprüler kurarak geleceğe iz bırakan
                        bir topluluk olmayı hayal ediyoruz.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
@endsection
