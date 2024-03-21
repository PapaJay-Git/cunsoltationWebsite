@extends('layouts.app')

@section('title')
Home - DRHM Management Consultancy Services
@endsection

@section('mainContent')

    <x-navigation-component active="home" />
    <x-home.intro-section-component />
    <x-dividers.bottom-first />
    <x-home.solution-support-section-component />
    <x-dividers.top-first />
    <x-home.one-word-description-section-component />
    <x-dividers.bottom-second />
    <x-home.founder-introduction-section-component />
    <x-dividers.top-second />
    <x-dividers.solo-component />
    <x-home.clients-section-component />

@endsection




