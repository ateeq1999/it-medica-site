@extends('layouts.folio')

@section('content')

@include('partials.folio.intro')
	<main id="main">
		
		<!-- ======= Services Section ======= -->
		@include('partials.folio.services', [ 'services' => $services, 'service' => $service ])
		<!-- End Services Section -->

		<!-- ======= About Section ======= -->
		@include('partials.folio.about', ['aboute' => $about ])
		<!-- End About Section -->

		<!-- ======= Counter Section ======= -->
		{{-- @include('partials.folio.counter') --}}
		<!-- End Counter Section -->

		<!-- ======= Portfolio Section ======= -->
		{{-- @include('partials.folio.projects', [ 'projects' => $projects, 'project' => $project ]) --}}
		<!-- End Portfolio Section -->

		<!-- ======= Testimonials Section ======= -->
		{{-- @include('partials.folio.testimonials', [ 'testimonials' => $testimonials ]) --}}
		<!-- End Testimonials Section -->

		<!-- ======= Blog Section ======= -->
		@include('partials.folio.blogs', [ 'blog_section' => $blog, 'blogs' => $blogs ])
		<!-- End Blog Section -->

		<!-- ======= Contact Section ======= -->
		@include('partials.folio.contactus', [ 'contactus' => $contactus ])
		<!-- End Contact Section -->
	</main>
@endsection