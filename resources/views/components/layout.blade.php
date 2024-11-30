<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rent Check</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>

    <body class=" bg-black text-white">
        <div class="">
            <nav class="flex justify-between items-center px-10 py-4 border-b border-white/10 bg-orange">
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/bobcat-logo-round.svg') }}" class="logo-size p-5" alt="">
                    </a>
                </div>
                <div class="space-x-6 font-bold">
                    <a href="#">Equipment</a>
                    <a href="#">Requirements</a>
                    <a href="#">Contact</a>
                </div>
                <div>
                    <a href="#">Admin</a>
                </div>

            </nav>

            <main class="px-10 mt-10 max-w-[986] mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
