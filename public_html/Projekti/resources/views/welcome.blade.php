<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>WildLife Smp</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="css/tyylit.css" rel="stylesheet" />
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <audio id="background-music" loop>
        @foreach (File::files(public_path('music')) as $file)
            @if ($file->getExtension() === 'mp3')
                <source src="{{ asset('music/' . $file->getFilename()) }}" type="audio/mpeg">
            @endif
        @endforeach
        Your browser does not support the audio element.
    </audio>

    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute inset-0 w-full h-full object-cover z-[-1]"
            src="https://i.ibb.co/tY89SCX/bg.jpg" alt="Background Image" />
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-full px-6 lg:max-w-8xl"> <!-- Change max-w-2xl to max-w-full -->
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <!-- Logo -->
                    <div class="flex lg:justify-center lg:col-start-2 w-1/2">
                        <img src="{{ asset('icon.png') }}">
                    </div>
                    <!-- End Of Logo -->
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">

                                    <!-- Introduction Section -->
                                    <div class="flex items-center">
                                        <!-- Text on the left -->
                                        <div class="w-1/2">
                                            <p>
                                                For those curious to embark on a deeper journey into the vast and
                                                evolving world of <b>SpellGauntlet</b>, watching <b>SpGauntletShorts</b>
                                                is an essential step. Within these videos, the passionate developers of
                                                <b>SpellGauntlet</b> take you behind the scenes to explore the rich
                                                lore, the immersive realms, and the boundless magic that define this
                                                extraordinary universe. Learn about the spells and abilities only hinted
                                                at in the game, uncover the untold stories of powerful sorcerers and
                                                ancient legends, and discover the enchanted landscapes that make
                                                <b>SpellGauntlet</b> a truly spellbinding experience.

                                                With each new episode, you’ll gain insights into the art of crafting
                                                powerful spells, the balance of light and dark forces, and the
                                                challenges faced by those who choose the path of the mage. From the
                                                arcane towers to mystical forests, the world of <b>SpellGauntlet</b> is
                                                a realm of endless potential and powerful magic, awaiting those daring
                                                enough to wield it. Don’t miss out—join us as we reveal the secrets and
                                                powers that lie within the world of <b>SpellGauntlet</b>, where
                                                adventure and mystery await at every turn.
                                            </p>
                                        </div>

                                        <!-- Wrapper div with padding-left -->
                                        <div class="pl-10">
                                            <iframe class="h-auto" width="560" height="315"
                                                src="https://www.youtube.com/embed/oHg5SJYRHA0" title="RickRoll"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                    <!-- News Section -->
                                    <h1 class="text-center text-4xl font-bold mb-8">Latest News</h1>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                        @foreach ($newsArticles as $news)
                                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                                <!-- Display news image if available -->
                                                @if ($news->image)
                                                    <img src="{{ asset('storage/' . $news->image) }}"
                                                        alt="{{ $news->title }}" class="w-full h-48 object-cover">
                                                @else
                                                    <!-- Placeholder image if no image is provided -->
                                                    <img src="https://via.placeholder.com/600x400"
                                                        alt="{{ $news->title }}" class="w-full h-48 object-cover">
                                                @endif

                                                <div class="p-6">
                                                    <!-- Display publication date -->
                                                    <p class="text-gray-600 text-sm mb-1">Posted on:
                                                        {{ $news->created_at->format('F j, Y') }}</p>

                                                    <!-- Title and description -->
                                                    <h2 class="text-xl font-bold text-gray-800 mb-2">
                                                        {{ $news->title }}</h2>
                                                    <p class="text-gray-700">{{ Str::limit($news->description, 100) }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- End of News Section -->

                                    <!-- Footer Section -->
                                    <div class="text-center mt-12">
                                        <footer class="CopyrightFooter">
                                            <p class="font-semibold text-lg">SpellGauntlet &copy; 2024 - 2025</p>
                                            <p>All rights reserved</p>
                                        </footer>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script>
        var audio = document.getElementById('background-music');

        function requestAudioPermission() {
            // Create an AudioContext to handle permissions
            const audioContext = new(window.AudioContext || window.webkitAudioContext)();

            // Resume the audio context and attempt to play the audio
            audioContext.resume().then(() => {
                audio.play().then(() => {
                    console.log('Audio is playing');
                }).catch(err => {
                    console.error('Audio play failed:', err);
                    // Fallback: Show a message to the user
                    alert('Please click anywhere on the page to allow audio playback.');
                });
            }).catch(err => {
                console.error('AudioContext failed:', err);
            });
        }

        // Randomly switch tracks when one ends
        audio.addEventListener('ended', function() {
            let sources = audio.getElementsByTagName('source');
            let current = Math.floor(Math.random() * sources.length);
            audio.src = sources[current].src; // Randomly select a new track
            audio.play().catch(err => {
                console.error('Error playing new track:', err);
            });
        });

        // Attempt to request audio permission on page load
        document.addEventListener('DOMContentLoaded', () => {
            // Request permission on user interaction
            document.body.addEventListener('click', () => {
                requestAudioPermission();
                // Remove the event listener after first interaction
                document.body.removeEventListener('click', arguments.callee);
            }, {
                once: true
            }); // Only run once
        });
    </script>
</body>

</html>
