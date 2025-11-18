<nav id="navbar" class="px-4 lg:px-8 2xl:px-10 w-full absolute z-10">
    <div class="flex justify-between items-center py-6">
        <a href="{{ route('welcome') }}" class="w-[162px]">
            <img src="{{ asset('assets/images/logo.png') }}" class="h-[80px] md:h-[100px]" alt="Aim yapay zeka logo">
        </a>
        <div class="hidden lg:flex justify-between items-center gap-6 font-medium">
            {{-- <a href="{{ route('blog') }}"
                class="flex justify-center items-center p-2 text-white/60 hover:text-white transition-all duration-200">
                Makaleler
            </a> --}}
            <a href="{{ route('about') }}"
                class="flex justify-center items-center p-2 text-white/60 hover:text-white transition-all duration-200">
                Hakkımızda
            </a>
            <a @if (Route::is('welcome')) data-target="contactSection" @else href="{{ route('welcome') }}#contactSection" @endif
                class="flex justify-center items-center p-2 text-white/60 hover:text-white transition-all duration-200 cursor-pointer">
                İletişim
            </a>
            <a @if (Route::is('welcome')) data-target="ourTeam" @else href="{{ route('welcome') }}#ourTeam" @endif
                class="flex justify-center items-center p-2 text-white/60 hover:text-white transition-all duration-200 cursor-pointer">
                Ekibimiz
            </a>
        </div>
        <div class="w-fit">
            <div class="block lg:hidden">
                <button id="navbar-burger">
                    <svg width="36" height="36" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42 15.5H6C5.18 15.5 4.5 14.82 4.5 14C4.5 13.18 5.18 12.5 6 12.5H42C42.82 12.5 43.5 13.18 43.5 14C43.5 14.82 42.82 15.5 42 15.5Z"
                            fill="white" />
                        <path
                            d="M42 25.5H6C5.18 25.5 4.5 24.82 4.5 24C4.5 23.18 5.18 22.5 6 22.5H42C42.82 22.5 43.5 23.18 43.5 24C43.5 24.82 42.82 25.5 42 25.5Z"
                            fill="white" />
                        <path
                            d="M42 35.5H6C5.18 35.5 4.5 34.82 4.5 34C4.5 33.18 5.18 32.5 6 32.5H42C42.82 32.5 43.5 33.18 43.5 34C43.5 34.82 42.82 35.5 42 35.5Z"
                            fill="white" />
                    </svg>
                </button>
            </div>
            <a @if (Route::is('welcome')) data-target="contactSection" @else href="{{ route('welcome') }}#contactSection" @endif
                class="button-ghost hidden lg:inline-flex cursor-pointer">
                Bize Ulaşın
                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.0417 18.9583C14.1 18.9583 13.1084 18.7333 12.0834 18.3C11.0834 17.875 10.075 17.2916 9.09169 16.5833C8.11669 15.8666 7.17502 15.0666 6.28335 14.1916C5.40002 13.3 4.60002 12.3583 3.89169 11.3916C3.17502 10.3916 2.60002 9.39163 2.19169 8.42496C1.75835 7.39163 1.54169 6.39163 1.54169 5.44996C1.54169 4.79996 1.65835 4.18329 1.88335 3.60829C2.11669 3.01663 2.49169 2.46663 3.00002 1.99163C3.64169 1.35829 4.37502 1.04163 5.15835 1.04163C5.48335 1.04163 5.81669 1.11663 6.10002 1.24996C6.42502 1.39996 6.70002 1.62496 6.90002 1.92496L8.83335 4.64996C9.00835 4.89163 9.14169 5.12496 9.23335 5.35829C9.34169 5.60829 9.40002 5.85829 9.40002 6.09996C9.40002 6.41663 9.30835 6.72496 9.13335 7.01663C9.00835 7.24163 8.81669 7.48329 8.57502 7.72496L8.00835 8.31663C8.01669 8.34163 8.02502 8.35829 8.03335 8.37496C8.13335 8.54996 8.33335 8.84996 8.71669 9.29996C9.12502 9.76663 9.50835 10.1916 9.89169 10.5833C10.3834 11.0666 10.7917 11.45 11.175 11.7666C11.65 12.1666 11.9584 12.3666 12.1417 12.4583L12.125 12.5L12.7334 11.9C12.9917 11.6416 13.2417 11.45 13.4834 11.325C13.9417 11.0416 14.525 10.9916 15.1084 11.2333C15.325 11.325 15.5584 11.45 15.8084 11.625L18.575 13.5916C18.8834 13.8 19.1084 14.0666 19.2417 14.3833C19.3667 14.7 19.425 14.9916 19.425 15.2833C19.425 15.6833 19.3334 16.0833 19.1584 16.4583C18.9834 16.8333 18.7667 17.1583 18.4917 17.4583C18.0167 17.9833 17.5 18.3583 16.9 18.6C16.325 18.8333 15.7 18.9583 15.0417 18.9583ZM5.15835 2.29163C4.70002 2.29163 4.27502 2.49163 3.86669 2.89163C3.48335 3.24996 3.21669 3.64163 3.05002 4.06663C2.87502 4.49996 2.79169 4.95829 2.79169 5.44996C2.79169 6.22496 2.97502 7.06663 3.34169 7.93329C3.71669 8.81663 4.24169 9.73329 4.90835 10.65C5.57502 11.5666 6.33335 12.4583 7.16669 13.3C8.00002 14.125 8.90002 14.8916 9.82502 15.5666C10.725 16.225 11.65 16.7583 12.5667 17.1416C13.9917 17.75 15.325 17.8916 16.425 17.4333C16.85 17.2583 17.225 16.9916 17.5667 16.6083C17.7584 16.4 17.9084 16.175 18.0334 15.9083C18.1334 15.7 18.1834 15.4833 18.1834 15.2666C18.1834 15.1333 18.1584 15 18.0917 14.85C18.0667 14.8 18.0167 14.7083 17.8584 14.6L15.0917 12.6333C14.925 12.5166 14.775 12.4333 14.6334 12.375C14.45 12.3 14.375 12.225 14.0917 12.4C13.925 12.4833 13.775 12.6083 13.6084 12.775L12.975 13.4C12.65 13.7166 12.15 13.7916 11.7667 13.65L11.5417 13.55C11.2 13.3666 10.8 13.0833 10.3584 12.7083C9.95835 12.3666 9.52502 11.9666 9.00002 11.45C8.59169 11.0333 8.18335 10.5916 7.75835 10.1C7.36669 9.64163 7.08335 9.24996 6.90835 8.92496L6.80835 8.67496C6.75835 8.48329 6.74169 8.37496 6.74169 8.25829C6.74169 7.95829 6.85002 7.69163 7.05835 7.48329L7.68335 6.83329C7.85002 6.66663 7.97502 6.50829 8.05835 6.36663C8.12502 6.25829 8.15002 6.16663 8.15002 6.08329C8.15002 6.01663 8.12502 5.91663 8.08335 5.81663C8.02502 5.68329 7.93335 5.53329 7.81669 5.37496L5.88335 2.64163C5.80002 2.52496 5.70002 2.44163 5.57502 2.38329C5.44169 2.32496 5.30002 2.29163 5.15835 2.29163ZM12.125 12.5083L11.9917 13.075L12.2167 12.4916C12.175 12.4833 12.1417 12.4916 12.125 12.5083Z"
                        fill="currentColor" />
                    <path
                        d="M15.9167 8.12504C15.575 8.12504 15.2917 7.84171 15.2917 7.50004C15.2917 7.20004 14.9917 6.57504 14.4917 6.04171C14 5.51671 13.4583 5.20837 13 5.20837C12.6583 5.20837 12.375 4.92504 12.375 4.58337C12.375 4.24171 12.6583 3.95837 13 3.95837C13.8083 3.95837 14.6583 4.39171 15.4 5.18337C16.0917 5.92504 16.5417 6.83337 16.5417 7.50004C16.5417 7.84171 16.2583 8.12504 15.9167 8.12504Z"
                        fill="currentColor" />
                    <path
                        d="M18.8333 8.12496C18.4917 8.12496 18.2083 7.84163 18.2083 7.49996C18.2083 4.62496 15.875 2.29163 13 2.29163C12.6583 2.29163 12.375 2.00829 12.375 1.66663C12.375 1.32496 12.6583 1.04163 13 1.04163C16.5583 1.04163 19.4583 3.94163 19.4583 7.49996C19.4583 7.84163 19.175 8.12496 18.8333 8.12496Z"
                        fill="currentColor" />
                </svg>
            </a>
        </div>
    </div>
