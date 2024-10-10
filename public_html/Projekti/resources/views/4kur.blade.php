<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('4kur Page') }}
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="container">
            <div class="laatikko">
                <div class="content">
                    <div class="message">
                        <div class="Akurbox">
                            <textarea id="dynamicAkurTextarea" readonly placeholder="Check our Instagram: ">
                                Your initial text here...</textarea>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const akurTextarea = document.getElementById('dynamicAkurTextarea');

        akurTextarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    </script>
</x-app-layout>
