<x-app-layout>
    <x-slot name="header">
        @section('title', 'Tu perfil')

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido a tu perfil!') }}
        </h2>
        <br>
        <p class="mb-4">
            {{ __("Si quieres editar tu información, contacta con un administrador.")}}
        </p>
        <p class="mb-4">
            {{__(" Mientras tanto puedes navegar usando el menú superior o mediante los siguientes enlaces:") }}
        </p>
        <ul class="space-y-2">
            <li>
                <a href="/users" class="text-gray-700 hover:underline hover:text-gray-900">
                    → {{ __('Usuarios') }}
                </a>
            </li>
            <li>
                <a href="/top-domains" class="text-gray-700 hover:underline hover:text-gray-900">
                    → {{ __('Top Dominios') }}
                </a>
            </li>
        </ul>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
