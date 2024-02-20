<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Magasin') }}
        </h2>
    </x-slot>
    {{-- Début Formulaire --}}
    <div class="flex justify-center items-center">
        <!-- component -->
        <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <h2 class="font-semibold text-xl text-gray-600">Veuillez ajouter votre nom de Magasin</h2>
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Personal Details</p>
                                <p>Please fill out all the fields.</p>
                            </div>
                            <form method="POST" action="{{ route('magasin.store') }}">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <label for="nom">Nom du Magasin</label>
                                            <input type="text" id="nom" name="nom"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value="" />
                                        </div>

                                        <div class="md:col-span-5">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" id="adresse" name="adresse"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="ex:Ambohimiadana..." />
                                        </div>

                                        <div class="md:col-span-3">
                                            <label for="ville">Ville</label>
                                            <input type="text" id="ville" name="ville"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="" />
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="code_postal">Code Postal</label>
                                            <input type="text" id="code_postal" name="code_postal"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                placeholder="" />
                                        </div>

                                        <div class="md:col-span-5 text-right">
                                            <div class="inline-flex items-end">
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Entrer</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin Formulaire --}}
</x-app-layout>
