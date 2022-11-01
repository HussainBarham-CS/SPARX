	@include('app.header')
	@extends('app.navBar')

    @section('show-logo')
    {{ asset('assets/img/logo.png') }}
    @endsection

    @section('home-link')
    #
    @endsection

    @section('about-link')
    #about
    @endsection 

    @section('services-link')
    #services
    @endsection

    @section('portfolio-link')
    #portfolio
    @endsection

    @section('contact-link')
    #contact
    @endsection

	@include('app.home')
	@include('app.about')
	@include('app.services')
	@include('app.protfolio')
	@include('app.contact')
	@include('app.footer')


