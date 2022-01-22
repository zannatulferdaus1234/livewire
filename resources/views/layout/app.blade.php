<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">



        {{-- trix for textarea --}}
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.3.1/dist/trix.css">



        {{-- alpine --}}
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @livewireStyles()

        @stack('styles')


    </head>

    <body>

       @yield('content')


        @livewireScripts()

        @stack('scripts')

        {{-- trix for textarea --}}
        <script type="text/javascript" src="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>

    </body>
</html>
