<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(" Socials") }}
        </h2>
    </x-slot>

    <body class="flex items-center justify-center min-h-screen bg-gray-100">

        <div class="text-center">
            <!-- Flex container for horizontally aligning main texts -->
            <div class="flex items-center justify-center space-x-8 mb-8">
                <h1 class="text-3xl font-bold text-gray-100">Fisujärvi</h1>
                <h1 class="text-3xl font-bold text-gray-100">4kur</h1>
            </div>
    
            <!-- Grid for Undertext -->
            <div class="grid grid-cols-2 gap-10">
                <!-- First Column -->
                <div>
                    <ul class="space-y-2">
                        <li class="text-gray-100">Undertext 1</li>
                        <li class="text-gray-100">Undertext 2</li>
                        <li class="text-gray-100">Undertext 3</li>
                    </ul>
                </div>
    
                <!-- Second Column -->
                <div>
                    <ul class="space-y-2">
                        <li class="text-gray-100">Undertext 4</li>
                        <li class="text-gray-100">Undertext 5</li>
                        <li class="text-gray-100">Undertext 6</li>
                    </ul>
                </div>
            </div>
        </div>
</x-app-layout>
