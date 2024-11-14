<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fisu Page') }}
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="container">
            <div class="laatikko">
                <div class="content">
                    <div class="message">
                        <div class="fisuBox">
                            <textarea id="dynamicFisuTextarea" readonly placeholder="Check our Instagram:">
                                4kur text.....</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const fisuTextarea = document.getElementById('dynamicFisuTextarea');

        fisuTextarea.addEventListener('input', function () {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    </script>
</x-app-layout>
