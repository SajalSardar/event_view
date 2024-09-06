<div class="h-[70px] bg-navbar py-2 px-6 bg-navbar-bg flex items-center sticky top-0 left-0 z-30" style="border-bottom: 1px solid #cfcece;z-index:10">

    <div class="flex w-full items-center">
        <div class="basis-4/6">
            <div class="flex h-[70px]">
                <div class="basis-1/6 flex items-center pl-14">
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
                <div class="basis-4/6 flex items-center">
                    <input class="w-[calc(100%-20px)] sm:w-[calc(100%-200px)] p-3 border border-slate-300 rounded" type="search" placeholder="search here...">
                </div>
                <div class="basis-1/6 flex items-center border border-slate-300 border-r-1 border-l-0 border-t-0 border-b-0">
                    <select class="border border-slate-200 rounded bg-transparent">
                        <option value="attende">Attendee</option>
                        <option value="attende">Organizer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="basis-2/6">
            <div class="flex h-[70px]">
                <div class="basis-1/3 flex justify-center items-center border border-slate-300 border-r-1 border-l-0 border-t-0 border-b-0">
                    <img src="{{ asset('assets/icons/eng.png') }}" alt="country">
                    <div>
                        <select onchange="changeLanguage(this.value)" class="border-none bg-transparent">
                            <option {{ session()->has('locale') && session()->get('locale') == 'en' ? 'selected' : '' }} value="en">ENG</option>
                            <option {{ session()->has('locale') && session()->get('locale') == 'bn' ? 'selected' : '' }} value="bn">BN</option>
                        </select>
                    </div>
                </div>
                <div class="basis-1/3 flex justify-center items-center border border-slate-300 border-r-1 border-l-0 border-t-0 border-b-0">
                    <img src="{{ asset('assets/icons/notifications.png') }}" alt="notification" class="pr-3">
                    <img src="{{ asset('assets/icons/email-notification.png') }}" alt="email_notification">
                </div>
                <div class="basis-1/3 cursor-pointer relative">
                    <div class="toggle-menu-button flex justify-center items-center h-full">
                        <img src="{{ asset('assets/images/profile.png') }}" alt="profile">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="toggle-menu absolute p-3 shadow-lg w-full rounded bg-white" style="top: 70px;display:none">
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
    </div>
</div>
<script>
    /**
     * Define method changeLanguage to change the local language
     * @param lang 
     */
    function changeLanguage(lang) {
        window.location.href = '{{ url('locale') }}/' + lang;
    }
</script>
