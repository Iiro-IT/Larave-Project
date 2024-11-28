<x-app-layout>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="Avatarcontainer">
            <div class="Avatarlaatikko">
                <div class="Avatarcontent">
                    <div class="Avatarmessage">
                        <div class="Osa1">
                            <div class="fisuBox">
                                <textarea id="dynamicFisuTextarea" readonly placeholder="Check our Instagram:">
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
kerra heitettii päärynä vitu lujaa päin seinää (juuso heitti ja se käy salilla) ja kuulu vaan poks eikä jääny mössöö tai mtn missää vaa se hävis kokonaan.
                                </textarea>
                            </div>
                            <img class="Avatar" src="fisu_avatar.png">
                        </div>
                        <div>
                            <footer>
                                <div class="top-footer">
                                    <p>Fisujärvi</p>
                                </div>
                                <div class="middle-footer">
                                    <p>
                                    <div class ="CopyRight_footer">
                                        <br>Copyright &copy; Fisujärvi 2024 - 2025<br>
                                    </div>
                                    </p>
                                </div>
                                <div class="social_icons_footer">
                                    <div class="icon"><i class="fa-brands fa-x-twitter"></i></div>
                                    <div class="icon"><i class="fa-brands fa-twitch"></i></div>
                                    <div class="icon"><i class="fa-brands fa-youtube"></i></div>
                                    <div class="icon"><i class="fa-brands fa-github"></i></div>
                                </div>
                            </footer>
                        </div>
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
