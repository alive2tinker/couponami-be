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
    <body class="antialiased">
        <div class="flex h-screen">
            <div class="m-auto w-1/3 -pl-12">
                <div class="flex justify-between">
                    <div class="bg-white rounded-lg p-5">
                        <div class="flex">
                            <img src="{{ asset('images/nuIcon.png') }}" alt="" class="w-20 h-20">
                            <h1 class="text-2xl font-bold mt-5">@lang('Couponami')</h1>
                        </div>
                        <p class="ml-5">@lang('intro')</p>
                    </div>
                    <div>
                        <div class="iphone-x"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
