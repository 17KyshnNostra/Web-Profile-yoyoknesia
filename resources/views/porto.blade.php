@extends('layout.app')

@section('content')
    <x-porto.porto-section/>
    <x-home.hire-me/>
    <x-porto.porto-preview :portofolios="$portofolios"/>
    <x-porto.porto-benefit/>
@endsection
