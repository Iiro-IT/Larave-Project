<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Socials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="message">

                        <div class="fisuCard">
                            <img src="fisu_avatar.png">

                            <div class="fisuContainer">
                              <h4><b>Fisujärvi</b></h4>
                              <p>SpriteMaker</p>

                              <div class="4kurCard">
                                <img src="4kur_avatar.jpg">
    
                                <div class="4kurContainer">
                                  <h4><b>4kur</b></h4>
                                  <p>Main programmer</p>
                              </div> 
                            </div>
                          </div> 
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
