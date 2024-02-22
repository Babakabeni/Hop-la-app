<x-guest-layout>
    <form method="POST" action="{{ route('update.Admin', ['id' => $user->id]) }}">
        @csrf
        @method('PATCH')
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="Nom" :value="$user->Nom" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="Email" :value="$user->Email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Fonction -->
        <div class="mt-4">
            <x-input-label for="Fonction" :value="__('Fonction')" />
            <x-text-input id="Fonction" class="block mt-1 w-full" type="text" name="Fonction" :value="$user->Fonction" required autocomplete="username" />
            <x-input-error :messages="$errors->get('Fonction')" class="mt-2" />
        </div>

            <x-primary-button class="ms-4">
                {{ __('Modifier') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
