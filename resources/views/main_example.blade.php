@extends('layouts/main')
@section('title', 'Dashboard') @push('css')
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
@endpush @push('header_js')
<script>
    window.App = @json([]);

</script>
<!-- Install Ziggy For SPA -->
{{-- @routes --}}
@endpush
@section('show-header')
    @includeIf('layouts/partials/_header')
@endsection

@section('show-navbar')
@auth
    @includeIf('layouts/partials/_navbar_auth') @endauth @guest
    @includeIf('layouts/partials/_navbar_guest') @endguest
@endsection


<!-- use either content or content-full-->

@section('content')
<example-component title="Dashboard">
    You are signed in!
</example-component>
<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>
@endsection
 @prepend('footer_js')
<!-- this will be loaded first -->
@if(config('echo.realtime'))
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
@endif @endprepend

<!-- this will be loaded second -->
@push('footer_js')
<!-- Load Socket If Echo is ON -->
@if(config('app.env') !== 'production')
<!-- Local ENV Assets -->
<script src="{{mix('/js/app.js')}}"></script>
@else
<!-- Production ENV Assets -->
<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{mix('/js/vendor.js')}}"></script>
<script src="{{mix('/js/app.js')}}"></script>
@endif
@endpush
