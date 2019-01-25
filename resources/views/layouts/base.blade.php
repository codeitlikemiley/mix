<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') &dash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>
    <!-- Important for Dusk Dashboard -->
    @if(config('app.env') !== 'testing')
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    @else
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @endif
</head>

<body class="font-sans font-normal roman text-base tracking-normal leading-normal bg-white text-grey-darker antialiased min-h-full h-full">
    <div id="app" class="min-h-full h-full" v-cloak>

    @hasSection('show-header')
        @include('layouts/partials/_header')
    @endif
    @hasSection('content-full')
        @yield('content-full')
    @endif
    @hasSection('content')
        @include('layouts/partials/_content')
    @endif
    </div>

    <!-- Important for Dusk Dashboard -->
    @if(config('app.env') !== 'testing')
    <script src="{{ url('/js/manifest.js') }}"></script>
    <script src="{{ url('/js/vendor.js') }}"></script>
    <script src="{{ url('/js/app.js') }}"></script>
    @else
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    @endif
</body>

</html>
