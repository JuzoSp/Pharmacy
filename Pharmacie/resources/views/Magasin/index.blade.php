<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('Magasin') }}
        </h2>
    </x-slot>
    {{-- Début Formulaire --}}
    <div class="flex justify-center items-center">
        <h1>Liste des Magasins</h1>
        @if (session('success'))
            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-600 font-medium">
                {{ session('success') }}
            </div>
        @endif
        <ul>
            @foreach ($magasins as $m)
                <li>{{ $m->nom }} - {{ $m->adresse }} - {{ $m->ville }} - {{ $m->code_postal }}</li>
                <form method="POST" action="{{ route('magasin.destroy', ['id' => $m->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-2 py-3 rounded">Supprimer</button>
                </form>
            @endforeach
        </ul>
    </div>
</x-app-layout>
