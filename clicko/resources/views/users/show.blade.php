@extends('layouts.app')
@section('title', 'Detalles del Usuario')

@section('content')
<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Detalles del Usuario</h1>

                <div class="space-y-4 text-gray-700 dark:text-gray-200">
                    <p><span class="font-semibold">ID:</span> {{ $user->id }}</p>
                    <p><span class="font-semibold">Nombre:</span> {{ $user->name }}</p>
                    <p><span class="font-semibold">Email:</span> {{ $user->email }}</p>
                </div>

                <div class="mt-6">
                    <a href="/users" class="text-gray-800 dark:text-blue-300 hover:underline text-sm">
                        ← Volver a la lista
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
