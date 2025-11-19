<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 w-64 bg-white drop-shadow-md h-screen transition-transform -translate-x-full md:translate-x-0"
    aria-label="Sidebar">
    <div class="h-[64px] flex justify-center px-6 my-2 items-center">
        <a href="{{ route('welcome') }}" class="flex items-center justify-center gap-2">
            <img class="object-cover h-[70px]" src="{{ asset('assets/images/logo.png') }}" alt="">
            <span class="text-lg font-semibold poppins">ADMİN PANEL</span>
        </a>
    </div>
    <div class="h-[calc(100vh-70px)] px-3 pb-4 pt-8 overflow-y-auto text-gray-700">
        <ul class="space-y-2 font-normal">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-1.5 p-2 rounded-lg hover:bg-gray-100 group {{ Route::is('admin.dashboard') ? 'side_link_active' : '' }}">
                    <svg class="side-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6H14C16 6 16 5 16 4C16 2 15 2 14 2H10C9 2 8 2 8 4C8 6 9 6 10 6Z"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M16 4.02002C19.33 4.20002 21 5.43002 21 10V16C21 20 20 22 15 22H9C4 22 3 20 3 16V10C3 5.44002 4.67 4.20002 8 4.02002"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M11.127 15.4688C11.1309 15.1055 11.1621 14.7988 11.2207 14.5488C11.2793 14.2949 11.377 14.0664 11.5137 13.8633C11.6504 13.6602 11.834 13.4473 12.0645 13.2246C12.2441 13.0527 12.4062 12.8906 12.5508 12.7383C12.6953 12.5859 12.8105 12.4258 12.8965 12.2578C12.9824 12.0898 13.0254 11.8965 13.0254 11.6777C13.0254 11.3184 12.9355 11.041 12.7559 10.8457C12.5762 10.6504 12.3145 10.5527 11.9707 10.5527C11.6895 10.5527 11.4355 10.6387 11.209 10.8105C10.9824 10.9785 10.8672 11.25 10.8633 11.625H9.41016C9.41797 11.1211 9.53516 10.7012 9.76172 10.3652C9.98828 10.0293 10.293 9.77734 10.6758 9.60938C11.0625 9.4375 11.4941 9.35156 11.9707 9.35156C12.7598 9.35156 13.375 9.55078 13.8164 9.94922C14.2578 10.3438 14.4785 10.9004 14.4785 11.6191C14.4785 11.9668 14.4102 12.2773 14.2734 12.5508C14.1367 12.8242 13.957 13.082 13.7344 13.3242C13.5156 13.5625 13.2793 13.8008 13.0254 14.0391C12.8066 14.2344 12.6602 14.4473 12.5859 14.6777C12.5117 14.9082 12.4727 15.1719 12.4688 15.4688H11.127ZM11.0098 17.2852C11.0098 17.0664 11.082 16.8809 11.2266 16.7285C11.375 16.5762 11.5781 16.5 11.8359 16.5C12.0938 16.5 12.2949 16.5762 12.4395 16.7285C12.5879 16.8809 12.6621 17.0664 12.6621 17.2852C12.6621 17.5078 12.5879 17.6934 12.4395 17.8418C12.2949 17.9902 12.0938 18.0645 11.8359 18.0645C11.5781 18.0645 11.375 17.9902 11.2266 17.8418C11.082 17.6934 11.0098 17.5078 11.0098 17.2852Z"
                            fill="currentColor" />
                    </svg>
                    <span class="text-[15px] font-normal">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="sidebarDropdownButton flex items-center gap-1.5 w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-gray-100 {{ Route::is('admin.blog.*') ? 'bg-gray-100' : '' }}"
                    data-collapse-toggle="payroll_drop">
                    <svg class="side-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="currentColor"
                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="flex-1 text-left rtl:text-right whitespace-nowrap text-[15px] font-normal">Blog
                        Ayarları</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="payroll_drop" class="{{ Route::is('admin.blog.*') ? 'block' : 'hidden' }} py-2 space-y-2">
                    <li>
                        <a href="{{ route('admin.blog.index') }}"
                            class="flex items-center gap-2 text-[15px] justify-start w-full p-2 transition duration-75 rounded-lg group hover:bg-gray-100 {{ Route::is('admin.blog.index') ? 'side_link_active' : '' }}">
                            <svg class="w-3 h-3 ml-5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Bloglar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.blog.create.index') }}"
                            class="flex items-center gap-2 text-[15px] justify-start w-full p-2 transition duration-75 rounded-lg group hover:bg-gray-100 {{ Route::is('admin.blog.create.index') ? 'side_link_active' : '' }}">
                            <svg class="w-3 h-3 ml-5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Blog Oluştur
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="sidebarDropdownButton flex items-center gap-1.5 w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-gray-100 {{ Route::is('admin.old-activities.*') ? 'bg-gray-100' : '' }}"
                    data-collapse-toggle="old_activities_drop">
                    <svg class="side-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.2101 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.8201 15.13 19.2101 15.74Z"
                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.7002 16.25C19.0002 17.33 19.8402 18.17 20.9202 18.47" stroke="currentColor"
                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M3.41016 22C3.41016 18.13 7.26018 15 12.0002 15C13.0402 15 14.0402 15.15 14.9702 15.43"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="flex-1 text-left rtl:text-right whitespace-nowrap text-[15px] font-normal">Etkinlik
                        Ayarları</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="old_activities_drop"
                    class="{{ Route::is('admin.old-activities.*') ? 'block' : 'hidden' }} py-2 space-y-2">
                    <li>
                        <a href="{{ route('admin.old-activities.index') }}"
                            class="flex items-center gap-2 text-[15px] justify-start w-full p-2 transition duration-75 rounded-lg group hover:bg-gray-100 {{ Route::is('admin.old-activities.index') ? 'side_link_active' : '' }}">
                            <svg class="w-3 h-3 ml-5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Geçmiş Etkinlikler
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.old-activities.create.index') }}"
                            class="flex items-center gap-2 text-[15px] justify-start w-full p-2 transition duration-75 rounded-lg group hover:bg-gray-100 {{ Route::is('admin.old-activities.create.index') ? 'side_link_active' : '' }}">
                            <svg class="w-3 h-3 ml-5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Geçmiş Etkinlik Oluştur
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<div id="layout-overlay" class="bg-black/70 fixed w-screen h-screen z-30 hidden"></div>
