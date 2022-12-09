<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
               
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('setting.update') }}">
            @csrf
            @method('PATCH')
            <!-- Name -->
            <div>
                <x-label for="firstname" :value="__('Firstname')" />

                {{$user->firstname}}
            </div>

            <div class="pt-4">
                <x-label for="surname" :value="__('Surname')" />

               {{ $user->surname }}
            </div>

            <div class="pt-4">
                <x-label for="phone" :value="__('Phone Number')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ Auth::user()->phone }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

               {{$user->email}}
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Category')"/>

               {{$user->category}}
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Gender')" />

               {{$user->gender}}
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('New Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm New Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                   
                </a>

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
