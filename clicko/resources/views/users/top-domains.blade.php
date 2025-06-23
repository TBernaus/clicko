@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Top 3 Dominios de Email</h1>
                    <div class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-4 py-2 rounded-full text-sm font-semibold">
                        Total usuarios con estos dominios: {{ array_sum($domains->toArray()) }}
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Dominio
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Cantidad de usuarios
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Porcentaje
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach($domains as $domain => $count)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                                            {{ strtoupper(substr($domain, 0, 1)) }}
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                {{ $domain }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 dark:text-white font-semibold">
                                        {{ $count }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2.5">
                                        <div class="bg-blue-600 h-2.5 rounded-full" 
                                             style="width: {{ ($count / array_sum($domains->toArray())) * 100 }}%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400 mt-1 block">
                                        {{ number_format(($count / array_sum($domains->toArray())) * 100, 1) }}%
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($domains as $domain => $count)
                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 p-6 rounded-lg shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-300">Dominio</p>
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white">{{ $domain }}</h3>
                            </div>
                            <div class="bg-blue-100 dark:bg-blue-700 text-blue-800 dark:text-blue-200 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $count }}</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">usuarios registrados</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection