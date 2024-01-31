<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8 max-w-md w-full text-center">
            <h1 class="text-5xl font-bold mb-4 text-gray-900 dark:text-gray-100">Welcome back!</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">Visit your profile to use AI and generate your unique avatar.</p>
            <x-secondary-button>
                {{ __('Go to Profile') }}
            </x-secondary-button>
        </div>
    </div>
</x-app-layout>
