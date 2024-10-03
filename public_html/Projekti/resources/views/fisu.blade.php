<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fisu Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="laatikko">
                <div class="content">
                    <div class="message">
                        <div class="fisubox">
                            <textarea placeholder="Write your text here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
