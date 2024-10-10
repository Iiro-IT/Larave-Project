<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('4kur Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="laatikko">
                <div class="content">
                    <div class="message">
                        <div class="Akurbox">
                            <textarea placeholder="Type your message here..."></textarea>
                            <!-- Hyperlink to Instagram -->
                            <p class="instagram-link">
                                 
                                <a href="https://www.instagram.com/akuroininen?igsh=eW8yNDh0ZzE5aGFi" target="_blank" rel="noopener noreferrer">
                                    My Instagram
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
