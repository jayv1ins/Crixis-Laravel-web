<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto  p-6 rounded-xl">
            <x-panel>
            <h1 class="text-center font-bold text-xl">Log in!</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf

                <x-form.input name="email" type="email" autocomplete="username"/>
                <x-form.input name="password" type="password" autocomplete="current-password"/>

                    <x-form.button>Log In</x-form.button>

                <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-red-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            </form>
        </x-panel>
        </main>
    </section>
</x-layout>
