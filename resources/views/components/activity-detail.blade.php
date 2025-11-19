<div class="md:py-[100px] py-12 md:mt-12 px-4 md:px-[40px] flex flex-col items-center justify-center relative"
    id="workingAreas">
    <div class="flex flex-col items-center justify-center gap-4">
        <h3 class="text-base uppercase roc_title">
            <span class="text-[#a00371]">Geçmiş</span> Etkinliklerimiz
        </h3>
        <hr class="border border-[#a00371] px-6">
    </div>

    <div class="my-16 flex flex-col gap-32 w-full max-w-xs sm:w-fit sm:max-w-full px-6">

        @foreach ($oldActivities as $oldActivity)
            @if ($loop->odd)
                <div class="flex md:flex-row flex-col-reverse items-center md:items-start gap-10 max-w-5xl">
                    <div class="flex flex-col gap-3">
                        <h3 class="text-xl text-[#a00371] font-semibold roc_head">
                            {{ $oldActivity->title }}
                        </h3>
                        <div class="text-sm text-left poppins max-w-lg">
                            {!! $oldActivity->content !!}
                        </div>
                    </div>
                    <img class="w-full sm:w-[400px] h-[300px] object-cover"
                        src="{{ asset('storage/' . $oldActivity->image) }}" alt="{{ $oldActivity->title }}">
                </div>
            @elseif($loop->even)
                <div class="flex md:flex-row flex-col items-center md:items-start gap-10 max-w-5xl">
                    <img class="w-full sm:w-[400px] h-[300px] object-cover"
                        src="{{ asset('storage/' . $oldActivity->image) }}" alt="{{ $oldActivity->title }}">
                    <div class="flex flex-col gap-3">
                        <h3 class="text-xl text-[#a00371] font-semibold roc_head">
                            {{ $oldActivity->title }}
                        </h3>
                        <div class="text-sm text-left poppins max-w-lg">
                            {!! $oldActivity->content !!}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
</div>
