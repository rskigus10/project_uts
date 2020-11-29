@extends('template.base')
@section('content')
    <!-- Service Area start -->
        @include('template.section.service')
    <!-- Service Area End -->

    <!-- About us start -->
        @include('template.section.about')
    <!-- About us End -->
 
    <!-- bLOG Start -->
        @include('template.section.blog1')
    <!-- bLOG End -->

    <!-- Conatct Area Start-->
        @include('template.section.contact')
@endsection