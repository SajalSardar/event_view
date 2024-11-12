<x-guest-layout>

    <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
        <div class="xl:block lg:block md:block sm:hidden">
            <img alt="img" src="{{ asset('assets/images/login.png') }}" class="w-full" />
        </div>
        <div class="flex px-6 items-center">
            <main class="border border-line-base rounded p-6 w-full">
                <h3 class="font-semibold text-3xl font-pop text-word-title">SIGN IN</h3>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}" class="mt-6 grid grid-cols-6 gap-3">
                    @csrf
                    <div class="col-span-6 sm:col-span-3">
                        <a href="#" class="flex justify-center items-center gap-1 border border-line-base rounded-lg h-[40px]">
                            <img src="{{ asset('assets/images/google.png') }}" alt="google">
                            <span class="text-paragraph">Sign in with Google</span>
                        </a>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <a href="#" class="flex justify-center items-center gap-2 border border-line-base rounded-lg h-[40px]">
                            <img src="{{ asset('assets/images/fb.png') }}" alt="facebook">
                            <span class="text-paragraph">Sign in with Facebook</span>
                        </a>
                    </div>

                    <p class="col-span-6 text-paragraph text-center w-full">
                        <span>Or Email</span>
                    </p>


                    <div class="col-span-6">
                        <div class="col-span-6">
                            <x-forms.text-input-icon type="email" name="email" placeholder="Email Address" :value="old('email')" dir="start">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            </x-forms.text-input-icon>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="col-span-6">
                        <x-forms.text-input-icon type="password" name="password" placeholder="Password" dir="start">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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

                    <div class="col-span-6 mt-2">
                        <x-buttons.primary class="w-full">
                            SIGN IN
                        </x-buttons.primary>
                    </div>

                    <div class="col-span-6">
                        <p class="text-sm text-gray-500 sm:mt-0">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="text-primary-400 underline font-bold">Sign Up</a>.
                        </p>
                    </div>
                </form>
            </main>
        </div>
    </div>
</x-guest-layout>