<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Socials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="message">

                        <div class="fisuCard">
                            <a href="{{ url('/fisu') }}">
                                <img src="fisu_avatar.png" alt="Fisu Avatar">
                            </a>
            </div>

                        </div>

                            <div class="AkurCard">
                            <a href="{{ url('/4kur') }}">
                                <img src="Akur_avatar.jpg" alt="Akur Avatar">
                            </a>

                                </div> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
