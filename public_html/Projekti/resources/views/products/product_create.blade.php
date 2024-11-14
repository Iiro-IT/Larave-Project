<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form action="{{ route('ProductController', ['id'=>1]) }}">
                        Tuotteen nimi <input type="text" name="price" id="price">
                        
                        @error("price")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
