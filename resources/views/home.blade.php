@extends('layouts/base')

@section('title', 'Dashboard')

@section('show-header', true)

@section('content')
    <example-component title="Dashboard">
        You are signed in!
    </example-component>
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens>
@endsection
