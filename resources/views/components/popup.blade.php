@props([
    'id' => $id,
    'width' => '400px',
    'contentHeight' => '',
    'show' => false,
    'overflowHidden' => false,
    'icon' => '',
    'closeButton' => '',
])
<div id="{{ $id }}"
    class="{{ $show == false ? 'hidden' : '' }} fixed top-0 right-0 left-0 h-full max-h-full w-full z-[600] overflow-y-auto overflow-x-hidden md:inset-0 bg-black/80">
    <div class="flex justify-center items-center w-full p-4 md:p-0 h-full max-h-full">
        <div class="relative w-full max-h-full" style="max-width: {{ $width }};">
            <div class="relative rounded-2xl regular-shadow-xs flex flex-col">
                <!-- Modal Head -->
                @if ($closeButton)
                    <div class="ml-auto flex items-center">
                        <button data-modal-hide="{{ $id }}" class="w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g filter="url(#filter0_d_2994_59917)">
                                    <path
                                        d="M11.9991 10.7275L16.4541 6.27246L17.7267 7.54506L13.2717 12.0001L17.7267 16.4551L16.4541 17.7277L11.9991 13.2727L7.54408 17.7277L6.27148 16.4551L10.7265 12.0001L6.27148 7.54506L7.54408 6.27246L11.9991 10.7275Z"
                                        fill="#525866" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_2994_59917" x="-2" y="-1" width="28" height="28"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="1" />
                                        <feGaussianBlur stdDeviation="1" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0.0392157 0 0 0 0 0.0509804 0 0 0 0 0.0784314 0 0 0 0.03 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_2994_59917" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2994_59917"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </button>
                    </div>
                @endif
                <!-- Modal Content -->
                <div class=""
                    style="max-height: {{ $contentHeight }}; {{ $overflowHidden == false ? 'overflow-y: auto;' : '' }}">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>
</div>
