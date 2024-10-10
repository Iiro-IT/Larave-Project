<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="container">
            <div class="laatikko">
                <div class="content">
                    <div class="message">


                        <div class="pokemonCard fisuCard">
                            <a href="{{ url('/fisu') }}">
                                <img src="fisu_avatar.png" alt="Fisu Avatar" class="fisuAvatar">
                            </a>
                            <h3>FisuJärvi</h3>
                            <p class="description"></p>
                        </div>

                        <!-- Akur Pokémon Card -->
                        <div class="pokemonCard AkurCard">
                            <a href="{{ url('/4kur') }}">
                                <img src="Akur_avatar.jpg" alt="Akur Avatar" class="akurAvatar">
                            </a>
                            <h3>Akur</h3>
                            <p class="description"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
