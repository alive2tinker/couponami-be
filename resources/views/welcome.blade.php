<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @vite(['resources/css/app.css'])
    </head>
    <body class="antialiased overflow-y-hidden">
    <div class="gradient" style="position: absolute"></div>
    <div class="flex h-screen overflow-y-none">
        <div class="m-auto py-20">
            <div>
                <h1 class="text-4xl text-center text-zinc-300 font-black">@lang('Couponami')</h1>
                <div class="flex justify-center">
                    <p class="w-48 text-center text-zinc-400 py-4">@lang('intro')</p>
                </div>
                <div class="iphone-x my-7"></div>
            </div>
        </div>
    </div>
    </body>
</html>
