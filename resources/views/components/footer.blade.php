<div class="dark-grad px-10 flex flex-col">
    <div class="py-10 flex flex-col md:flex-row gap-10 justify-between items-start">

        <div class="flex flex-col gap-4 items-start">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Aim Yapay Zeka Kulübü Logo" class="w-20">

            <p class="text-my-gray-30 text-sm">
                Aim Yapay Zeka Kulübü, yapay zekâ alanında <br> bilgi paylaşımı, proje geliştirme ve iş birliği
            </p>
        </div>

        <div class="flex flex-col gap-2 items-start">
            <p class="text-white font-semibold">
                Hızlı Erişim
            </p>
            {{-- <a href="{{ route('blog') }}"
                class="py-[6px] px-2 flex justify-center items-center text-my-gray-30 font-medium text-sm hover:text-white transition duration-150 cursor-pointer">
                Makaleler
            </a> --}}
            <a href="{{ route('about') }}"
                class="py-[6px] px-2 flex justify-center items-center text-my-gray-30 font-medium text-sm hover:text-white transition duration-150 cursor-pointer">
                Hakkımızda
            </a>
            <a @if (Route::is('welcome')) data-target="contactSection" @else href="{{ route('welcome') }}#contactSection" @endif
                class="py-[6px] px-2 flex justify-center items-center text-my-gray-30 font-medium text-sm hover:text-white transition duration-150 cursor-pointer">
                İletişim
            </a>
            <a @if (Route::is('welcome')) data-target="ourTeam" @else href="{{ route('welcome') }}#ourTeam" @endif
                class="py-[6px] px-2 flex justify-center items-center text-my-gray-30 font-medium text-sm hover:text-white transition duration-150 cursor-pointer">
                Ekibimiz
            </a>
        </div>

        <div class="flex flex-col items-start gap-6">
            <div class="flex items-center gap-3">
                <span class="flex items-center justify-center light-grad text-secondary rounded-[40px] p-[10px]">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.0695 17.7082H6.73612C3.69446 17.7082 1.94446 15.9582 1.94446 12.9165V7.08317C1.94446 4.0415 3.69446 2.2915 6.73612 2.2915H15.0695C18.1111 2.2915 19.8611 4.0415 19.8611 7.08317V12.9165C19.8611 15.9582 18.1111 17.7082 15.0695 17.7082ZM6.73612 3.5415C4.35279 3.5415 3.19446 4.69984 3.19446 7.08317V12.9165C3.19446 15.2998 4.35279 16.4582 6.73612 16.4582H15.0695C17.4528 16.4582 18.6111 15.2998 18.6111 12.9165V7.08317C18.6111 4.69984 17.4528 3.5415 15.0695 3.5415H6.73612Z"
                            fill="currentColor" />
                        <path
                            d="M10.9027 10.725C10.2027 10.725 9.49436 10.5083 8.95269 10.0666L6.34435 7.98331C6.07769 7.76664 6.02769 7.37497 6.24436 7.10831C6.46102 6.84164 6.85269 6.79164 7.11936 7.00831L9.72768 9.09164C10.361 9.59998 11.436 9.59998 12.0693 9.09164L14.6777 7.00831C14.9444 6.79164 15.3444 6.83331 15.5527 7.10831C15.7694 7.37497 15.7277 7.77498 15.4527 7.98331L12.8444 10.0666C12.311 10.5083 11.6027 10.725 10.9027 10.725Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <div class="flex flex-col items-start">
                    <p class="text-sm font-medium text-my-gray-20">
                        Bize e-posta gönderin
                    </p>
                    <p class="font-semibold text-white">
                        info@aimyapayzeka.com
                    </p>
                </div>
            </div>

            <p class="text-my-gray-30 text-sm">
                Sütlüce, Karaağaç Cd 12/A, <br> Beyoğlu/İstanbul
            </p>

            <div class="flex items-center">
                <img src="{{ asset('assets/images/FSMVÜ Seal Logo.png') }}" class="w-20" alt="">
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="flex justify-between gap-4 items-center py-4">
        <div class="flex gap-2">
            <a href="https://www.instagram.com/aimfsmvu" target="_blank" class="light-grad text-secondary p-[10px] rounded-lg">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.8567 1.6665C11.7942 1.669 12.2701 1.674 12.6809 1.68567L12.8426 1.6915C13.0292 1.69817 13.2134 1.7065 13.4359 1.7165C14.3226 1.75817 14.9276 1.89817 15.4584 2.104C16.0084 2.31567 16.4717 2.60234 16.9351 3.06484C17.3588 3.48142 17.6867 3.98533 17.8959 4.5415C18.1017 5.07234 18.2417 5.67734 18.2834 6.56484C18.2934 6.7865 18.3017 6.97067 18.3084 7.15817L18.3134 7.31984C18.3259 7.72984 18.3309 8.20567 18.3326 9.14317L18.3334 9.76484V10.8565C18.3355 11.4643 18.3291 12.0722 18.3142 12.6798L18.3092 12.8415C18.3026 13.029 18.2942 13.2132 18.2842 13.4348C18.2426 14.3223 18.1009 14.9265 17.8959 15.4582C17.6873 16.0147 17.3593 16.5187 16.9351 16.9348C16.5184 17.3584 16.0145 17.6863 15.4584 17.8957C14.9276 18.1015 14.3226 18.2415 13.4359 18.2832C13.2382 18.2925 13.0404 18.3008 12.8426 18.3082L12.6809 18.3132C12.2701 18.3248 11.7942 18.3307 10.8567 18.3323L10.2351 18.3332H9.14424C8.53613 18.3353 7.92801 18.3289 7.32007 18.314L7.15841 18.309C6.96058 18.3015 6.7628 18.2929 6.56507 18.2832C5.67841 18.2415 5.07341 18.1015 4.54174 17.8957C3.98563 17.6868 3.48192 17.3589 3.06591 16.9348C2.64178 16.5184 2.31359 16.0145 2.10424 15.4582C1.89841 14.9273 1.75841 14.3223 1.71674 13.4348C1.70746 13.2371 1.69912 13.0393 1.69174 12.8415L1.68757 12.6798C1.67222 12.0722 1.66527 11.4643 1.66674 10.8565V9.14317C1.66441 8.53534 1.67053 7.9275 1.68507 7.31984L1.69091 7.15817C1.69757 6.97067 1.70591 6.7865 1.71591 6.56484C1.75757 5.67734 1.89757 5.07317 2.10341 4.5415C2.31267 3.98476 2.64151 3.48069 3.06674 3.06484C3.48265 2.64107 3.98603 2.31316 4.54174 2.104C5.07341 1.89817 5.67757 1.75817 6.56507 1.7165C6.78674 1.7065 6.97174 1.69817 7.15841 1.6915L7.32007 1.6865C7.92773 1.6717 8.53557 1.66531 9.14341 1.66734L10.8567 1.6665ZM10.0001 5.83317C8.89501 5.83317 7.8352 6.27216 7.0538 7.05356C6.27239 7.83496 5.83341 8.89477 5.83341 9.99984C5.83341 11.1049 6.27239 12.1647 7.0538 12.9461C7.8352 13.7275 8.89501 14.1665 10.0001 14.1665C11.1051 14.1665 12.165 13.7275 12.9464 12.9461C13.7278 12.1647 14.1667 11.1049 14.1667 9.99984C14.1667 8.89477 13.7278 7.83496 12.9464 7.05356C12.165 6.27216 11.1051 5.83317 10.0001 5.83317ZM10.0001 7.49984C10.3284 7.49978 10.6535 7.56439 10.9568 7.68998C11.2601 7.81557 11.5358 7.99967 11.768 8.23178C12.0001 8.46388 12.1843 8.73945 12.31 9.04274C12.4357 9.34604 12.5004 9.67112 12.5005 9.99942C12.5005 10.3277 12.4359 10.6528 12.3103 10.9562C12.1848 11.2595 12.0007 11.5351 11.7686 11.7673C11.5364 11.9995 11.2609 12.1837 10.9576 12.3094C10.6543 12.4351 10.3292 12.4998 10.0009 12.4998C9.33787 12.4998 8.70198 12.2364 8.23314 11.7676C7.7643 11.2988 7.50091 10.6629 7.50091 9.99984C7.50091 9.3368 7.7643 8.70091 8.23314 8.23207C8.70198 7.76323 9.33787 7.49984 10.0009 7.49984M14.3759 4.58317C14.0996 4.58317 13.8347 4.69292 13.6393 4.88827C13.444 5.08362 13.3342 5.34857 13.3342 5.62484C13.3342 5.9011 13.444 6.16606 13.6393 6.36141C13.8347 6.55676 14.0996 6.6665 14.3759 6.6665C14.6522 6.6665 14.9171 6.55676 15.1125 6.36141C15.3078 6.16606 15.4176 5.9011 15.4176 5.62484C15.4176 5.34857 15.3078 5.08362 15.1125 4.88827C14.9171 4.69292 14.6522 4.58317 14.3759 4.58317Z"
                        fill="currentColor" />
                </svg>
            </a>

            <a href="https://www.linkedin.com/company/aimyapayzekakulubu" target="_blank"
                class="light-grad text-secondary p-[10px] rounded-lg">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_49_5952)">
                        <path
                            d="M19.9951 19.9999V19.999H20.0001V12.664C20.0001 9.07569 19.2276 6.31152 15.0326 6.31152C13.0159 6.31152 11.6626 7.41819 11.1101 8.46736H11.0517V6.64652H7.07422V19.999H11.2159V13.3874C11.2159 11.6465 11.5459 9.96319 13.7017 9.96319C15.8259 9.96319 15.8576 11.9499 15.8576 13.499V19.9999H19.9951Z"
                            fill="currentColor" />
                        <path d="M0.330078 6.64746H4.47675V20H0.330078V6.64746Z" fill="currentColor" />
                        <path
                            d="M2.40167 0C1.07583 0 0 1.07583 0 2.40167C0 3.7275 1.07583 4.82583 2.40167 4.82583C3.7275 4.82583 4.80333 3.7275 4.80333 2.40167C4.8025 1.07583 3.72667 0 2.40167 0V0Z"
                            fill="currentColor" />
                    </g>
                    <defs>
                        <clipPath id="clip0_49_5952">
                            <rect width="20" height="20" fill="currentColor" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a href="https://youtube.com/@aimyapayzekakulubu" target="_blank" class="light-grad text-secondary p-[10px] rounded-lg">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17 4H7C4 4 2 6 2 9V15C2 18 4 20 7 20H17C20 20 22 18 22 15V9C22 6 20 4 17 4ZM13.89 13.03L11.42 14.51C10.42 15.11 9.59998 14.65 9.59998 13.48V10.51C9.59998 9.34001 10.42 8.88001 11.42 9.48001L13.89 10.96C14.84 11.54 14.84 12.46 13.89 13.03Z"
                        fill="currentColor" />
                </svg>
            </a>

            {{-- <a href="https://nsosyal.com/@aimfsmvu" class="light-grad text-secondary p-[10px] rounded-lg">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_49_5952)">
                        <path
                            d="M19.9951 19.9999V19.999H20.0001V12.664C20.0001 9.07569 19.2276 6.31152 15.0326 6.31152C13.0159 6.31152 11.6626 7.41819 11.1101 8.46736H11.0517V6.64652H7.07422V19.999H11.2159V13.3874C11.2159 11.6465 11.5459 9.96319 13.7017 9.96319C15.8259 9.96319 15.8576 11.9499 15.8576 13.499V19.9999H19.9951Z"
                            fill="currentColor" />
                        <path d="M0.330078 6.64746H4.47675V20H0.330078V6.64746Z" fill="currentColor" />
                        <path
                            d="M2.40167 0C1.07583 0 0 1.07583 0 2.40167C0 3.7275 1.07583 4.82583 2.40167 4.82583C3.7275 4.82583 4.80333 3.7275 4.80333 2.40167C4.8025 1.07583 3.72667 0 2.40167 0V0Z"
                            fill="currentColor" />
                    </g>
                    <defs>
                        <clipPath id="clip0_49_5952">
                            <rect width="20" height="20" fill="currentColor" />
                        </clipPath>
                    </defs>
                </svg>
            </a> --}}
        </div>
        <p class="text-white text-sm">
            © {{ date('Y') }} - Aim Yapay Zeka Kulübü. Tüm hakları saklıdır.
        </p>
    </div>
</div>
