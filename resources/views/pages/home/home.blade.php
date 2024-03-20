@extends('layouts.app')

@section('title')
Home - DRHM Management Consultancy Services
@endsection

@section('mainContent')

    <x-navigation-component active="home" />

    <x-home.intro-section-component />
    <x-custom-shape-divider-bottom-first />
    <x-home.solution-support-section-component />
    <x-custom-shape-divider-top-first />
    <x-home.one-word-description-section-component />
    <x-custom-shape-divider-bottom-second />
    <x-home.clients-section-component />

@endsection




