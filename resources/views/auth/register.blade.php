<x-guest-layout>
    <x-card>

        <x-slot name="header">
            <div class="pt-2 sm:pt-4 -mb-2 m-2">
                <div class="grid grid-cols-4 bg-blue rounded-full">
                    <div class="flex justify-center bg-ok rounded-full py-2 items-center">
                        <p class="text-xs sm:text-lg text-blue">Login</p>
                    </div>
                    <div class="flex justify-center  rounded-r-full py-2 items-center">
                        <p class=" text-xs sm:text-lg text-ok"> Details </p>
                    </div>
                    <div class="flex justify-center rounded-full py-2 items-center">
                        <p class=" text-xs sm:text-lg text-ok"> Skills </p>
                    </div>
                    <div class="flex justify-center rounded-full py-2 items-center">
                        <p class="text-xs sm:text-lg text-ok"> Experience </p>
                    </div>
                </div>
            </div>

            <x-header-content title="AYE !" subtitle="Working in the web3 space? "
                              extra="You've found the right place! "/>

        </x-slot>


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <x-form>

                <x-input-title title="what shall we call u ? "/>
                <x-text-input id="username"
                              type="text" name="username"
                              :value="old('username')"
                              placeholder="username" required autofocus/>

                <x-input-error :messages="$errors->get('username')" />

            </x-form>

            <!-- Email Address -->
            <x-form>
                <x-input-title title="w3crew login info. "/>
                <x-text-input id="email"  type="email"
                              name="email" :value="old('email')"
                              placeholder="email"
                              required/>

                <x-input-error :messages="$errors->get('email')" />

            </x-form>
            <x-form>
                <x-text-input id="password"
                              type="password"
                              name="password"
                              placeholder="password"
                              required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password')" />
            </x-form>

            <x-form>
                <x-text-input id="password_confirmation"
                              type="password"
                              name="password_confirmation"
                              placeholder="confirm password"
                              required/>

                <x-input-error :messages="$errors->get('password_confirmation')" />
            </x-form>

            <div class="flex flex-col items-center justify-center mt-10">

                <x-primary-button >
                    {{ __('Register') }}
                </x-primary-button>

                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ok"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
    </x-card>
</x-guest-layout>
