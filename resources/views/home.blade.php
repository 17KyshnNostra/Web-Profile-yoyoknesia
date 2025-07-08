@extends('layout.app')

@section('content')
    <x-home.home-hero/>
    <x-home.home-slider :portofolios="$portofolios"/>
    <x-home.hire-me/>
    <x-home.proses-produksi/>
    <x-home.services-dokumentasi :layanans="$layanans"/>
    <x-home.banner/>
    <x-home.testimoni/>
@endsection
