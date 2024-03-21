@extends('layouts.app')

@section('title')
Services - DRHM Management Consultancy Services
@endsection

@section('mainContent')

    <x-navigation-component active="services" />
    <x-services.intro-section-component/>
    <x-dividers.bottom-first />

    @foreach ($servicesData as $serviceData)
        <x-services.service-component
            service-name="{{ $serviceData['name'] }}"
            description="{!! $serviceData['description'] !!}"
            image-background="{{ $serviceData['imageBackground'] }}"
            class-identifier="{{ $serviceData['classIdentifier'] }}"
            is-reverse="{{ $serviceData['isReverse'] }}"
        />
    @endforeach


@endsection


