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
                        <div class="Akurbox">
                            <textarea id="dynamicAkurTextarea" readonly placeholder="Check our Instagram: ">
Olen suomalainen mies, ja koen, että lojaalisuus ja ystävyys ovat vahvuuksiani. Ystävänä pyrin aina olemaan sellainen, johon voi luottaa ja turvautua missä tahansa tilanteessa. En ole vain se, joka on paikalla hyvissä hetkissä, vaan se, joka kuuntelee, tukee ja ymmärtää syvällisemmin. Monet sanovat, että minulla on terapeuttinen ote – osaan kuunnella ja auttaa ihmisiä heidän haasteissaan, mikä tekee minusta usein sen, jolle uskoudutaan.Käytän pronomineja he/him, ja sukupuoleni ja seksuaalisuuteni – heteroseksuaalisuus – ovat minulle luonnollisia osia siitä, kuka olen. Pyrin elämään niin, että kunnioitan kaikkien ihmisten valintoja ja identiteettejä. En tuomitse, vaan arvostan erilaisuutta ja sitä, miten ihmiset valitsevat elää elämäänsä. Minulle on tärkeää olla avoin ja rehellinen, ja haluan, että minua lähestyvät tietävät, että he voivat olla kanssani juuri sellaisia kuin ovat.Lisäksi koen, että suomalainen taustani vaikuttaa vahvasti siihen, miten näen maailman ja kuinka lähestyn ihmissuhteita – mutten jää kiinni pelkästään perinteisiin, vaan haluan myös oppia ja kasvaa ihmisenä muiden kokemusten kautta.</textarea>
                        </div>
                    </div>

                    <img class="Avatar" src="Akur_avatar.jpg">

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
