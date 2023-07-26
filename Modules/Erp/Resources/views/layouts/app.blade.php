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
        @vite('Modules/Erp/Resources/Vuejs/css/main.css')
        @vite('Modules/Erp/Resources/Vuejs/app.js')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
