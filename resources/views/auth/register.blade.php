<x-guest-layout>

    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        {{-- <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
            {{ __('Register') }}
        </x-nav-link> --}}
    </div>
    <x-auth-card>


        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            {{-- <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> --}}

            <!-- username -->
            <div>
                <x-input-label for="username" :value="__('username')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                    required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- fullname -->
            <div>
                <x-input-label for="fullname" :value="__('fullname')" />

                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')"
                    required autofocus />

                <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- address -->
            <div>
                <x-input-label for="address" :value="__('address')" />

                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    required autofocus />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- date -->
            <div>
                <x-input-label for="birthdate" :value="__('birthdate')" />

                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')"
                    required autofocus />

                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>

            <!-- no telp -->
            <div>
                <x-input-label for="phoneNumber" :value="__('phoneNumber')" />

                <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber"
                    :value="old('phoneNumber')" required autofocus />

                <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
            </div>
            <!-- religion -->
            <div>
                <x-input-label for="religion" :value="__('religion')" />

                <x-text-input id="religion" class="block mt-1 w-full" type="text" name="religion" :value="old('religion')"
                    required autofocus />

                <x-input-error :messages="$errors->get('religion')" class="mt-2" />
            </div>
            <!-- gender -->
            <div>
                <x-input-label for="gender" :value="__('gender')" />

                <select name="gender" class="block mt-1 w-full">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>




            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
