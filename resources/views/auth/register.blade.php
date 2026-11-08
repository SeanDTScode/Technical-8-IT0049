<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        @if ($errors->any())
    <div class="mb-4 text-red-600">
        <p>Please correct the following errors:</p>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div>
            <x-input-label for="username" value="Username" />

            <x-text-input
                id="username"
                name="username"
                type="text"
                class="block mt-1 w-full"
                value="{{ old('username') }}"
                required
                autofocus
            />

            <x-input-error
                :messages="$errors->get('username')"
                class="mt-2"
            />
        </div>

        <div class="mt-4">
            <x-input-label for="full_name" value="Full Name" />

            <x-text-input
                id="full_name"
                name="full_name"
                type="text"
                class="block mt-1 w-full"
                value="{{ old('full_name') }}"
                required
            />

            <x-input-error
                :messages="$errors->get('full_name')"
                class="mt-2"
            />
        </div>

        <div class="mt-4">
            <x-input-label for="email" value="Email" />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="block mt-1 w-full"
                value="{{ old('email') }}"
                required
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        <div class="mt-4">
            <x-input-label for="password" value="Password" />

            <x-text-input
                id="password"
                name="password"
                type="password"
                class="block mt-1 w-full"
                required
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <div class="mt-4">
            <x-input-label
                for="password_confirmation"
                value="Confirm Password"
            />

            <x-text-input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                class="block mt-1 w-full"
                required
            />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}">
                Already registered?
            </a>

            <x-primary-button class="ms-4">
                Register
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>