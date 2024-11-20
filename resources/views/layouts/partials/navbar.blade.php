{{-- <div class="h-[70px] bg-navbar py-2 px-6 bg-navbar-bg flex items-center sticky top-0 left-0 z-30" style="border-bottom: 1px solid #cfcece;z-index:10">

    <div class="flex w-full items-center">
        <div class="basis-4/6">
            <div class="flex h-[70px]">
                <div class="basis-1/6 flex justify-center items-center pl-14 sm:pl-2">
                    <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                        <i class="ri-menu-line">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 5H14" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4 12H20" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4 19H20" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </i>
                    </button>
                </div>
                <div class="md:basis-4/6 sm:basis-3/6 sm:hidden md:block h-full">
                    <div class="flex h-full items-center">
                        <input class="md:w-[calc(100%-20px)] sm:w-[calc(100%-200px)] p-3 border border-slate-300 rounded" type="search" placeholder="search here...">
                    </div>
                </div>

                <div class="basis-1/6 sm:basis-2/6 sm:px-2 flex justify-center items-center border border-slate-300 border-r-1 border-l-0 border-t-0 border-b-0">
                    <select class="border border-slate-200 rounded bg-transparent">
                        <option value="attende">Attendee</option>
                        <option value="attende">Organizer</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="basis-2/6">
            <div class="flex h-[70px] justify-center">
                <div class="basis-1/3 w-full h-full flex justify-center items-center border border-slate-300 border-r-1 border-l-0 border-t-0 border-b-0">
                    <img class="sm:hidden md:block" src="{{ asset('assets/icons/eng.png') }}" alt="country">

                    <select onchange="changeLanguage(this.value)" class="border-none bg-transparent">
                        <option {{ session()->has('locale') && session()->get('locale') == 'en' ? 'selected' : '' }} value="en">ENG</option>
                        <option {{ session()->has('locale') && session()->get('locale') == 'bn' ? 'selected' : '' }} value="bn">BN</option>
                    </select>

                </div>
                <div class="basis-1/3 px-1 flex justify-center items-center border border-slate-300 border-r-1 border-l-0 border-t-0 border-b-0">
                    <div class="relative cursor-pointer mr-2 sm:mr-1 toggle-notification-button">
                        <svg width="24" height="24" class="sm:w-5 sm:h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="w-5 h-5 bg-red-500 rounded-full text-center align-middle text-white text-xs absolute -top-2 -end-2">
                            10+
                            <div class="absolute top-0 start-0 rounded-full -z-10 animate-ping bg-red-400 w-full h-full"></div>
                        </div>

                        <!-- Notification box start  !-->
                        <div class="toggle-notification-box absolute w-96 h-96 bg-white border border-slate-300 rounded shadow top-12 right-0 overflow-auto" style="display: none">
                            @for ($i = 1; $i < 10; $i++)
                                <a href="#">
                                    <div class="p-4 flex items-center hover:bg-slate-200">
                                        <img src="{{ asset('assets/images/user.png') }}" alt="profile">
                                        <div class="ml-4">
                                            <p class="text-sm text-gray-500">You have a event on today.</p>
                                            <p class="text-sm text-gray-500">11.00 PM, 2 Aug, 2025</p>
                                        </div>
                                    </div>
                                </a>
                            @endfor

                        </div>
                        <!-- Notification box end  !-->
                    </div>
                    <div class="relative md:ml-3 sm:ml-1 cursor-pointer toggle-email-notification-button">
                        <svg width="24" height="24" class="sm:w-5 sm:h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_4773)">
                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 6L12 13L2 6" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_4773">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="w-5 h-5 bg-red-500 rounded-full text-center text-white text-xs absolute -top-2 -end-2">
                            10+
                            <div class="absolute top-0 start-0 rounded-full -z-10 animate-ping bg-red-400 w-full h-full"></div>
                        </div>

                        <!--Email Notification box start  !-->
                        <div class="toggle-email-notification-box absolute w-96 h-96 bg-white border border-slate-300 rounded shadow top-12 right-0 overflow-auto" style="display: none">
                            @for ($i = 1; $i < 10; $i++)
                                <a href="#">
                                    <div class="p-4 flex items-center hover:bg-slate-200">
                                        <img src="{{ asset('assets/images/user.png') }}" alt="profile">
                                        <div class="ml-4">
                                            <p class="text-sm text-gray-500">You have a event on today.</p>
                                            <p class="text-sm text-gray-500">11.00 PM, 2 Aug, 2025</p>
                                        </div>
                                    </div>
                                </a>
                            @endfor
                        </div>
                        <!-- Email Notification box end  !-->
                    </div>
                </div>

                <!-- User Profile start !-->
                <div class="basis-1/3 sm:flex sm:justify-center cursor-pointer relative h-full w-full">
                    <div class="toggle-menu-button flex justify-center items-center h-full">
                        <img src="{{ asset('assets/images/profile.png') }}" alt="profile" class="ml-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="toggle-menu absolute p-3 shadow-lg w-full rounded bg-white sm:-right-5" style="top: 70px;display:none">
                        <ul>
                            <li class="py-2">
                                <p href="#" class="font-normal text-slate-700">
                                    {{ Auth::user()->name }}
                                </p>
                            </li>
                            <li class="py-2">
                                <a href="#" class="font-normal text-slate-700">Profile</a>
                            </li>
                            <li class="py-2">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-transparent font-normal text-slate-700">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User Profile end !-->
            </div>

        </div>
    </div>
</div> --}}

