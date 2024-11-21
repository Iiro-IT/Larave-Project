<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="Avatarcontainer">
            <div class="Avatarlaatikko">
                <div class="Avatarcontent">
                    <div class="Avatarmessage">
                        <div class="fisuBox">
                            <textarea id="dynamicFisuTextarea" readonly placeholder="Check our Instagram:">
                                Fisu Text.......</textarea>
                        </div>
                    </div>
                    <img class="Avatar" src="fisu_avatar.png">
                </div>
            </div>
        </div>
    </div>

    <script>
        const fisuTextarea = document.getElementById('dynamicFisuTextarea');

        fisuTextarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    </script>
</x-app-layout>
