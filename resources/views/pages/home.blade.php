    @extends('layouts.index')

    @section('content')
    
    @include('template-parts.banner')
    @include('template-parts.special-menu')
    @include('template-parts.menu')
    @include('template-parts.pricing')
    @include('template-parts.reservation')
    @include('template-parts.about')
    @include('template-parts.our_team')
    @include('template-parts.gallery')
    @include('template-parts.blog')

    @endsection