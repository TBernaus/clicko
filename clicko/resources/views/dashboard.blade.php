<x-app-layout>
    <x-slot name="header">
        @section('title', 'Prueba técnica Clicko - Tomàs Bernaus')

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <p class="mb-4">
                    {{ __("Puedes navegar usando el menú superior o mediante los siguientes enlaces:") }}
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
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{ __("You're logged in!") }} 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
