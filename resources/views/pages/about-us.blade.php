@extends('layouts.app')

@section('title')
About Us - DRHM Management Consultancy Services
@endsection

@section('mainContent')

    <x-navigation-component active="about-us" />
    <x-about-us.intro-section-component/>
    <x-dividers.bottom-first />


@endsection




