{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest-layout>
    <section class="bg-white border border-slate-400 lg:rounded-3xl sm:rounded-none">
        <div class="lg:grid sm:h-[850px] h-[500px] lg:grid-cols-12">
            <section class="relative flex h-full items-end lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="" src="{{ asset('assets/images/login-page-image.png') }}" class="absolute lg:rounded-l-3xl sm:rounded-none inset-0 h-full w-full object-cover opacity-80" />
            </section>

            <main class="flex items-center justify-center py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl border border-slate-200 rounded-lg p-12">
                    <h3 class="font-bold text-2xl">SIGN IN</h3>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}" class="mt-8 grid grid-cols-6 gap-6">
                        @csrf
                        <div class="col-span-6 sm:col-span-3">
                            <a href="#" class="inline-block border border-slate-200 rounded-lg p-3 w-full">
                                <img class="inline-block" src="{{ asset('assets/icons/goolge-logo.png') }}" alt="google">
                                <span class="pl-2">Sign in with Google</span>
                            </a>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <a href="#" class="inline-block border border-slate-200 rounded-lg p-3 w-full">
                                <img class="inline-block" src="{{ asset('assets/icons/facebook-logo.png') }}" alt="facebook">
                                <span class="pl-2">Sign in with Facebook</span>
                            </a>
                        </div>

                        <div class="col-span-6 text-center">
                            <span>Or Email</span>
                        </div>

                        <div class="col-span-6">
                            <x-forms.text-input type="email" placeholder="Email" name="email" :value="old('email')" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-forms.text-input-icon type="password" name="password" placeholder="Password">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1_4905)">
                                        <path d="M17.94 17.94C16.2306 19.243 14.1491 19.9649 12 20C5 20 1 12 1 12C2.24389 9.68192 3.96914 7.65663 6.06 6.06003M9.9 4.24002C10.5883 4.0789 11.2931 3.99836 12 4.00003C19 4.00003 23 12 23 12C22.393 13.1356 21.6691 14.2048 20.84 15.19M14.12 14.12C13.8454 14.4148 13.5141 14.6512 13.1462 14.8151C12.7782 14.9791 12.3809 15.0673 11.9781 15.0744C11.5753 15.0815 11.1752 15.0074 10.8016 14.8565C10.4281 14.7056 10.0887 14.4811 9.80385 14.1962C9.51897 13.9113 9.29439 13.572 9.14351 13.1984C8.99262 12.8249 8.91853 12.4247 8.92563 12.0219C8.93274 11.6191 9.02091 11.2219 9.18488 10.8539C9.34884 10.4859 9.58525 10.1547 9.88 9.88003" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L23 23" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1_4905">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </x-forms.text-input-icon>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="col-span-6 flex justify-between">
                            <p class="flex gap-4">
                                <x-forms.checkbox-input name="remember" />
                                <span class="text-sm text-gray-700">
                                    {{ __('Remember me') }}
                                </span>
                            </p>
                            <p class="flex gap-4">
                                <span class="text-sm text-gray-700">
                                    <a href="{{ route('password.request') }}">{{ __('Forget Password ?') }}</a>
                                </span>
                            </p>
                        </div>

                        <div class="col-span-6">
                            <x-buttons.primary class="w-full">
                                SIGN IN
                            </x-buttons.primary>
                        </div>


                        <div class="col-span-6">
                            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                                Don't have an account?
                                <a href="{{ route('register') }}" class="text-primary-400 underline font-bold">Sign Up</a>.
                            </p>
                        </div>

                    </form>
                </div>
            </main>
        </div>
    </section>
</x-guest-layout>
