<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') &dash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>
    @stack('css') @stack('header_js')
</head>

<body class="font-sans font-normal roman text-base tracking-normal leading-normal bg-white text-grey-darker antialiased min-h-full h-full">
    <div id="app" class="min-h-full h-full" v-cloak>
    @hasSection('show-header') @yield('show-header') @endif
    @hasSection('show-navbar') @yield('show-navbar') @endif
    @hasSection('content-full') @yield('content-full') @endif
    @hasSection('content') @includeIf('layouts/partials/_content') @endif
    </div>
    <!-- Javascript -->
    @stack('footer_js')
</body>

</html>
