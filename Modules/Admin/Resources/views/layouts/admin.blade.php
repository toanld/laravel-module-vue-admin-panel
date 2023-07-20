<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <script type="application/javascript">
            @php
                echo 'const myLanguages = ' . json_encode(myTranslate()->getLang()) . '; window.myLanguages = myLanguages;';
            @endphp
        </script>
        <!-- Scripts -->
        @routes
        @vite('Modules/Admin/Resources/Vuejs/admin.js')
        @vite('Modules/Admin/Resources/Vuejs/css/main.css')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