<div class="navbar sticky">
    <div class="navbar-wrapper">
        <div class="hamberger">
            <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                <i class="ri-menu-line">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 5H14" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 12H20" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 19H20" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </i>
            </button>
        </div>

        <div class="search-input">
            <input class="border border-slate-300 rounded" type="search" placeholder="Search events name or locations">
        </div>

        <div class="user-type">
            <select class="user-type-select border border-slate-200 rounded bg-transparent text-sm font-normal text-center">
                <option selected disabled>-Role-</option>
                <option value="1">Organizer</option>
                <option value="1">Attendee</option>
            </select>
        </div>

        <div class="lang">
            <img class="sm:hidden md:block" src="{{ asset('assets/icons/eng.png') }}" alt="country">

            <select onchange="changeLanguage(this.value)" class="border-none bg-transparent text-center font-normal text-sm">
                <option {{ session()->has('locale') && session()->get('locale') == 'en' ? 'selected' : '' }} value="en">ENG</option>
                <option {{ session()->has('locale') && session()->get('locale') == 'bn' ? 'selected' : '' }} value="bn">BN</option>
            </select>
        </div>

        <div class="notification">
            <div class="relative cursor-pointer mr-2 toggle-notification-button">
                <svg width="24" height="24" class="sm:w-4 sm:h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="md:w-5 md:h-5 w-5 h-5 sm:w-4 sm:h-4 bg-red-500 rounded-full text-center align-middle text-white text-xs absolute -top-2 -end-2">
                    10
                    <div class="absolute top-0 start-0 rounded-full -z-10 animate-ping bg-red-400 w-full h-full"></div>
                </div>

                <!-- Notification box start  !-->
                <div class="toggle-notification-box absolute w-96 h-96 bg-white border border-slate-300 rounded shadow top-12 right-0 sm:-right-10 overflow-auto" style="display: none">
                    @for ($i = 1; $i < 10; $i++)
                        <a href="#">
                            <div class="p-4 flex items-center hover:bg-slate-200">
                                <img src="{{ asset('assets/images/user.png') }}" alt="profile">
                                <div class="ml-4">
                                    <p class="text-sm text-gray-500">You have a event on today.</p>
                                    <p class="text-sm text-gray-500">11.00 PM, 2 Aug, 2025</p>
                                </div>
                            </div>
                        </a>
                    @endfor

                </div>
                <!-- Notification box end  !-->
            </div>
            <div class="relative md:ml-3 sm:ml-1 cursor-pointer toggle-email-notification-button">
                <svg width="24" height="24" class="sm:w-4 sm:h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_4773)">
                        <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 6L12 13L2 6" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1_4773">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <div class="md:w-5 md:h-5 sm:w-4 sm:h-4 bg-red-500 rounded-full text-center text-white text-xs absolute -top-2 -end-2">
                    10
                    <div class="absolute top-0 start-0 rounded-full -z-10 animate-ping bg-red-400 w-full h-full"></div>
                </div>

                <!--Email Notification box start  !-->
                <div class="toggle-email-notification-box absolute w-96 h-96 bg-white border border-slate-300 rounded shadow top-12 right-0 sm:-right-10 overflow-auto" style="display: none">
                    @for ($i = 1; $i < 10; $i++)
                        <a href="#">
                            <div class="p-4 flex items-center hover:bg-slate-200">
                                <img src="{{ asset('assets/images/user.png') }}" alt="profile">
                                <div class="ml-2">
                                    <p class="text-sm text-gray-500">You have a event on today.</p>
                                    <p class="text-sm text-gray-500">11.00 PM, 2 Aug, 2025</p>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
                <!-- Email Notification box end  !-->
            </div>
        </div>

        <div class="profile">
            <div class="toggle-menu-button flex justify-center items-center w-full h-full">
                <img src="{{ asset('assets/images/profile.png') }}" alt="profile" class="ml-3 sm:w-2/4 sm:h-2/4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 9L12 15L18 9" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="toggle-menu absolute p-3 shadow-lg w-full rounded bg-white sm:-right-5" style="top: 70px;display:none">
                <ul>
                    <li class="py-2">
                        <p href="#" class="font-normal text-slate-700">
                            {{ Auth::user()->name }}
                        </p>
                    </li>
                    <li class="py-2">
                        <a href="#" class="font-normal text-slate-700">Profile</a>
                    </li>
                    <li class="py-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-transparent font-normal text-slate-700">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    /**
     * Define method changeLanguage to change the local language
     * @param lang 
     */
    function changeLanguage(lang) {
        window.location.href = '{{ url("locale") }}/' + lang;
    }
</script>
