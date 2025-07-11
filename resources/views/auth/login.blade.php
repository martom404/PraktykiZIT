<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Login to your's account</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-button onclick="window.history.back()">Go back</x-button>
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>
