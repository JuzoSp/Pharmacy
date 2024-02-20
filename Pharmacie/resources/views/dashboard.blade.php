<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-100/50 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-green-700 dark:text-gray-100">
                    Bienvenue {{ Auth::user()->name }}
                    {{-- {{ __("You're logged in!") }} --}}
                </div>
            </div>
        </div>
    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
