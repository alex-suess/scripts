<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>My Scripts</title>
    </head>
    <body>
        <div  class="bg-gradient-to-r from-purple-800 to-red-800">
            <nav style='max-width: 1280px;' class="mx-auto py-12 text-white px-4">
                <ul>
                    <li class="nav-item">
                        <p class='uppercase opacity-25 font-semibold tracking-widest mb-2 text-sm text-purple-100'>String Manipulation</p>
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
                </ul>
            </nav>
        </div>
        <div style='max-width: 1280px;' class="mx-auto  px-4">
            @yield('content')
        </div>
    </body>
</html>
