@extends('layout.app')

@section('content')
    <x-services.services-hero/>
    <x-home.services-dokumentasi :layanans="$layanans"/>
    <x-home.banner/>
    <x-services.services-contact/>
@endsection