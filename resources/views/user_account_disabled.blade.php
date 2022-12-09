<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <p>User account is currently disabled.</p>
        <br/>
        <p>Please contact the System Administration on:<br/>
        <b> talk@lenspitch.com | + 1 800 641 9070</b></p>
        <br/>
        <p>Thank you</p>
    </x-auth-card>
</x-guest-layout>
 <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-0000f751-5e9d-4718-aaae-c3151afa7b7d"></div>
