<x-guest-layout>


    <x-card>

        <x-slot name="header">

            <x-header-content title="ahoy!" subtitle="Welcome back mate" extra=" "/>

        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <x-form>
                <x-input-title title="w3crew sign in"/>
                <x-text-input id="email"  type="email"
                              name="email" :value="old('email')"
                              placeholder="email" required autofocus/>
                <x-input-error :messages="$errors->get('email')"/>
            </x-form>

            <!-- Password -->
            <x-form>
                <x-text-input id="password"
                              type="password"
                              name="password"
                              placeholder="password"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')"/>
            </x-form>


            <!-- Remember Me -->
            <x-form>
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </x-form>

            <div class="flex items-center flex-col justify-center mt-4">


                <x-primary-button >
                    {{ __('Log in') }}
                </x-primary-button>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ok"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-card>
</x-guest-layout>
