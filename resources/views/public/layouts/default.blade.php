<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ str_replace('_', ' ', config('app.name', 'Febryan_Sambuari')) }}</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>
<body class="bg-slate-300 dark:bg-zinc-900">
    @include('public.layouts.header')

    <div class="max-w-6xl mx-auto animate-fade-in-down">
        @yield('content')
    </div>

    @include('public.layouts.footer')

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
