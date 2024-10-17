<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('4kur Page') }}
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="ShopContainer">
            <div class="ShopBox">
                <div class="ShopContent">
                    <div class="ShopMessage">

                        <!-- Card 1 -->
                        <div class="ShopCard">
                            <img src="keyboard_pad_logo.jpg" alt="PadAvatar" class="PadAvatar">
                            <p class="ShopDescription"></p>
                        </div>

                        <!-- Card 2 -->
                        <div class="ShopCard">
                            <img src="mug.jpg" alt="MugAvatar" class="MugAvatar">
                            <p class="ShopDescription"></p>
                        </div>

                        <!-- Card 3 -->
                        <div class="ShopCard">
                            <img src="keyboard_pad_plain.jpg" alt="PlainAvatar" class="PlainAvatar">
                            <p class="ShopDescription"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