</nav>

<!-- Mobile Dropdown -->
<div
    class="xl:hidden mobile-header fixed top-0 w-64 shadow-lg h-full bg-white z-[60] transition-transform -translate-x-full xl:translate-x-0">
    <div class="h-[64px] flex justify-start pl-6 pr-2 pt-6 items-center">
        <a href="/" class="flex items-center gap-2">
            <span>
                <img src="{{ asset('assets/images/logo.png') }}" class="h-[75px]" alt="Aim yapay zeka logo" />
            </span>
        </a>
    </div>

    <div class="px-3 py-16 text-gray-700">
        <ul class="space-y-2 font-medium">
            {{-- <li>
                <a href="{{ route('blog') }}"
                    class="mobile-nav-links flex items-center gap-3 w-full p-2 rounded-lg focus:bg-gray-200 cursor-pointer">
                    <span class="ms-3 font-semibold">Makaleler</span>
                </a>
            </li> --}}
            <li>
                <a href="{{ route('about') }}"
                    class="mobile-nav-links flex items-center gap-3 w-full p-2 rounded-lg focus:bg-gray-200 cursor-pointer">
                    <span class="ms-3 font-semibold">Hakkımızda</span>
                </a>
            </li>
            <li>
                <a @if (Route::is('welcome')) data-target="contactSection" @else href="{{ route('welcome') }}#contactSection" @endif
                    class="mobile-nav-links flex items-center gap-3 w-full p-2 rounded-lg focus:bg-gray-200 cursor-pointer">
                    <span class="ms-3 font-semibold">İletişim</span>
                </a>
            </li>
            <li>
                <a @if (Route::is('welcome')) data-target="ourTeam" @else href="{{ route('welcome') }}#ourTeam" @endif
                    class="mobile-nav-links flex items-center gap-3 w-full p-2 rounded-lg focus:bg-gray-200 cursor-pointer">
                    <span class="ms-3 font-semibold">Ekibimiz</span>
                </a>
            </li>
        </ul>
    </div>
</div>
