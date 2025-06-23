@extends('layouts.app')
@section('title', 'Usuarios')

@section('content')
<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Lista de Usuarios</h1>

                <ul class="space-y-4">
                    @foreach ($users as $user)
                        <li class="p-4 bg-blue-50 dark:bg-blue-900 rounded-lg shadow flex justify-between items-center">
                            <div>
                                <p class="text-lg font-semibold text-gray-800 dark:text-white">{{ $user->name }}</p>
                                <p class="text-sm text-gray-600 dark:text-gray-300">{{ $user->email }}</p>
                            </div>
                            <a href="{{ url('/users/' . $user->id) }}" class="text-blue-600 dark:text-blue-300 hover:underline text-sm">
                                Ver detalles →
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
