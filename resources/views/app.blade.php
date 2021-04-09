<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('svg/icon.svg') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>My Scripts</title>
    </head>
    <body>
        <div  class="bg-gradient-to-r from-purple-800 to-red-800">
            <div style='max-width: 1280px;' class="mx-auto text-purple-200 px-4 py-8 flex items-center">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                <span class="ml-4">My Scripts</span>
            </div>
            <nav style='max-width: 1280px;' class="mx-auto pb-12 text-white px-4 flex">
                <ul class="pr-4">
                    <li class="nav-item">
                        <p class='uppercase opacity-25 font-semibold tracking-widest py-2 text-sm text-purple-100'>Text Manipulation</p>
                    </li>
                    <li>
                        <a href="{{ route('texts.slashes.remove.view') }}" class="hover:underline block py-2">Remove escaping slashes</a>
                    </li>
                    <li>
                        <a href="{{ route('texts.slashes.add.view') }}" class="hover:underline block py-2">Add escaping slashes</a>
                    </li>
                    <li>
                        <a href="{{ route('texts.lorem.view') }}" class="hover:underline block py-2">Lorem ipsum</a>
                    </li>
                    <li>
                        <a href="{{ route('html.markdown.view') }}" class="hover:underline block py-2">Html to Markdown</a>
                    </li>
                    <li>
                        <a href="{{ route('html.html.view') }}" class="hover:underline block py-2">Markdown to Html</a>
                    </li>
                </ul>
                <ul class="px-4">
                    <li class="nav-item">
                        <p class='uppercase opacity-25 font-semibold tracking-widest py-2 text-sm text-purple-100'>Math stuff</p>
                    </li>
                    <li>
                        <a href="{{ route('math.triangle.view') }}" class="hover:underline block py-2">Pythagoras</a>
                    </li>
                </ul>
                <ul class="px-4">
                    <li class="nav-item">
                        <p class='uppercase opacity-25 font-semibold tracking-widest py-2 text-sm text-purple-100'>Football</p>
                    </li>
                    <li>
                        <a href="{{ route('football.show-snap-counts') }}" class="hover:underline block py-2">Snap Count Converter</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div style='max-width: 1280px;' class="mx-auto  px-4">
            @yield('content')
        </div>
    </body>
</html>
